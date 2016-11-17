<?php

/**
 * By default, Drush will download projects compatible with the current
 * version of Drupal, or, if no Drupal site is specified, then the Drupal-8
 * version of the project is downloaded.  Set default-major to select a
 * different default version.
 */
$options['default-major'] = 8;

// Don't include devel modules in configuration export/import procedures.
$command_specific['config-export']['skip-modules'] = array('devel,kint,webprofiler');
$command_specific['config-import']['skip-modules'] = array('devel,kint,webprofiler');
