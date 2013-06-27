<?php

function reset_preprocess_page(&$variables) {

  // remove feed icon according to theme setting
  if(!theme_get_setting('feed_icon')) {
    $variables['feed_icons'] = '';
  }
}
