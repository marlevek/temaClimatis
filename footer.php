
<footer>
<div class="container-fluid bg-footer mt-4">
<div class="container">
<div class="row py-4">
  <div class="col-md-5">
  <?php
     if (is_active_sidebar('footer-address')) {
         dynamic_sidebar('footer-address');
     }
   ?>
  </div>
  <div class="col-md-4">
  <h5 class="text-light"><i class="fas fa-info fa-1x mr-2 text-light"></i>LINKS ÚTEIS</h5>
  <?php
     wp_nav_menu(
       array(
        'theme-location' => 'footer_menu',
        'before' => '<i class="fa fa-angle-right text-light"></i> '
      )
   );
   ?>
  </div>
  <div class="col-md-3">
    <?php
       if (is_active_sidebar('footer-socials')) {
           dynamic_sidebar('footer-socials');
       }
     ?>
</div>
  </div>
</div>
</div>
  <div class="container-fluid bg-footer-2">
<div class="container">
<div class="text-center">
<h5>Tema desenvolvido por:<a href="mailto:marcelo_levek@hotmail.com"> Marcelo Z. Levek</a></h5>
</div>
</div>
  </div>
      <a class="voltarTopo" id="topo"><img src="https://www.climatis.com.br/Blog/wp-content/uploads/2020/03/img_Voltar_topo.png" aria-hidden="true" alt="voltar topo do site"></a>

</footer>
<?php wp_footer(); ?>

</body>
</html>
