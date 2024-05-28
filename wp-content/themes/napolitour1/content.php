<div class="container">
<h1 class="titolo-jumbo titolo-jumbo-art"><?php the_title(); ?></h1>
<?php if(is_single()) : ?>
    <?php the_content(); ?>
<?php else : ?>
    <?php the_excerpt(); ?>
<?php endif; ?>   
          
</div>

<!-- /.blog-post -->