<?php get_header(); ?>
<?php
         // enquanto houver, mostre o post
             while (have_posts()): the_post();
        
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v6.0&appId=212224593251658&autoLogAppEvents=1"></script>
<div class="container my-4 envolve_pag">
<div class="container py-4">
  <div class="header-config">
<header class="text-center py-4 bg-general-header">
    <h1 class="text-center titulo">
           <?php the_title(); ?>
          </h1>
         <?php the_excerpt();?>
          </header>
  </div>
</div>
<div class="container">
  <div class="row">
   <div class="col-md-8">
     <section class="card my-3">
             <div class="card-header text-muted">
                 Publicado em: <?php echo get_the_date(); ?>
</div>
<div class="card-body">
<div class="row py-3 px-3">
</div>
<?php the_content(); ?>
<?php include('sociais.php'); ?>
</div>
<div class="row pag-link">
        <div class="text-left col-6">
            <?php  next_post_link('&laquo; %link');  ?>
        </div>
        <div class="text-right col-6">
          <?php  previous_post_link('%link &raquo;'); ?>
        </div>
</div>
<?php comments_template();?>

</div>
<div class="col-md-4"><?php
    dynamic_sidebar('sidebar-right');
 ?>
<?php include('newsletter.php'); ?>
</div>     
</section>
</div>
</div>
<?php
    endwhile;
?>
</div>
</div>
<?php get_footer() ?>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>