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
        <h5>Tema desenvolvido por:<a href="https://www.mltopsites.com.br" target="new"> ML TOP SITES</a></h5>
      </div>
    </div>
  </div>
  <a class="voltarTopo" id="topo"><img src="https://www.climatis.com.br/Blog/wp-content/uploads/2020/03/img_Voltar_topo.png.webp" aria-hidden="true" alt="botão voltar topo do site"></a>
</footer>
<?php wp_footer(); ?>
<!--Script para botão voltar ao topo do site -->
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script async src="assets\js\VoltarTopo.js"></script>
<script async type="text/javascript">
  jQuery(document).ready(function() {

    jQuery(".voltarTopo").hide();

    jQuery('a#topo').click(function() {
      jQuery('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });

    jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() > 150) {
        jQuery('#topo').fadeIn();
      } else {
        jQuery('#topo').fadeOut();
      }
    });
  });
</script>
</body>

</html>