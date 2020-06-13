<?php

namespace Drupal\react_starter_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'ReactStarterBlock' block.
 *
 * @Block(
 *  id = "react_starter_block",
 *  admin_label = @Translation("React starter block"),
 * )
 */
class ReactStarterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();

    $build = [];
    // Creates the element we will be rendering the react app into.
    $build['react_starter_block'] = [
      '#markup' => '<div id="starter_app">Loading...</div>',
      '#attached' => [
        'library' => ['react_starter_block/react', 'react_starter_block/react-starter-block'],
      ],
    ];

    return $build;
  }

}
