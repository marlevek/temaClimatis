<?php
//Bootstrap menu
require_once get_template_directory_uri() . '/inc/wp-bootstrap-navwalker.php';

// carregamento de css e js
function load_scripts()
{
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
  wp_enqueue_script('voltarTopo-js', get_template_directory_uri() . '/assets/js/VoltarTopo.js', array('jquery'), '', true);
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.4.1', 'all');
  wp_enqueue_style('font', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', array(), '5.2.0', 'all');
  wp_enqueue_style('estilo', get_template_directory_uri() . '/assets/css/estilo.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function fancy_lab_config()
{

  // Registro de menus
  register_nav_menus(
    array(
      'main_menu' => 'Main Menu',
      'footer_menu' => 'Footer Menu'
    )
  );

  // Habilitar imagem de destaque no post, pois não vem habilitado no WP
  add_theme_support('post-thumbnails');

  // Adicionar a tag Title
  add_theme_support('title-tag');

  // Adicionar Logomarca customizada
  add_theme_support('custom-logo', array(
    'width'      => 205,
    'height'     => 70,
    'flex-width' => true

  ));

  // Registro de Sidebars e Widgets
  function climatis_sidebars()
  {
    register_sidebar(
      array(
        'name' => ('Endereço Rodapé'),
        'id' => 'footer-address',
        'description' => ('Adicione suas informações de endereço'),
        'before_widget' => '<div class="text-light">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="text-light"><i class="far fa-building fa-1x mr-2 text-light"></i>',
        'after_title' => '</h5>'

      )
    );
    register_sidebar(
      array(
        'name' => ('Redes Sociais Rodapé'),
        'id' => 'footer-socials',
        'description' => ('Adicione suas Redes Sociais'),
        'before_widget' => '<div class="text-light icones">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="text-light">',
        'after_title' => '</h5>'

      )
    );
    register_sidebar(
      array(
        'name' => ('Barra Lateral'),
        'id' => 'sidebar-right',
        'description' => ('Adicione Widgets na barra Lateral'),
        'before_widget' => '<div class="card my-3 mr-3">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="card-header">',
        'after_title' => '</div><div class="card-body card-list">'

      )
    );
    register_sidebar(
      array(
        'name' => ('Formulário de Contato'),
        'id' => 'contact',
        'description' => ('Adicione o código do formulário de contato com campo de texto'),
        'before_widget' => '<div class="py-4">',
        'after_widget' => '</div>',

      )
    );
  }
  add_action('widgets_init', 'climatis_sidebars');
}
