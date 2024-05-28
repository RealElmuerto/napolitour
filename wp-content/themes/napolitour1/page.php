<?php get_header(); ?>
<div class="container">
<div class="jumbotron" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%,rgba(0,0,0,0.5) 100%), url('<?php the_post_thumbnail_url(); ?>')">
    <h1 class="titolo-jumbo"><?php the_title(); ?></h1>
  </div>
</div>


<main class="container">
    <div class="row justify-content-center">
    
<div class="testo-comune">
            <?php the_content(); ?>
</div>
      </div><!-- /.row -->

          </main>

<?php get_footer(); ?>