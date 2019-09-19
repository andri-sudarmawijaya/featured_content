<?php

namespace Drupal\featured_content\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class FeaturedContentController.
 */
class FeaturedContentController extends ControllerBase {

  /**
   * Build.
   *
   * @return string
   *   Return Hello string.
   */
  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: build')
    ];
  }

}
