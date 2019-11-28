<?php
/**
 * Template Name: About
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

	get_header();
	$container = get_theme_mod( 'understrap_container_type' );
	
 ?>

<div class="container-fluid about-page <?php echo get_banner_class(); ?>">
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
		<div class="col-12 mobile-col">
			
				
				<div class="txt-container aboutpage wow fadeInRight">
					<div class="ai-con">
						<div class="about-img">
						<?php
						$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
						?>
							<img src="<?php echo $image[0]; ?>" alt="">
						</div>
						<!-- /.about-img -->
						<div class="about-con">
								
					<?php

					 while( have_posts() ):the_post();
					 
						the_content();
					 
					
					 endwhile;


					?>
					<?php
							$service_page_link = get_field('service_page_link');
							?>
							<a href="<?php echo $service_page_link; ?>" class="btn"><i></i> <span>Our Services</span></a>
						</div>
						<!-- /.about-con -->
					</div>
					<!-- /.ai-con -->                       
				</div>
				<!-- /.txt-container -->


				<div class="last-news-block about-news">
					<h2><?php
							echo $latest_blog_heading = get_field('latest_blog_heading');
							?></h2>

					<div id="owl_1" class="owl-slider">
						
						<?php
							$news_per_page = get_field('news_per_page');
							if($news_per_page=='')
							{
								$args = array( 'posts_per_page' => 8, 'order'=> 'DESC', 'orderby' => 'id', 'post_type' => 'post');
							}
							else
							{
								$args = array( 'posts_per_page' => $news_per_page, 'order'=> 'DESC', 'orderby' => 'id', 'post_type' => 'post');
							}
							
							

							$postslist = get_posts( $args );
							foreach ( $postslist as $post ) :
							  setup_postdata( $post ); 
						?> 
						<div class="item slider-disabled  wow fadeInUp">
							<article class="blog-post">
							
												<?php 
												
												$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb-image' );
													$logo_image = get_field('news_icon_image');
													 if(!empty($logo_image)): 
												 
												?>
													<div class="post-logo">
														<img src="<?php echo $logo_image; ?>" alt="<?php the_title(); ?>">
													</div>
												<?php endif;?>
								<!-- /.post-logo -->
								<a href="<?php the_permalink();?>" class="post-img"><img src="<?php echo $feat_image[0]; ?>" alt="<?php the_title(); ?>" class="img-fluid"></a>
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
						endforeach; 
						wp_reset_postdata();


						?>

															
						
					</div>
					<!-- /.owl -->
				</div>
				<!-- /.last-news-block -->


				<div class="vision">
				<?php
					$team_image = get_field('team_image');
					 
					if($team_image!='')
					{
				?>
					<img src="<?php echo $team_image['url']; ?>" alt="" class="img-fluid">
					<?php
						}
					?>
					
					<div class="vision-text wow fadeInRight">
					<?php
									$team = get_field('team');
									if($team!='')
									{
									?>
						<h2><?php echo $team; ?></h2>
									<?php } ?>
						<?php
									$team_content = get_field('team_content');
									if($team_content!='')
									{
									echo $team_content;     
									 }  
									 ?>
									
					</div>
					<!-- /.vision-text -->
				</div>
				<!-- /.our-vision -->
				
				<?php
					$discover = get_field('discover');
					if($discover=='show')
					{
				?>

				<div class="our-staff">
					<h2><?php
									$team_heading = get_field('team_heading');
									if($team_heading!='')
									{
									echo $team_heading;     
									 }  
									 ?></h2>

					<div class="row">
						<div id="ourStaff">
						
						<?php
							$args = array( 'posts_per_page' => -1,  'post_type' => 'team');

							$postslist = get_posts( $args );
							foreach ( $postslist as $post ) :
							
							  setup_postdata( $post ); ?> 
							<div class="col-md-4">
								<div class="our-staff-block">
									<figure>
									<?php
									$teamimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
									?>
										<img src="<?php echo $teamimage[0]; ?>" alt="">
										<figcaption>
											<h5><?php the_title(); ?></h5>
											<strong><?php
											$designation = get_post_meta( $post->ID,'designation',true );
											if($designation!='')
											{
											echo $designation;  
											 }  
									 ?></strong>
											<?php the_content(); ?>
											
										</figcaption>                                       
									</figure>
								</div>
								<!-- /.our-staff-block -->
							</div>
							<!-- /.item -->
							<?php
							endforeach; 
							wp_reset_postdata();


							?>
							

						</div>
						<!-- /#ourStaff .owl-carousel owl-theme -->     
						<?php
						}
						else
						{
						?>   
						<div class="teamhide our-team">
						</div>
						<?php
						}
						?>   
						          
					</div>
					<!-- /.row -->
				</div>

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