<?php
/**
 * Template Name: Services
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$path = get_template_directory_uri();
?>


<div class="service-side-nav">
  <div class="service-side-nav-btn">
    <img src="https://www.neurocat.ai/wp-content/uploads/2018/11/neurocat_website_mobile_products-menu-arrow.png" alt="products-menu-arrow">
  </div>
  <div class="service-side-nav-menu">
    <ul>
      <li class="service-side-nav-menu-title">menu</li>
      <li><a href="#overview"><img src="https://www.neurocat.ai/wp-content/uploads/2018/11/menu-icon-overview.png" alt="menu-icon-overview">Overview</a></li>
      <li><a href="#Services"><img src="https://www.neurocat.ai/wp-content/uploads/2018/11/menu-icon-services.png" alt="menu-icon-services">Services</a></li>
      <li><a href="#Aid_kit"><img src="https://www.neurocat.ai/wp-content/uploads/2018/11/neurocat_website_products_menu_aidkit.png" alt="menu-icon-aidkit">aidkit.ai</a></li>
      <li><a href="#Deep_trust"><img src="https://www.neurocat.ai/wp-content/uploads/2018/11/menu-icon-deeptrust.png" alt="menu-icon-deeptrust">DeepTrust</a></li>
      <li><a href="#colophon"><img src="https://www.neurocat.ai/wp-content/uploads/2018/11/menu-icon-contact.png" alt="menu-icon-contact.png">Contact</a></li>
      <li class="service-side-nav-close"><i class="fa fa-angle-right"></i></li>
    </ul>
  </div>
</div>

<div class="container-fluid services <?php echo get_banner_class(); ?>">
    <div class="row">
        <div class="col-12">
            <div class="overlay-block">

                <div id="overview" class="page-section">
                <div class="banner <?php echo get_banner_class(); ?>">
                    <div class="banner-content">
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <!-- /.banner-content -->
                </div>
                <!-- /.banner not-home -->
                <?php if(have_rows('featured_service')) : ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="txt-container wow fadeInRight">
                      <div class="ai-con">
                        <div class="featured-service">
                          <div class="row">
                            
                            <?php 
                            while(have_rows('featured_service')) : 
                                the_row();
                                $title = get_sub_field('ft_service_title');
                                $link = get_sub_field('ft_service_link');
                                $image = get_sub_field('ft_service_image');
                                $name = get_sub_field('ft_service_name');
                            ?>
                            <div class="col-4">
                              <div class="featured-service-box">
                                <h3 class="featured-service-title"><?php echo $title; ?></h3>
                                <?php if(!empty($image)) : ?>
                                <div class="featured-service-box-half">
                                  <a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" alt="nurocat"></a>
                                  <h3 class="featured-service-name"><?php echo $name; ?></h3>
                                </div>
                                <!-- End of featured-service-box-half -->
                            <?php endif; ?>
                            <?php //if(!empty($content)) : ?>
                                <!-- <div class="featured-service-box-half"> -->
                                  <?php// echo $content; ?>
                                <!-- </div> -->
                                <!-- End of featured-service-box-half -->
                            <?php //endif; ?>
                              </div>
                              <!-- end of featured-service-box -->
                            </div>
                            <!-- End of col -->
                        <?php endwhile; ?>
                          </div>
                          <!-- End of row -->
                        </div>
                        <!-- End of featured-service -->
                      </div>
                    </div>
                    <!-- /.well pad-80 -->
                            </div>
                            <!-- /.col-12 -->
                        </div>
                        <!-- /.row -->
                     </div>
                     <!-- /.container -->
                 <?php endif; ?>
                    </div>
                    <!-- /#overview -->

                    <!-- write another text from here -->

                        <div class="main-wrapper">


                            
                            <div id="Services" class="page-section">
                            <div class="container">


                    <div class="main-service-section">
                      <h2 class="service-section-title"><?php echo get_field('ai_quality_section_title'); ?></h2>
                      <?php if(have_rows('ai_quality_content')) : ?>

                      <div class="row">
						
                        <?php 
// 						  $animation_delay = 0;
						  while (have_rows('ai_quality_content')) : the_row();
                            $icon = get_sub_field('ai_quality_service_icon');
                            $title = get_sub_field('ai_quality_service_title');
                            $content = get_sub_field('ai_quality_service_content');
                        ?>


                        <div class="col-4 wow fadeInUp">
                          <div class="main-service-box">
                            <?php if(!empty($icon)) : ?>
                            <img src="<?php echo $icon; ?>" alt="<?php echo $title; ?>">
                        <?php endif; ?>
                            <h3 class="main-service-box-title"><?php echo $title; ?></h3>
                            <p><?php echo $content; ?></p>
                          </div>
                        </div>
                        <!-- End of col -->
                        <?php endwhile; ?>
                      </div>
                      <!-- End of row -->
                  <?php endif; ?>
                    </div>
                    <!-- End of main-service-section -->
                            </div>
                            <!-- /.container -->
                           	</div>
                            <!-- /#quality -->


                            <div class="bl-bg">
                                <div class="bl-banner bl-bnnr2 ml-auto">                                    
                                    
                                    <ul>
                                        
                                        <?php
                                                            
                                            $quality_benefits = get_field('quality_benefits');

                                            if($quality_benefits):
                                              $animation_delay = 0;
                                                    foreach($quality_benefits as $quality_benefit) : ?>
                                                <li class="wow bounceIn" data-wow-delay="<?php echo $animation_delay = $animation_delay + 0.3; ?>s">
                                                    <div class="bl-item">
                                                        <img src="<?php echo $quality_benefit['image']; ?>" alt="">
                                                        <p><?php echo $quality_benefit['title']; ?></p>
                                                    </div>
                                                </li>                       
                                                    <?php 
                                                    endforeach;
                                            endif;
                                        ?>                          
                                        
                                    </ul>
                                </div>
                                <!-- /.bl-banner.bl-bnnr2 -->
                            </div>
                          <?php 
                           $services = get_field('all_services' );
                           if(is_array($services) && count($services)){
                            $first_row = $services[0];
                           $second_row = $services[1];
                           ?>
                           <div id="Aid_kit" class="page-section">
                            <div class="container">
                           <div class="side-by-side-section side-by-side-left">
                      <div class="row">
                        <div class="col-sm-6 wow fadeInLeft">
                          <div class="side-by-side-content">
                            <img src="<?php echo $first_row['title_image']; ?>" alt="addkit">
                            <div class="service_content">
                              <?php echo $first_row['service_content']; ?>
                              <?php if(!empty($first_row['brand_image'])) : ?>
                              <img src="<?php echo $first_row['brand_image'] ?>" alt="brand-image" class="brand-image">
                            <?php endif; ?>
                            </div>
                            <a target="_blank" href="<?php echo $first_row['button_link']; ?>" class="btn btn-long"><?php echo $first_row['button_text']; ?><img src="https://www.neurocat.ai/wp-content/themes/neurocat/img/job_detail_btn_icon2.png" alt="btn-icon"></a>
                          </div>
                          <!-- End of side-by-side-content -->
                        </div>
                        <!-- End of col -->
                        <div class="col-sm-6">
                          <div class="side-by-side-img">
                            <img src="<?php echo $first_row['background_image']; ?>" alt="side-by-side-1">
                          </div>
                          <!-- End of side-by-side-img -->
                        </div>
                        <!-- End of col -->
                      </div>
                      <!-- End of row -->
                    </div>
                    <!-- End of side-by-side-section -->
                  </div>
                </div>
                    <div id="Deep_trust" class="page-section">
                        <div class="container">
                      <div class="side-by-side-section side-by-side-right">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="side-by-side-img">
                            <img src="<?php echo $second_row['background_image']; ?>" alt="side-by-side-1">
                          </div>
                          <!-- End of side-by-side-img -->
                        </div>
                        <!-- End of col -->
                        <div class="col-sm-6 wow fadeInRight">
                          <div class="side-by-side-content">
                            <img src="<?php echo $second_row['title_image']; ?>" alt="addkit">
                            <div class="service_content">
                              <?php echo $second_row['service_content']; ?>
                              <?php if(!empty($second_row['brand_image'])) : ?>
                              <img src="<?php echo $second_row['brand_image'] ?>" alt="brand-image" class="brand-image">
                            <?php endif; ?>
                            </div>
                            <a target="_blank" href="<?php echo $second_row['button_link']; ?>" class="btn btn-long"><?php echo $second_row['button_text']; ?><img src="https://www.neurocat.ai/wp-content/themes/neurocat/img/job_detail_btn_icon2.png" alt="btn-icon"></a>
                          </div>
                          <!-- End of side-by-side-content -->
                        </div>
                        <!-- End of col -->
                      </div>
                      <!-- End of row -->
                    </div>
                    <!-- End of side-by-side-section -->
                  </div>
                </div>
                         <?php } ?>

                    


                           


                        </div>
                        <!-- /.main-wrapper -->
                    

        </div>
        <!-- /.overlay-block -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

 <?php get_footer(); ?>