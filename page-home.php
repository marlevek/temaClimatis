 <?php get_header(); ?>
 <div class="container" style="background:#000">
 <div class="titulo my-3 text-center">
 <h1>Conheça os serviços realizados pela Climátis</h1>
 <p ><h2 style="color:white; margin-bottom:0.3em">Acesse <a class="link-site" href="https://www.climatis.com.br" target="_new">Climátis Ar Condicionado, Refrigeração e Energia Solar</a></h2></p>
 </div>
</div>
<!-- Notícias em destaque-->
<div class="container-fluid">
  <div class="container envolve_pag">
<section class="py-4 my-4">
<header class="title bg-general-header">
<h2 class="text-center" style="color:chocolate">Últimas da Climátis<span class="underline"></span></h2>
<p class="text-center">Acompanhe as últimas postagens e novidades publicadas em nosso Blog.</p>
</header>
<div class="row">
  <?php
    $destaque = new WP_Query('post_type = post&posts_per_page=9');
      if ($destaque->have_posts()):
        while ($destaque->have_posts()) : $destaque->the_post();
 ?>
<div class="col-sm-12 col-md-6 col-lg-4 mb-3">
  <div class="card">
<?php the_post_thumbnail('', array('class'=>'img-fluid card-img-top')); ?>
<div class="card-body" style="height:18em"  >
<h5 class="card-title text-center"><?php the_title(); ?></h5>
<?php echo '<p class="card-text text-justify" style="padding-left:0.4em; padding-right:0.2em;">' .get_the_excerpt().'</p>'; ?>
<a class="btn btn-outline-dark" href="<?php the_permalink(); ?>" >Leia mais</a>
</div>
</div>
</div>
<?php
endwhile;
  wp_reset_postdata();
endif;
 ?>
</div>
</section>
  </div>
</div>
 <?php get_footer(); ?>
