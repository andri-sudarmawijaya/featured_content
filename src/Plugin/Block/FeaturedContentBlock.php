<?php

namespace Drupal\featured_content\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FeaturedContentBlock' block.
 *
 * @Block(
 *  id = "featured_content_block",
 *  admin_label = @Translation("Featured content block"),
 * )
 */
class FeaturedContentBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

	$view = Views::getView('front_services');

	$view->setDisplay('default');
	$view->preExecute();
	$view->execute();

	// $myresults = $view->preview();  = array
	// $myresults = $view->render();  = array
	$myresults = $view->result; // = array	  
    $build = [];
    $build['#theme'] = 'featured_content_block' => [
      'variables' => [
        'results' => $myresults,
      ],
	];
    $build['featured_content_block']['#markup'] = 'Implement FeaturedContentBlock.';

    return $build;
  }

}
