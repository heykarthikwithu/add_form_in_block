<?php

/**
 * @file
 * Contains \Drupal\add_block\Plugin\Block\DefaultBlock.
 */

namespace Drupal\add_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['my_text_area'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('my text area'),
      '#description' => $this->t('heeloooooooooooooooo asfda'),
      '#default_value' => isset($this->configuration['my_text_area']) ? $this->configuration['my_text_area'] : 'asd asd',
      '#weight' => '0',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['my_text_area'] = $form_state->getValue('my_text_area');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['default_block_my_text_area']['#markup'] = '<p>' . $this->configuration['my_text_area'] . '</p>';
    // Add a form to block.
    $build['default_block_new_form'] = \Drupal::formBuilder()->getForm('Drupal\add_block\Form\NewForm');

    return $build;
  }

}
