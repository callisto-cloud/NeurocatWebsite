<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );

?>
<div class="container-fluid no-pad job-detail <?php echo get_banner_class(); ?>">
	<div class="row">
		<div class="col-12">
			<div class="overlay-block">
				<div class="banner <?php echo get_banner_class(); ?>">
					<div class="banner-content">
					<?php if ( function_exists( 'ot_get_option' ) ) 
						{ 
							$top_title= ot_get_option( 'top_title' );
							if($top_title!='')
							{
							?>
						<h4><?php echo $top_title; ?></h4>
						<?php
							}
							}
					?>
					</div>
					<!-- /.banner-content -->
				</div>
				<!-- /.banner not-home -->
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="txt-container">
								<div class="ai-con">
									<h1><?php the_title(); ?></h1>
									<ul class="job-caption">
										<li class="job-type">

											<?php
												$job_type = get_post_meta( $post->ID,'job_type',true );
												if($job_type!='')
												{
													echo $job_type;     
												}  
										 	?>
										 	
										 </li>
										<li class="job-address">

											<?php
												$job_location = get_post_meta( $post->ID,'jobs_location',true );
												if($job_location!='')
												{
												echo $job_location;     
												}  
										 	?>
										 	
										</li>
									</ul>
									<div class="dscp">  

										<?php
											 while( have_posts() ):the_post();
								 
												the_content();
								 
								 			endwhile;


										?>
										<form method="post" action="<?php the_permalink(35); ?>">
											<input type="hidden" name="formid" value="<?php echo get_the_ID(); ?>">
											<input type="submit"  value="Join us and apply now!" class="btn detail-btn">
										</form>
									</div>
							
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

