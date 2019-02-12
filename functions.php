<?php
  if (!function_exists('import_css'))
  {
    function import_css()
    {

      wp_enqueue_style('leopress', get_template_directory_uri() . '/style.css');
    }
    add_action('wp_enqueue_scripts', 'import_css');
  }


?>
