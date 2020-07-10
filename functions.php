<?php

function sarah_setup() {

  register_nav_menus(
    array(
      'primary' => 'Menu principal',
      'secondary' => 'Menu secondaire',
      'footer' => 'Menu de pied de page',
      'social' => 'Menu des réseaux sociaux'
    )
  );

  add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'sarah_setup');

add_theme_support('post-thumbnails');

function sarah_init_widgets() {
    register_sidebar(
      array(
        'id'  => 'widgets-section-1',
        'name'  => 'Zone de widgets 1',
        'description' => 'Description de la zone de widgets',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title widgettitle">',
        'after_title' => '</h4>'
      )
    );
  
    register_sidebar(
      array(
        'id'  => 'widgets-section-2',
        'name'  => 'Zone de widgets 2',
        'description' => 'Description de la zone de widgets',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title widgettitle">',
        'after_title' => '</h4>'
      )
    );
  
    register_sidebar(
      array(
        'id'  => 'widgets-section-3',
        'name'  => 'Zone de widgets 3',
        'description' => 'Description de la zone de widgets',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title widgettitle">',
        'after_title' => '</h4>'
      )
    );
  
    register_sidebar(
      array(
        'id'  => 'widgets-section-4',
        'name'  => 'Zone de widgets 4',
        'description' => 'Description de la zone de widgets',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title widgettitle">',
        'after_title' => '</h4>'
      )
    );
  
    register_sidebar(
      array(
        'id'  => 'widgets-sidebar',
        'name'  => 'Zone de widgets de la barre latérale',
        'description' => 'Description de la zone de widgets',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title' => '</h3>'
      )
    );
  }
  
  add_action('widgets_init', 'sarah_init_widgets');

  function theme_js(){

    wp_enqueue_script( 'main',
    get_template_directory_uri() . '/assets/js/main.js',
    array() );
    
    }
    
    add_action( 'wp_enqueue_scripts', 'theme_js' );

  require get_template_directory() . '/inc/customizer.php';


 

  ?>