<?php
/* Template Name: Search page */
get_header();
?>

<div class="search-container">
   <div class="container">
       <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                
                <div class="search_page_div">
                    <?php get_search_form(); ?>
                </div>
                
                <?php if(have_posts()){
                    $result_cont=0; 
                    while(have_posts()){
                        the_post();
                         $result_cont++;
                    }?>               
                    
                    <div class="result_panel">
                        <h1>Mostrando resultados para: <span class="inside"><?php the_search_query() ?></span></h1>
                        <h3>Cantidad de resultados: <?php echo $result_cont; ?> </h3>
                        <div class="result_panel_posts">
                            <?php
                            while(have_posts()){
                                the_post();?>
                                
                                <div class="result_post">
                                    <div class="row">
                                        <div class="col-4">
                                            <?php
                                                    if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail('post-thumbnails',array('class'=>'img-responsive result_image'));
                                            }?>
                                        </div>
                                        <div class="col-8 result_content">
                                               <h1><?php the_title(); ?></h1>
                                               <p><?php the_excerpt(); ?></p>
                                                <a href="<?php the_permalink();?>" class="btn btn-info">Leer Más <span class="glyphicon glyphicon-chevron-right" style="font-weight: 100" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                                
                            <?php } //END WHILE ?>
                        </div>
                    </div>
    
                <?php }else{?>
                    
                    <div class="none_results">
                        <h1>No se encontraron resultados para: <span class="inside"><?php the_search_query() ?></span></h1>        
                    </div>
        
                <?php }/*END IF*/ ?>

            </main><!-- #main -->
        </section><!-- #primary -->
   </div>
        
</div>

<?php
get_footer(); 
?>