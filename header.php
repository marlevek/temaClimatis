  <!DOCTYPE html>
  <html <?php  language_attributes(); ?>>
  <head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M86HBB2');</script>
<!-- End Google Tag Manager -->
    <meta charset="<?php  bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Serviço de vendas, instalação e manutenção de ar condicionado, refrigeração e energia solar com atendimento de qualidade e valor justo">
    <?php wp_head(); ?>
 
    </head>
  <body <?php body_class();  ?>>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M86HBB2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <header>
      <div class="container-fluid bg-header text-center icon" >
        <div class="row">
          <div class="col-sm-12">
    <a href="https://www.facebook.com/ClimatisArcondicionado" target="_new"><i class="fab fa-facebook-square fa-2x" ></i></a>
    <a href="https://www.linkedin.com/company/climatis-solucoes-em-ar-condicionado-refrigeracao-e-energia-solar" target="_new"><i class="fab fa-linkedin fa-2x" ></i></a>
    <a href="https://twitter.com/ArClimatis" target="_new"><i class="fab fa-twitter-square fa-2x"></i></a>
    <a href="https://www.instagram.com/climatis_climatizacao" target="_new"><i class="fab fa-instagram fa-2x" ></i></a>
    <a href="https://wa.me/5541992422364?text=sua%20mensagem" > <i class="fab fa-whatsapp fa-2x" ></i></a>
    <a href="mailto:atendimento@climatis.com.br" target="_blank" ><i class="far fa-envelope fa-2x "></i></a>
  </div>
  </div>
  </div>
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:black">
  <a href="<?php echo home_url(); ?>" class="navbar-brand">
  <?php the_custom_logo(); ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="menu" aria-expanded="false" aria-label="Menu Collapse">
    <span class="navbar-toggler-icon text-light" ></span>
  </button>
  <?php
   wp_nav_menu(
    array(
              'theme_location' => 'main_menu',
               'depth' => 2,
               'container' => 'div',
               'container_class' => 'collapse navbar-collapse',
               'container_id' => 'mainMenu',
                 'menu_class' => 'nav navbar-nav ml-auto',
               'fallback_cb' => 'WP_Bootstrap_Navwalker :: fallback',
               'walker' => new WP_Bootstrap_Navwalker()
             )
) ;
  ?>
      </nav>
      </header>
