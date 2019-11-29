<?php
/**
 * Template Name: News Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
 
 <div class="container-fluid no-pad news-page <?php echo get_banner_class(); ?>">
    <div class="row">
        <div class="col-12">
            <div class="overlay-block">
                <div class="banner not-home">
                    <div class="banner-content">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <!-- /.banner-content -->
                </div>
                <!-- /.banner not-home -->

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                <div class="all-news">

                                    <?php $newsRepeate = get_field('news_options'); 
                                    
                                    if($newsRepeate):
                                            $i=1;
                                        foreach ($newsRepeate as $row):  ?>

                                            <div class="last-news-block">

                                                <?php
                                                
                                                     $argsFirstCat = array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' =>-1,
                                                        'order' => 'DESC',
                                                        'orderby' =>'id',
                                                        'tax_query' => array(
                                                            array(
                                                            'taxonomy' => 'category',
                                                            'field'    => 'id',
                                                            'terms' => $row['section_category']
                                                             )
                                                          )
                                                        );

                                                    $news_loop = new WP_Query( $argsFirstCat ); 
                                                ?>
                                                
                                                <h3><?php echo $row['section_title']; ?></h3>
                                                        
                                                        <div id="owl_<?php echo $i; ?>" class="owl-slider">
                                                            
                                                            <?php
                                                                $i=$i+1; 
                                                                while ( $news_loop->have_posts() ) : $news_loop->the_post();
                                                            ?>
                                                                    <div class="item slider-disabled">
                                                                        <article class="blog-post">
                                                                             <div class="post-logo">
                                                                            
                                                                                <?php 
                                                                                
                                                                                    
                                                                                    	$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb-image' );
                                              $logo_image = get_field('news_icon_image');
                                                                            
                                                  if(!empty($logo_image)): 
                                                   ?>
                                                                            
                                                <img src="<?php echo $logo_image; ?>" alt="<?php the_title (); ?>">
                                                                            
                                                  <?php endif; ?>
                                                                            </div> 
                                                                            <!-- /.post-logo -->
      <a href="<?php the_permalink();?>" class="post-img">
    <img src="<?php  echo $feat_image[0] ?>" class="img-fluid">
	<?php // echo get_the_post_thumbnail( $post_id, 'news-thumbnail', array( 'class' => 'img-fluid' ) ); ?>	  
                                                                            </a>
                                                                            <header class="entry-header">
                                                                                <div class="entry-meta">
                                                                                    <span class="category">

                                                                                        <?php echo get_current_news_cat_name();?>
                                                                                      
                                                                                    </span>
                                                                                    <span class="entry-date published updated"><a href="<?php the_permalink();?>" ><?php the_time('F j, Y');?></a></span>
                                                                                </div>
                                                                                <!-- /.entry-meta -->
                                                                                	<h6 class="entry-title"><a href="<?php the_permalink();?>" ><?php echo news_title();  ?></a></h6>
                                                                                <!-- /.entry-title -->
                                                                            </header>
                                                                            <!-- /.entry-header -->
                                                                        <a href="<?php the_permalink();?>" ><div class="entry-content">
                                                                                <p><?php echo neuro_news_excerpt();?></p>
                                                                                <p class="text-center">
                                                                                    <span class="btn btn-secondary understrap-read-more-link">Read more</span>
                                                                                </p>
                                                                            </div></a>
                                                                            <!-- /.entry-content -->
                                                                        </article>
																			</div>
                                                                    <!-- /.item -->
                                                        
                                                        
                                                        <?php   endwhile; ?>

                                                        </div>
                                           
                                                <!-- /.owl -->
                                            </div> 
                                            
                                    <?php endforeach;

                                    endif;
                                    ?>

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