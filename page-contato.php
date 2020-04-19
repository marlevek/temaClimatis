<?php get_header(); ?>
<div class="container-fluid">
<div class="container my-4 envolve_pag">
  <div class="header-config">
  <header class="text-center py-4 bg-general-header">
      <h1 class="text-center titulo">
            Fale Conosco<span class="underline"></span>
            </h1>
            <div class="text-center subtitulo">
           <p><h4>Você pode entrar em contato conosco preenchendo este formulário sempre que precisar de suporte profissional ou tiver alguma dúvida.</h4></p><p><h4>Você também pode preencher o formulário para deixar seus comentários ou feedback.</h4></p>
         </div>
            </header>
            <div class="container my-4 bg-general-header">
              <div class="row">
               <div class="col-md-8">
                 <?php
                 dynamic_sidebar('contact');
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
</div>
</div>
<?php get_footer(); ?>
