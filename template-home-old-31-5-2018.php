<?php
/**
 * Template Name: Home
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

	get_header();
	$container = get_theme_mod( 'understrap_container_type' );
	$path = get_template_directory_uri();
?>

<div class="container-fluid <?php echo get_banner_class(); ?>">
	<div class="row">
		<div class="col-12">
			<div class="overlap-block">
				<div id="banner" class="banner front-page">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div id="home_slider" class="owl-carousel owl-theme">
									<?php 
										if ( function_exists( 'ot_get_option' ) ) {
											/* get the tabs array */
											 $slide = ot_get_option( 'slider', true );
											 if ( ! empty( $slide ) ) {
												foreach( $slide as $slider ) {
									?>
									<div class="item">
										<div class="banner-content">
											<div class="owl-img">
												<img src="<?php echo $slider['icon_image']; ?>" alt="">
											</div>
											<div class="owl-txt">
												<h4 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown"><?php echo $slider['title']; ?></h4>
												<p data-animation-in="rollIn" data-animation-out="animate-out rollOut"><?php echo $slider['content']; ?></p>
											  
											</div>
											<!-- /.owl-txt -->
										</div>
									</div>
									<?php
												}
											}
										}
									?>
								</div>
							</div>
							<!-- /.col-12 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</div>
				<!-- /.banner -->


				<div class="container <?php echo get_banner_class(); ?>">
					<div class="row">
						<div class="col-12">
							<div class="txt-container">
								<div class="ai-con">
									<?php
										$heading = get_field('heading');
										if($heading!='') {
									?>
									<h1><?php echo $heading; ?></h1>
									<?php
										}
									?>
									<ul class="nav nav-pills">
									<?php
										$z==0;
										$ai = get_field('artificial_intelligence');

										if($ai):
											foreach($ai as $aid) :
									?>
										<li>
											<?php
												if($z==0) {
											?>
											<a data-toggle="pill" href="#tab<?php echo $z; ?>" class="active">
											<?php
												} else {
											?>
											<a data-toggle="pill" href="#tab<?php echo $z; ?>">
											<?php
												}
											?>
												<figure>
													<div class="img-block">
														<img src="<?php echo $aid['image']['url']; ?>" alt="">
													</div>                                  
													<figcaption><?php echo $aid['title']; ?> </figcaption>
												</figure>
											</a>
										</li>
									<?php 
										$z=$z+1;
										endforeach;
										endif;
									?>
								</ul>
								<!-- /.nav nav-pills -->
						<div class="tab-content">
								<?php
								
								$i==0;
								$ail = get_field('artificial_intelligence');

								if($ail):

									foreach($ail as $aild) : ?>
									<?php
							if($i==0)
							{
								?>
								<div id="tab<?php echo $i; ?>" class="tab-pane fade show active">
								<?php
							}
							else
							{
								?>
								<div id="tab<?php echo $i; ?>" class="tab-pane fade">
								<?php
							}
							?>
							   <?php echo $aild['content']; ?>
							</div>
							 <?php 
									$i=$i+1;
									endforeach;
									endif;
									 ?>
							<!-- /.tab-pane fade show active -->
						  
							<!-- /.tab-pane fade -->
						</div>
						<!-- /.tab-content -->
					</div>
				</div>
				<!-- /.well pad-80 -->

				<div class="last-news">
					<div class="show-all">
						<figure>
							<img src="<?php echo $path; ?>/img/icon-06.png" alt="" class="img-fluid">
							<?php
							$news_show_all = get_field('news_show_all');
							?>
							<figcaption><?php
							echo $last_blog_content = get_field('last_blog_content');
							?></figcaption>
							<a href="<?php echo $news_show_all; ?>" class="btn">Show all</a>
						</figure>
					</div>
					<div class="last-news-block">
					   <?php
							
							$args = array( 'posts_per_page' => 2, 'order'=> 'DESC', 'orderby' => 'id', 'post_type' => 'post');
														
							$postslist = get_posts( $args );
							foreach ( $postslist as $post ) :
							  setup_postdata( $post ); 
						?> 


					   <article class="blog-post">
						<div class="post-logo">

							<?php 
							
								$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								$logo_image = get_field('news_icon_image');

							  if(!empty($logo_image)): 
							?>

								 <img src="<?php echo $logo_image; ?>" alt="<?php the_title (); ?>">

							<?php endif;?>
						</div>
						<!-- /.post-logo -->
						<!-- <article> on second post-->
						
												
						
							<a href="<?php the_permalink();?>" class="post-img"><img src="<?php echo  $feat_image; ?>" alt="<?php the_title(); ?>" class="img-fluid"></a>
							<header class="entry-header">
								<div class="entry-meta">
									<span class="category">
									<?php 
											echo get_current_news_cat_name();       
									?>
									</span>
									<span class="entry-date published updated"><?php the_time('F j, Y');?></span>
								</div>
								<!-- /.entry-meta -->
								<h6 class="entry-title"><?php the_title(); ?></h6>
								<!-- /.entry-title -->
							</header>
							<!-- /.entry-header -->
							<div class="entry-content">
								<p><?php echo wp_trim_words( get_the_excerpt(), 20);?></p>
								<p class="text-center">
									<a href="<?php the_permalink();?>" class="btn btn-secondary understrap-read-more-link">Read more</a>
								</p>
							</div>
							<!-- /.entry-content -->
						</article>
						<?php
							endforeach; 
							wp_reset_postdata();
						?>
				   
					</div>
					<!-- /.last-news-block -->
				</div>
				<!-- /.last-news -->

				<div class="vision">
				<?php
								
								
								$vision = get_field('our_vision');

								if($vision):

									foreach($vision as $visiondata) : ?>
					<img src="<?php echo $visiondata['image']['url']; ?>" alt="" class="img-fluid">
				  <!--  <img src="<?php //echo $path; ?>/img/our-vision-small.jpg" alt="" class="img-fluid mobile-elem"> -->
					<div class="vision-text">
						<h2> <?php echo $visiondata['title']; ?></h2>
					   <?php echo $visiondata['content']; ?>
					</div>
					<?php 
									
									endforeach;
									endif;
									 ?>
					
					<!-- /.vision-text -->
					<div class="vision-tags">
					<?php
											
							$tag_cloud = get_field('tag_cloud');

							if($tag_cloud):

							foreach($tag_cloud as $tag_clouds) : ?>
						<span><?php echo $tag_clouds['title']; ?></span>
						<?php 
							endforeach;
							endif;
						?>                  
							
						
					</div>
					<!-- /.vision-tags -->
				</div>
				<!-- /.our-vision -->

				<div class="testimonials">
					<h2><?php
							echo $testimonial_heading = get_field('testimonial_heading');
						?></h2>
					<div class="testimonials-con">
						<div class="row">                           
						  <?php
								
								
								$testimonial = get_field('testimonial');

								if($testimonial):

									foreach($testimonial as $testimonials) : ?>

						  <div class="col-md-6">
								<div class="testimonials-block">
									<img src="<?php echo $testimonials['image']['url']; ?>" alt="">
									<?php echo $testimonials['content']; ?>
									<a href="#"><?php echo $testimonials['title']; ?></a>
								</div>
								<!-- /.testimonials-block -->
							</div>
							<!-- /.col-md-6 -->
						   <?php 
									
									endforeach;
									endif;
									 ?>

						 
							

							
						</div>
						<!-- /.row -->
					</div>
					<!-- /.testimonials-con -->
				</div>
				<!-- /.testimonials -->

				<div class="process">
					<h2><?php
							echo $our_process_heading = get_field('our_process_heading');
						?></h2>
					<ul class="process-block">
					 

						<?php
								
								
								$process = get_field('our_process');

								if($process):

									foreach($process as $processs) : ?>

					 <li>
							<div class="icon-block">
								<img src="<?php echo $processs['image']['url']; ?>" alt="">
							</div>
							<?php echo $processs['content']; ?>
						</li>
						 <?php 
									
									endforeach;
									endif;
									 ?>
					  
					  
					</ul>
				</div>
				<!-- /.process -->

				<a href="#" class="gift-block">
					<div class="gift-icon"></div>
				</a>
				<!-- /.gift-block -->
			
		</div>
		<!-- /.col-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->


			</div>
			<!-- /.overlap-block -->
		</div>
		<!-- /.col-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container-fluid -->


<?php get_footer(); ?>