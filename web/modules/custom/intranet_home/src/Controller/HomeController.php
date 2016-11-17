<?php

namespace Drupal\intranet_home\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HomeController.
 *
 * @package Drupal\intranet_home\Controller
 */
class HomeController extends ControllerBase {
  /**
   * Home.
   *
   * @return string
   *   Return Home string.
   */
  public function home() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('This is the home page. No content required, only blocks.')
    ];
  }

}
