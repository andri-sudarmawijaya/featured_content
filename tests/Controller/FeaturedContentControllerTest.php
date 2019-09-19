<?php

namespace Drupal\featured_content\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the featured_content module.
 */
class FeaturedContentControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "featured_content FeaturedContentController's controller functionality",
      'description' => 'Test Unit for module featured_content and controller FeaturedContentController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests featured_content functionality.
   */
  public function testFeaturedContentController() {
    // Check that the basic functions of module featured_content.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
