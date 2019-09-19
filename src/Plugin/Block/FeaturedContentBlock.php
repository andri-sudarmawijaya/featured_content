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
    $build = [];
    $build['#theme'] = 'featured_content_block';
    $build['featured_content_block']['results'] = $this->getData();
    $build['featured_content_block']['#markup'] = 'Implement FeaturedContentBlock.';

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getData() {

	$view = Views::getView('front_services');

	$view->setDisplay('default');
	$view->preExecute();
	$view->execute();

	// $myresults = $view->preview();  = array
	// $myresults = $view->render();  = array
	$results = $view->result; // = array
	dpm($results);
    return $results;
  }
}
