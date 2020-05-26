<?php
  // inclusão do arquivo para o menu responsivo
  require_once get_template_directory(). '/inc/wp-bootstrap-navwalker.php';

  // carregamento de css e js
  function load_scripts()
  {
      wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
      wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.4.1', 'all');
      wp_enqueue_style('font', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', array(), '5.2.0', 'all');
      wp_enqueue_style('estilo', get_template_directory_uri().'/assets/css/estilo.css', array(), '1.0', 'all');
  }
  add_action('wp_enqueue_scripts', 'load_scripts');

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
          'name' => ('Endereço Rodapé') ,
            'id' => 'footer-address' ,
              'description' => ('Adicione suas informações de endereço') ,
                'before_widget' => '<div class="text-light">' ,
                  'after_widget' => '</div>' ,
                    'before_title' => '<h5 class="text-light"><i class="far fa-building fa-1x mr-2 text-light"></i>' ,
                      'after_title' => '</h5>'

        )
      );
      register_sidebar(
          array(
          'name' => ('Redes Sociais Rodapé') ,
            'id' => 'footer-socials' ,
              'description' => ('Adicione suas Redes Sociais') ,
                'before_widget' => '<div class="text-light icones">' ,
                  'after_widget' => '</div>' ,
                    'before_title' => '<h5 class="text-light">' ,
                      'after_title' => '</h5>'

        )
      );
      register_sidebar(
          array(
          'name' => ('Barra Lateral') ,
            'id' => 'sidebar-right' ,
              'description' => ('Adicione Widgets na barra Lateral') ,
                'before_widget' => '<div class="card my-3 mr-3">' ,
                  'after_widget' => '</div></div>' ,
                    'before_title' => '<div class="card-header">' ,
                      'after_title' => '</div><div class="card-body card-list">'

        )
      );
      register_sidebar(
          array(
          'name' => ('Formulário de Contato') ,
            'id' => 'contact' ,
              'description' => ('Adicione o código do formulário de contato com campo de texto') ,
                'before_widget' => '<div class="py-4">' ,
                  'after_widget' => '</div>',

    )
      );
  
  }
  add_action('widgets_init', 'climatis_sidebars');

  // Ativar o formulário de respostas comentários
  function theme_queue_js (){
    if ((!is_admin() ) && is_singular() && comments_open() && get_option('thread_comments'))
    wp_enqueue_script ('comment-reply');
  }
    add_action ('wp_print_scripts' , 'theme_queue_js');

    //Personalizar os comentários
    function format_comment ($comment, $args, $depth) {

        $GLOBALS['comment'] = $comment; ?>

<div <?php comment_class('ml-4'); ?> id="comment-<?php comment_ID(); ?>">
      <div class="card mb-3">
      <div class="card-body">

        <div class="comment-intro">
          <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link())?></h5>
          <h6 class="card-subtitle mb-3 text-muted">comentou em <?php printf(__('')) ?></h6>
</div>

      <?php comment_text(); ?>

    <div class="reply">
    <?php comment_reply_link (array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
</div>
</div>
  
<?php

}

?>