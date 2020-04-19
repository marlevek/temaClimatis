
<div class="jumbotron">
    <div class="row">
    <p class="text">Gostou do post:&nbsp <h5><?php the_title();?></h5></p>
    
</div>

<div class="row">
    <p class="mt-2">Então bora compartilhar: <i class="far fa-grin-hearts fa-2x"></i></p>
</div>
    <div class="row">
    <span class="col-md-4 my-3">
    <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
</span>

<span class="col-md-4 my-3">
<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: pt_BR</script>
<script type="IN/Share" data-url="<?php the_permalink(); ?>"></script>
</span>
        
    <span class="col-md-4 my-3">
    <a href="https://twitter.com/intent/" class="twitter-mention-button" data-text="olá! vejam esse post:" data-url="<?php the_permalink(); ?>" data-related="@ArClimatis" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
</span>

    </div>

