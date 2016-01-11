<?php

/**
 * @file
 * Contains \Drupal\add_block\Form\New Form.
 */

namespace Drupal\add_block\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class New Form.
 *
 * @package Drupal\add_block\Form
 */
class NewForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'new_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['desc'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Desc'),
      '#description' => $this->t('Please enter the desc'),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }

}
