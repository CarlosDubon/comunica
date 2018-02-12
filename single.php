<?php get_header();?>
<div class="container-fluid">
    <section class="content-main">
       <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
            //echo wpautop( $post->post_content );
        ?>
                   
                    <h3> <?php the_title(); ?></h3>
                    <?php the_content(); ?>
                     
            <?php } // end while
        } // end if
        ?>
    </section>
</div>

<?php get_footer();?>