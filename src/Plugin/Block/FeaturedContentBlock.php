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
    $view = \Drupal\views\Views::getView('front_services');
	$view->setDisplay('default');
	$view->preExecute();

    if ($view) {
      $view->execute();
      foreach ($view->result as $rid => $row) {
        foreach ($view->field as $fid => $field ) {
          $value[$rid][$fid . '-value'] = $field->getValue($row);
        }
      }
	  https://api.drupal.org/api/drupal/core!modules!views!views.api.php/function/hook_views_pre_render/8.2.x
    }
	$render_view = $view->render();
    dpm($render_view);
	//dpm($value);
	//dpm($view->result);
    return $value;
  }
}
