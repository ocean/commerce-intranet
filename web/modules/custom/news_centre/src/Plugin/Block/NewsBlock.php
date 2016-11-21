<?php

namespace Drupal\news_centre\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'NewsBlock' block.
 *
 * @Block(
 *  id = "news_block",
 *  admin_label = @Translation("News"),
 * )
 */
class NewsBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    // $build = [];
    // $build['news_block']['#markup'] = 'This is the news block, which will be configurable to hold stuff.';

    // return $build;

    $contents = 'This is a news block content field, used to hold stuff.';

    return [
      '#theme' => 'news_centre_block',
      '#data' => $contents
    ];
  }

}
