<?php

function reset_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['theme_settings']['feed_icon'] = array(
    '#type' => 'checkbox',
    '#title' => t('Feed icon'),
    '#default_value' => theme_get_setting('feed_icon'),
  );
}
