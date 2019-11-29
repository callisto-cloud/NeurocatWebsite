<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
?>

<div class="container-fluid no-pad job-detail news-detail <?php echo get_banner_class(); ?>">
	<div class="row">
		<div class="col-12">
			<div class="overlay-block">
				<div class="banner <?php echo get_banner_class(); ?>">
					<div class="banner-content">
						<h4><?php the_title();?></h4>
					</div>
					
					<!-- /.banner-content -->
				</div>
				<!-- /.banner not-home -->

				<div class="container">
					<div class="row">
						<div class="col-12">
								<div class="txt-container">
									<div class="ai-con">
									   <h1><?php the_title(); ?> </h1>
										
										<ul class="job-caption">
											<li class="job-type">
											<?php 
												echo get_current_news_cat_name();       
											?>
											</li>
											<li class="job-address"><?php the_time('F j, Y');?></li>
										</ul>
<?php echo get_the_post_thumbnail( $post_id, 'news-thumbnail', array( 'class' => 'img-fluid' ) ); ?>
										<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

										 //$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
										//if($feat_image!='')
										//{
										?>
										<!--<img src="<?php //echo $feat_image; ?>" alt="<?php //the_title (); ?>" class="img-fluid feat-img">-->
										 <?php
										//}
										the_content(); 
										
										endwhile; else : ?>

										<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

										<?php endif; ?>

									<!--	<a href="<?php //the_permalink();?>" class="btn detail-btn">
											<strong>Read the full paper here</strong> <i></i>
										</a> -->

									</div>
									<!-- /.ai-con -->                       
								</div>
								<!-- /.txt-container -->

								<div class="last-news-block about-news">
								<?php if ( function_exists( 'ot_get_option' ) ) 
										{ 
										$related_blog = ot_get_option( 'related_blog' );
										if($related_blog !='')
										{
										?>
									<h4 class="text-center"><?php echo $related_blog ; ?></h4>
									<?php
										}
										}
										?>

									<div id="owl_1" class="owl-slider">
										
										<?php
											$args = array(
											'post_type' => 'post',
											'posts_per_page' =>8,
										   'order' => 'DESC',
											'orderby' =>'id',
											'tax_query' => array(
												array(
												'taxonomy' => 'category',
												'field' => 'id',
												'terms' => $category_id
												 )
											  )
											);
											$news_loop= new WP_Query( $args ); 
											
											while ( $news_loop->have_posts() ) : $news_loop->the_post();
										?>
												<div class="item slider-disabled">
													<article class="blog-post">
														<div class="post-logo">
															<?php 
															
																$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb-image' );
																$logo_image = get_field('news_icon_image');

															 ?>
															<?php if(!empty($logo_image)): ?>

																<img src="<?php echo $logo_image; ?>" alt="<?php the_title (); ?>">

															<?php endif;?>
														</div>
														<!-- /.post-logo -->
														<a href="<?php the_permalink();?>" class="post-img"><img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" class="img-fluid"></a>
															
														<header class="entry-header">
															<div class="entry-meta">
																<span class="category"><?php echo get_current_news_cat_name(); ?></span>
																 <span class="entry-date published updated"><a href="<?php the_permalink();?>" ><?php the_time('F j, Y');?></a></span>
															</div>
															<!-- /.entry-meta -->
															<h6 class="entry-title"><a href="<?php the_permalink();?>" ><?php echo news_title();  ?></a></h6>
															<!-- /.entry-title -->
														</header>
															<!-- /.entry-header -->
													<a href="<?php the_permalink();?>" >	<div class="entry-content">
															<p><?php echo neuro_news_excerpt();?></p>
															<p class="text-center">
																<span class="btn btn-secondary understrap-read-more-link">Read more</span>
															</p>
														</div></a>
														<!-- /.entry-content -->
													</article>
												</div>
										<!-- /.item -->
											<?php 
											endwhile;
											wp_reset_postdata();
											?>
									
										<!-- /.item -->
									</div>
									<!-- /.owl -->
								</div>
								<!-- /.last-news-block -->
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
