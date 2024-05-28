<?php get_header(); ?>

<main role="main" class="container">
      <div class="row">

      <!-- inizio blog -->
        <div class="col-md-8 blog-main">

        
        <!-- loop wp -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        ?>

        <?php get_template_part('content'); ?>

          <!-- fine loop wp -->
          <?php endwhile; else : ?>
	        <p><?php esc_html_e( 'Nessun Articolo' ); ?></p>
          <?php endif; ?>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <?php if(is_active_sidebar('sidebar')): ?>
          <?php dynamic_sidebar('sidebar'); ?>
          <?php endif; ?>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

<?php get_footer(); ?>