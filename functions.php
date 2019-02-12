<?php
  if (!function_exists('import_css'))
  {
    function import_css()
    {

      wp_enqueue_style('leopress', get_template_directory_uri() . '/style.css');
    }
    add_action('wp_enqueue_scripts', 'import_css');
  }

  if (!function_exists('leopress_setup' ))
  {
    function leopress_setup()
    {

      register_nav_menus(array(
        'header' => 'header'
      ));


    }


    add_action('after_setup_theme', 'leopress_setup');
  }
?>
