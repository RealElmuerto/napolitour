<?php
/*
* Template Name: blog
*/

$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1 // retrieve all posts
);
query_posts($args);
?>

<?php get_header(); ?>

<div class="container">
    <div class="jumbotron jumbotron-fluid jumbo-bgblog">
        <h1 class="titolo-jumbo" style="text-shadow: 4px 2px #37b3be;"><?php the_title(); ?></h1>
    </div>
</div>

<main class="container">
    <div class="row justify-content-center">
    
<div class="testo-comune">
            <?php the_content(); ?>
</div>


        <?php while (have_posts()) : the_post(); ?>
          
        <div class="col-12 col-md-6 col-lg-4 mb-5" style="top:50px;"> 
        <a href="<?php the_permalink(); ?>">
                <div class="cardz h-100">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="cardz-img-top" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    
                    <div class="cardz-body">
                    <h2 class="cardz-title"><?php the_title(); ?></h2>
                    </div>
                </div><!-- /.card --></a>
            </div><!-- /.col -->
        
        <?php endwhile; ?>

    </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>

