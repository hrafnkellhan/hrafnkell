<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function kris_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['advanced']['bootstrap_cdn']['bootstrap_cdn']['#options']['3.3.4'] = '3.3.4';
}
