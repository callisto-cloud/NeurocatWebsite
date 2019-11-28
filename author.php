<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="container-fluid no-pad news-page archive-page <?php echo get_banner_class(); ?>">
    <div class="row">
        <div class="col-12">
            <div class="overlay-block">
                <div class="banner <?php echo get_banner_class(); ?>">
                    <div class="banner-content">
                        <h4><?php
                        the_archive_title(  );
                        the_archive_description(  );
                        ?></h4>
                    </div>
                    <!-- /.banner-content -->
                </div>
                <!-- /.banner not-home -->

                <div class="container">
    <div class="row">
        <div class="col-12">
            
                
                <div class="all-news">

                    

                            <div class="last-news-block">

                                <div class="row">
                                    <?php while ( have_posts() ) : the_post(); ?>
                                        <div class="item slider-disabled">
                                            <article class="blog-post">
                                                <div class="post-logo">

                                                    <?php 
                                                    
                                                       $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb-image' );
                                                        $logo_image = get_field('news_icon_image');

                                                      if(!empty($logo_image)): 
                                                    ?>

                                                         <img src="<?php echo $logo_image; ?>" alt="<?php the_title (); ?>">

                                                    <?php endif;?>
                                                </div>
                                                <!-- /.post-logo -->
                                                <a href="<?php the_permalink();?>" class="post-img">
                  
<img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" class="img-fluid"></a>
                                                </a>
                                                <header class="entry-header">
                                                    <div class="entry-meta">
                                                        <span class="category">
                                                            <?php
                                                          
                                                            echo get_current_news_cat_name();
                                                            ?>
                                                                
                                                            </span>
                                                         <span class="entry-date published updated"><a href="<?php the_permalink();?>" ><?php the_time('F j, Y');?></a></span>
                                                    </div>
                                                    <!-- /.entry-meta -->
                                                 	<h6 class="entry-title"><a href="<?php the_permalink();?>" ><?php echo news_title();  ?></a></h6>
                                                    <!-- /.entry-title -->
                                                </header>
                                                <!-- /.entry-header -->
                                               <a href="<?php the_permalink();?>" > <div class="entry-content">
                                                    <p><?php echo neuro_news_excerpt();?></p>
                                                    <p class="text-center">
                                                        <span class="btn btn-secondary understrap-read-more-link">Read more</span>
                                                    </p>
												   </div></a>
                                                <!-- /.entry-content -->
                                            </article>
                                        </div>
                                        <!-- /.item -->
                                        
                                    <?php endwhile; ?>
                                    
                                </div>
								
                                <!-- /.owl -->
								<?php understrap_pagination(); ?>
                            </div> 
                            
                    

                   
                    <!-- /.last-news-block -->

                    
                    <!-- /.last-news-block -->
                </div>
                <!-- /.all-news -->

            
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
 </div>
 <!-- /.container -->

            </div>
            <!-- /.overlay-block -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->



<?php get_footer(); ?>
