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
    $build['featured_content_block']['#markup'] = 'Implement FeaturedContentBlock.';

    $view = \Drupal\views\Views::getView('front_services');
	$view->setDisplay('default');
	$view->preExecute();
    $view->execute();

	$render_view = $view->render();
    dpm($render_view);
    
	return [
		'#type' => 'view',
		'#name' => 'myfirstview',
		'#view' => $view,
		'#display_id' => 'default',
		'#embed' => TRUE,
	];
  }

