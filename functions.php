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

      add_theme_support('post-thumbnails');  
    }


    add_action('after_setup_theme', 'leopress_setup');
  }


    if (!function_exists('leopress_widgets_init' ))
    {
      function leopress_widgets_init()
      {

        register_sidebar(array(
          'name' => 'leopress-sidebar',
          'id'   => 'leopress-sidebar'
        ));

      }


      add_action('widgets_init', 'leopress_widgets_init');
    }
?>
