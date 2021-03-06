#!/bin/bash
################################################################################
#
# Generic command runner script
# 
# Run deployment scripts / Ansible playbooks as required.
#
# Fired from git post-receive hook within server repository.
#
################################################################################

if [ $# -lt 3 ]
then
    echo "usage - $0 [old git revision] [new git revisions] [git ref name]"
    exit 1
fi

oldrev="$1"
newrev="$2"
refname="$3"
ansible_cmd="$(which ansible-playbook)"
git_drupal_repo_directory="$(pwd)"

# echo "hello there! running deploy.sh script at $(date)" 

if [ -x "$ansible_cmd" ]; then
  $ansible_cmd scripts/ansible/deploy/dev-playbook.yml --verbose --extra-vars "git_old_revision=$oldrev git_new_revision=$newrev git_refname=$refname git_drupal_repo_directory=$git_drupal_repo_directory"
fi
