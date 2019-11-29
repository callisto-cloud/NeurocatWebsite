<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );

?>
<?php get_sidebar( 'footerfull' ); 
$wowClass='';
if(is_front_page()){
	$wowClass = 'wow fadeInLeft';
}?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">
				<div class="footer-block">
					<div class="container-foo <?php echo get_banner_class(); ?>">
						<div class="row">
							<div class="col-md-4">
								<div class="row contact-info">
									
									<div class="col-12 <?php echo $wowClass;?>">
										<div class="flex-box">
										
										<?php if ( function_exists( 'ot_get_option' ) ) 
											{ 
											 $address = ot_get_option( 'address' );
											 if($address!='')
											 {
										?>
											<div class="icon-block">
												<img src="<?php echo get_template_directory_uri(); ?>/img/icon-14.png" alt="">
											</div>                                  
											<div class="info-block">
												<h6>Address</h6>
												<address>
													<?php echo $address; ?>
												</address>
											</div>
											<?php } } ?>
											
											
										</div>
									</div>
									<!-- /.col-12 -->
									<div class="col-12 <?php echo $wowClass;?>" data-wow-delay=".3s">
										<div class="flex-box">
										<?php if ( function_exists( 'ot_get_option' ) ) 
										{ 
										$emailcontact = ot_get_option( 'emailcontact' );
										if($emailcontact !='')
										{
										?>
											<div class="icon-block envelope">
												<img src="<?php echo get_template_directory_uri(); ?>/img/icon-15.png" alt="">
											</div>
											<div class="info-block">
												<h6>Email</h6>
												<?php echo $emailcontact; ?>
											</div>
										<?php } } ?>
										</div>
									</div>
									<!-- /.col-12 -->
									<div class="col-12 <?php echo $wowClass;?>" data-wow-delay=".6s">
										<div class="flex-box">
						
						<?php if ( function_exists( 'ot_get_option' ) )
						{
						$phone = ot_get_option( 'phone' );
						if($phone!='')
						{
						?>
						<div class="icon-block phone">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon-16.png" alt="">
						</div>
						<div class="info-block">
												
						<h6>Phone</h6>
						<?php echo $phone; ?><br />
						<?php } } ?>						
			
            			<?php
            			    if ( function_exists( 'ot_get_option' ) ) {
            			        $skype = ot_get_option( 'skype' );
            			        if($skype!='') {
            			?>
            			<?php echo $skype; ?>
            			<?php
            			        }
            			     }
            			?>
			
											</div>
										</div>
									</div>
									<!-- /.col-12 -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.col-md-4 -->

							<div class="col-md-8">
								<div class="form-block">
									
									
										
										<?php echo do_shortcode('[contact-form-7 id="67" title="Get in touch"]'); ?>
											<!-- /.col-12 -->
										
										<!-- /.row -->
									
								</div>
								<!-- /.form-block -->
							</div>
							<!-- /.col-md-8 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container-foo -->
				</div>
				<!-- /.footer-block -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

	<div class="container-fluid" id="contact">
		<div class="row">
			<div class="col-12">
				<footer class="site-footer" id="colophon">
					<div class="container">
						<div class="row">
							<div class="col-md-4 privacy">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '', 'menu' => 'Footer Menu','container' => '') ); ?>
								
							</div>
							<div class="col-md-5 col-lg-4 social">
								<ul>
								
						<?php 
							if ( function_exists( 'ot_get_option' ) ) 
							{
								/* get the tabs array */
								 $socia = ot_get_option( 'social_iconss', true ); 
								 if ( ! empty( $socia ) ) 
									{
										
										foreach( $socia as $social_icon ) 
										{
											?>
								
									<li><a href="<?php echo $social_icon['social_link']; ?>" target="_blank"><?php echo $social_icon['social_icon']; ?></a></li>
									
									<?php
							}
							}
										  
							}
								?>
									
									 
								</ul>
							</div>
							<!-- /.col-md-4 social -->
							<div class="col-5 col-md-3 col-lg-4 order-1 foo-logo">
								<?php if ( function_exists( 'ot_get_option' ) ) 
										{ 
										$footer_logo = ot_get_option( 'footer_logo' );
										if($footer_logo!='')
										{
										?>
								<a href="<?php echo site_url(); ?>"><img src="<?php echo $footer_logo; ?>"></a>
										<?php
										}
										}		
										?>
							</div>
							<!-- /.col-md-4 foo-logo -->

							<div class="col-7 col-md-12 order-md-12">
								<div class="site-info">
									<p><?php if ( function_exists( 'ot_get_option' ) ) { echo $copyright = ot_get_option( 'copyright' );}?></p>
								</div><!-- .site-info -->
							</div>
							<!-- /.col-6 col-md-12 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</footer><!-- #colophon -->
			</div>
			<!-- /.col-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<div class="question-form <?php echo get_banner_class(); ?> wow fadeInRight">
	
	
			<?php echo do_shortcode('[mc4wp_form id="348"]'); ?>

		
		<!-- /.info-block -->
</div>

<div class="popup-overlay"></div>
<!-- /.popup-overlay -->
<div class="popup-form">
	<div class="popup-block">
		<a href="#" class="close"></a>

	<?php if ( function_exists( 'ot_get_option' ) ) { echo $content_popup = ot_get_option( 'content_popup' );}?>

		<div class="row">
			<div class="col-lg-8">
				<div class="form-block">
					
				<?php echo do_shortcode('[contact-form-7 id="67" title="Get in touch"]'); ?>
				</div>
				<!-- /.form-block -->
			</div>
			<!-- /.col-md-8 -->

			<div class="col-lg-4 mobile-hidden">
				<div class="row contact-info">
					<div class="col-12">
						<div class="flex-box">
						<?php if ( function_exists( 'ot_get_option' ) ) 
											{ 
											 $address = ot_get_option( 'address' );
											 if($address!='')
											 {
										?>
							<div class="icon-block">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-14.png" alt="">
							</div>                                  
							<div class="info-block">
								<h6>Address</h6>
								<address>
									<?php echo $address; ?>
									<p><?php echo $direction = ot_get_option( 'direction' ); ?></p>
								</address>
							</div>
							<?php
							}
							}
							?>
						</div>
					</div>
					<!-- /.col-12 -->
					<div class="col-12">
						<div class="flex-box">
							
							
							<?php if ( function_exists( 'ot_get_option' ) )
							 { 
							$emailcontact = ot_get_option( 'emailcontact' );
							if($emailcontact!='')
							{
							?>
							<div class="icon-block envelope">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-15.png" alt="">
							</div>
							<div class="info-block">
								<h6>Email</h6>
								<?php echo $emailcontact; ?>
							</div>
							<?php
							}
							}
							?>
							
							
							
						</div>
					</div>
					<!-- /.col-12 -->
					<div class="col-12">
						<div class="flex-box">
						<?php if ( function_exists( 'ot_get_option' ) )
						{
						$phone = ot_get_option( 'phone' );
						if($phone!='')
						{
						?>
							<div class="icon-block phone">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icon-16.png" alt="">
							</div>
							<div class="info-block">
								<h6>Phone</h6>
								<?php echo $phone; ?><br />
								<?php } } ?>
								
								
			<?php if ( function_exists( 'ot_get_option' ) ) 
			{ 
			$skype = ot_get_option( 'skype' );
			  if($skype!='')
			  {
			  ?>
			  <p>Skype ID: <?php echo $skype; ?></p>
			  <?php
			  
			  }
			}
			?>
							</div>
						</div>
					</div>
					<!-- /.col-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.col-md-4 -->
		</div>
		<!-- /.row -->
	</div>
</div>
<!-- popup form-->

<?php wp_footer(); ?>

</body>

</html>

