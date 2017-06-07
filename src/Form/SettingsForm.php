<?php

namespace Drupal\calibr8_gtm\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure example settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'calibr8_gtm_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'calibr8_gtm.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('calibr8_gtm.settings');

    $form['gtm_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Google tag manager ID'),
      '#description' => $this->t('Format: GTM-XXXXXX'),
      '#default_value' => $config->get('gtm_id'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = \Drupal::service('config.factory')->getEditable('calibr8_gtm.settings');
    $config->set('gtm_id', $form_state->getValue('gtm_id'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}