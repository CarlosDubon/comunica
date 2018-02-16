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
                                    
    
    
                }else{?>
                    
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