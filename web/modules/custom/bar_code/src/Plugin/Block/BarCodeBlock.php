<?php

namespace Drupal\bar_code\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\bar_code\barcode_generator;

/**
 * Count the number of proposed sessions and show it in a block.
 *
 * @Block(
 *   id = "barcode_drupal_test_block",
 *   admin_label = @Translation("Barcode Image for drupal test"),
 *   category = @Translation("Custom")
 * )
 */
class BarCodeBlock extends BlockBase {

    public function build() {
		// below code is get current url
		$page = \Drupal::request()->getRequestUri();
		$newurlstring = "http://".$_SERVER['HTTP_HOST'].$page;
		// below code is get purchase link from node
        $node = \Drupal::request()->attributes->get('node');
		$node->get('field_purchase_link')->getString();

		 
		$data = $node->get('field_purchase_link')->getString();;
        $options = 'sf=8';
        $symbology = 'qr';
        $format = 'svg';
        $generator = new barcode_generator();
        
        /* Create bitmap image. */
        $generator->output_image($format, $symbology, $data, $options);

      }

}
