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

<div class="container-fluid firstPage <?php echo get_banner_class(); ?>">
	<div class="row">
		<div class="col-12">
			<div class="overlap-block">
				<div id="banner" class="banner front-page">
					<video autoplay muted loop class="hero-bg-video">
						<source src="https://www.neurocat.ai/wp-content/uploads/2018/11/iStock-1058209756.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
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
												<h4 data-animation-in="fadeInUp"><?php echo $slider['title']; ?></h4>
												<p data-animation-in="fadeInUp"><?php echo $slider['content']; ?></p>
											  
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
							<div class="txt-container wow fadeInRight" data-wow-delay="1s">
								<a target="_blank" href="https://www.neurocat.ai/jobs/" class="ai-link-for-mobile btn btn-long">AI jobs: Check our open positions. <img src="https://www.neurocat.ai/wp-content/themes/neurocat/img/job_detail_btn_icon2.png" alt="btn-icon"></a>
                        <div class="ai-con">
                            <div class="row column-reverse">
                                <div class="col-lg-7">
                                    <div class="ser-content">
                                        <?php

                                            while( have_posts() ):the_post();
                                             
                                            the_content();
                                             
                                            endwhile;

                                        ?>
                                    </div>
                                </div>
                                <?php
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),full );
                                if($image!='') {
                                ?>
                                <div class="col-lg-5 order-lg-first">
                                    <div class="ser-img">
                                        <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.ai-con -->                       
                    </div>
                    <!-- /.txt-container -->
				<div class="last-news">
					<div class="show-all wow fadeInUp">
						<figure>
							<img src="<?php echo $path; ?>/img/catgraphic.svg" alt="" class="img-fluid">
							<?php
							$news_show_all = get_field('news_show_all');
							?>
							<figcaption><?php
							echo $last_blog_content = get_field('last_blog_content');
							?></figcaption>
							<a href="<?php echo $news_show_all; ?>" class="btn">Show all</a>
						</figure>
					</div>
					<div class="last-news-block wow fadeInUp">
					   <?php
							
							$args = array( 'posts_per_page' => 2, 'order'=> 'DESC', 'orderby' => 'id', 'post_type' => 'post');
														
							$postslist = get_posts( $args );
							foreach ( $postslist as $post ) :
							  setup_postdata( $post ); 
						?> 
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
						<!-- <article> on second post-->
						
												
						
							<a href="<?php the_permalink();?>" class="post-img">
							<?php //the_post_thumbnail( $post_id, 'thumb-image', array( 'class' => 'img-fluid' ) ); ?>
						<img src="<?php 	echo $feat_image[0];  ?>" alt="<?php the_title(); ?>" class="img-fluid">	</a>
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
						<?php
							endforeach; 
							wp_reset_postdata();
						?>
				   
					</div>
					<!-- /.last-news-block -->
				</div>
				<!-- /.last-news -->

				<div class="vision">
				    <div class="vision-mobile">
				    <?php
								
								
						$vision = get_field('our_vision');

						if($vision):

							foreach($vision as $visiondata) :
					?>
					<img src="<?php echo $visiondata['image']['url']; ?>" alt="" class="img-fluid">
				  <!--  <img src="<?php //echo $path; ?>/img/our-vision-small.jpg" alt="" class="img-fluid mobile-elem"> -->
					<div class="vision-text wow fadeInRight">
						<h2> <?php echo $visiondata['title']; ?></h2>
					   <?php echo $visiondata['content']; ?>
					</div>
					<?php 
									
						endforeach;
						endif;
					?>
					</div>
					
					<!-- /.vision-text -->
					<div class="vision-tags wow fadeInLeft">
						<img src="<?php echo $tag_cloud= get_field('tag_cloud'); ?>" alt="">	
					</div>
					<!-- /.vision-tags -->
				</div>
				<!-- /.our-vision -->
				
				</div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.conitaner -->

    <div class="container-fluid testimonials">
        <div class="row">
            <div class="col-12">

				
					<h2><?php
							echo $testimonial_heading = get_field('testimonial_heading');
						?></h2>
					
					
					           <div class="testimonials-con">
                        <div class="row">
                            <div class="col-12">
                                <div class="testimonials-block">
                                    <div class="row">
                                        
                                        <?php
						$testimonial = get_field('testimonial');
						if($testimonial):
						$animation_delay = 0;
						foreach($testimonial as $testimonials) : ?>
                                        
                                        <div class="col-sm-4 col-md-3">
                                            <img class="wow zoomIn" data-wow-duration="0.5s" data-wow-delay="<?php echo $animation_delay = $animation_delay + 0.2 ?>s" src="<?php echo $testimonials['image']['url']; ?>" alt="">
                                        </div>
                                         <?php 	
					   endforeach;
				           endif;
					 ?>
                                        <!-- /.col-3 -->
                                    </div>
                                    <!-- /.row -->
                                    <?php echo do_shortcode('[testimonial_rotator id="1732"]'); ?>
                                </div>
                                <!-- /.testimonials-block -->
                            </div>
                            <!-- /.col-12 -->
                            <?php ?>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.testimonials-con -->
					
				</div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


	
	<div class="container-fluid processbar">
        <div class="row">
            <div class="col-12">
    <div class="container">
        <div class="row">
            <div class="col-12">

				<div class="process">
					<h2><?php
							echo $our_process_heading = get_field('our_process_heading');
						?></h2>
					<div class="process-bar"></div>
					<ul class="process-block">
					 

						<?php
								
								
								$process = get_field('our_process');

								if($process):
									$animation_delay = 0.3;

									foreach($process as $processs) : ?>

					 <li class="wow zoomIn" data-wow-delay="<?php echo $animation_delay = $animation_delay + 0.3; ?>s">
							<div class="icon-block">
								<img src="<?php echo $processs['image']['url']; ?>" alt="">
							</div>
							<p> <?php echo $processs['content']; ?></p>
						</li>
						 <?php 
									
									endforeach;
									endif;
									 ?>
					  
					  
					</ul>
				</div>
				<!-- /.process -->

				
			
		</div>
		<!-- /.col-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->

				</div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


<a href="#" class="gift-block">
	<div class="gift-icon"></div>
</a>
<!-- /.gift-block -->

			</div>
			<!-- /.overlap-block -->
		</div>
		<!-- /.col-12 -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container-fluid -->


<!-- <div class="cc-banner">
    <div class="cc-message">
       
		<?php 
/*
if ( function_exists( 'ot_get_option' ) ) 
			{ 
			$content = ot_get_option( 'content' );
			  if($content!='')
			  {
			 
			  	echo $content;
			  }
			}
			*/
			?>
		
    <!-- </div> -->
    <!-- /.cc-message -->
<!--     <div class="cc-compliance">
        <a href="#" class="cc-btn">Got it!</a>
    </div> -->
    <!-- /.cc-compliance -->
</div>
<!-- /.cc-banner -->


<?php get_footer(); ?>