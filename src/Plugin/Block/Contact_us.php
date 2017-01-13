<?php

namespace Drupal\contact_us\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Home' Block
 *
 * @Block(
 *   id = "alertdriving_contact_us",
 *   admin_label = @Translation("AlertDriving Contact Us Block"),
 * )
 */
 
 
class Contact_us extends BlockBase {
  /**
   * {@inheritdoc}
   */
   
	public function build() {
		$form = \Drupal::formBuilder()->getForm('Drupal\contact_us\Form\Contact_us');
		return $form;
	}
}
