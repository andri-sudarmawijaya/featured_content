<?php

namespace Drupal\featured_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FreaturedContentBlock' block.
 *
 * @Block(
 *  id = "freatured_content_block",
 *  admin_label = @Translation("Freatured content block"),
 * )
 */
class FreaturedContentBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'freatured_content_block';
     $build['freatured_content_block']['#markup'] = 'Implement FreaturedContentBlock.';

    return $build;
  }

}
