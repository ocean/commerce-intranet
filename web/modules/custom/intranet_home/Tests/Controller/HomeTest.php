<?php

namespace Drupal\intranet_home\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the intranet_home module.
 */
class HomeTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "intranet_home Home's controller functionality",
      'description' => 'Test Unit for module intranet_home and controller Home.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests intranet_home functionality.
   */
  public function testHome() {
    // Check that the basic functions of module intranet_home.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
