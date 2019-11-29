<?php
/**
 * Template Name: Jobs
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

	get_header();
	$container = get_theme_mod( 'understrap_container_type' );
 ?>

 <div class="container-fluid no-pad jobs <?php echo get_banner_class(); ?>">
	<div class="row">
		<div class="col-12">
			<div class="overlay-block">
				<div class="banner <?php echo get_banner_class(); ?>">
					<div class="banner-content">
						<h4><?php the_title(); ?></h4>
					</div>
					<!-- /.banner-content -->
				</div>
				<!-- /.banner not-home -->

				<div class="container">
					<div class="row">
						<div class="col-12">
				
							<div class="txt-container wow fadeInRight">
								<div class="ai-con">
									
								<?php

								 while( have_posts() ):the_post();
								 
									the_content();
								 
								
								 endwhile;

								?>

									<div class="open-positions">
										<h5><?php
							echo $job_heading = get_field('job_heading');
							?></h5>
										<ul>
											
										<?php
											$args = array( 'posts_per_page' => -1,  'post_type' => 'jobs');

											$postslist = get_posts( $args );
											foreach ( $postslist as $post ) :
											
											  setup_postdata( $post ); ?>
												
												<li>
													<a class="job-post-link" href="<?php the_permalink(); ?>"></a>
													<div class="job-title">
														<a href="<?php the_permalink(); ?>">+ <?php the_title(); ?></a>
													</div>
													<!-- /.job-title -->
													<div class="job-address">
														<i class="fa fa-map-marker"></i> 
														<?php
															$job_location = get_post_meta( $post->ID,'jobs_location',true );
															if($job_location!='')
															{
															echo $job_location;     
															}  
													 	?>
													</div>
													<!-- /.job-title -->
													<div class="job-read-more">
														<a href="<?php the_permalink(); ?>">Read more ></a>
													</div>
													<!-- /.job-title -->
												</li>
												<?php
											endforeach; 
											wp_reset_postdata();

											?>
										
										</ul>
									</div>
									<!-- /.open-positions -->
								</div>
								<!-- /.ai-con -->                       
							</div>
							<!-- /.txt-container -->
			
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