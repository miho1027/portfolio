<?php

// スタイルの読み込み(呼び出し)/////////////
add_action('init', 'load_script');
// スタイルの読み込み(定義)
function load_script() {
	if (!is_admin()) {


    /* style.css */
    wp_enqueue_style(
      'main',
      get_template_directory_uri() . '/css/style.css'
    );
    //wordpressのjQueryを読み込まないようにする
    wp_deregister_script('jquery');

    wp_enqueue_script(
      'jquery',
      'https://code.jquery.com/jquery-3.5.1.min.js',
      array(),
      false,
      true
    );
    
    /* main.js */
    wp_enqueue_script(
      'main-script',
      get_template_directory_uri() . '/js/script.js',
      array('jquery'),
      false,
      true
    );

	}
}
add_action('init', 'load_script');
?>