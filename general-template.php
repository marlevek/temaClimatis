<?php
/*
Template Name: General Template
*/
 ?>
 <?php get_header(); ?>
 <?php
 // existe post?
if (have_posts()):
  // enquanto houver, mostre o post
      while (have_posts()): the_post();
 // todo o conteúdo desta página
?>
<br>
<div class="container">
  <div class="col-md-12">
<header class="text-center py-4 bg-general-header">
  <h1 class="text-center titulo">
<?php
    the_title();
     ?>
     <span class="underline"></span>
  </h1>
  <p class="lead text-center">
    <?php
      $postid = get_the_ID();
        if (get_post_meta($postid, 'subtitulo', true)) {
            echo get_post_meta($postid, 'subtitulo', true);
        }
         ?>
  </p>
</header>
  </div>
</div>
<div class="container">
  <div class="col-md-12">
<div class="card my-3">
<div class="card-body">
  <div class="py-3 px-3">
<?php the_content(); ?>
  </div>
</div>
</div>
</div>
</div>
<?php
endwhile;
endif;
 ?>
 <?php get_footer(); ?>
