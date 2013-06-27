<?php

function reset_preprocess_page(&$variables) {

  // remove feed icon according to theme setting
  if(!theme_get_setting('feed_icon')) {
    $variables['feed_icons'] = '';
  }

  $variables['main_menu'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
  $variables['secondary_menu'] = menu_tree(variable_get('menu_secondary_links_source', 'user-menu'));
}
