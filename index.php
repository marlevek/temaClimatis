<?php get_header(); ?>
<div class="container my-4 envolve_pag">
<div class="container py-4">
  <div class="col-md-12">
<header class="text-center py-4 bg-general-header">
  <h1 class="text-center">
        <h1 class="text-center titulo">
           Lista de Postagens do Blog
          </h1>
         <p class="lead text-center">
           Acompanhem nossas postagens sobre dicas e novidades sobre ar condicionado, refrigeração e energia solar.
         </p>
          </header>
  </div>
</div>
    <div class="container">
      <div class="row">
       <div class="col-md-8">
<?php
        // existe post?
       if (have_posts()):
         // enquanto houver, mostre o post
             while (have_posts()): the_post();
        // todo o conteúdo desta página
?>
      <div class="container">
      <section class="card my-3">
        <div class="card-body">
         <div class="row">
          <div class="col-md-4">
            <?php the_post_thumbnail('', array('class' =>'img-fluid pb-2 mx-auto d-block')); ?>
            </div>
            <div class="col-md-8">
        <h2><?php the_title(); ?></h2>
         <p><?php the_excerpt(); ?></p>
           <div class="float-right">
              <a class="btn btn-link" href="<?php the_permalink(); ?>">Veja a Publicação</a>
               </div>
                </div>
                  </div>
                    </div>
                      </section>
                    </div>
<?php
    endwhile;
?>
      <div class="row pag-link">
        <div class="text-left col-6">
            <?php  previous_posts_link('<< Postagens Recentes'); ?>
        </div>
        <div class="text-right col-6">
          <?php  next_posts_link('Postagens Anteriores >>');  ?>
        </div>
      </div>
    <?php
        endif;
?>
    </div>
      <div class="col-md-4">
<?php
    dynamic_sidebar('sidebar-right');
 ?>
      </div>
      </div>
</div>
</div>
<?php get_footer(); ?>
