<?php
/**
 * Template Name: Services-old
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$path = get_template_directory_uri();
?>



<div class="sticky-wrapper">
    <div class="menu-btn">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hamburger.png" alt="">
    </div>
     <div class="sticky-menu">
        <ul>
            <li class="menu-title">menu</li>
             <li><a href="#quality"><div class="fl-icon icon3"></div>Quality</a></li>
              <li><a href="#research"><div class="fl-icon icon4"></div>Research</a></li>
            <li><a href="#consulting"><div class="fl-icon icon1"></div>Consulting</a></li>
            <li><a href="#develop"><div class="fl-icon icon2"></div>Develop</a></li>
           
           
            <li><a href="#wrapper-footer"><div class="fl-icon icon5"></div>Contact</a></li>
        </ul>
     </div>
</div>

<div class="container-fluid services <?php echo get_banner_class(); ?>">
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
                    <div class="txt-container">
                        <div class="ai-con">
                            <div class="row">
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

                    <!-- write another text from here -->

                        <div class="main-wrapper">



                            <div id="quality" class="quality">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="content">   
                                            <div class="text-block">    
                                                <?php echo $quality = get_field('quality'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col-lg-6 -->
                                    <div class="col-lg-7 text-center">
                                        <img class="img-fluid" src="<?php echo $quality_image = get_field('quality_image'); ?>" alt="">
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->
                                
                                <div class="q-icon-list">
                                    <div class="row">

                                        <ul>
                                             
                                            <?php
                                                            
                                                $quality_features = get_field('quality_features');

                                                if($quality_features):

                                                    foreach($quality_features as $quality_feature) : ?>
                                                     <li>
                                                        <div class="q-circle">
                                                            <div class="q-inner-circle">
                                                                <img src="<?php echo $quality_feature['image']; ?>" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="sub-title"><?php echo $quality_feature['title']; ?></div>
                                                     </li>                       
                                                        <?php 
                                                    endforeach;

                                                endif;
                                            ?>               
                                                                 
                                        </ul>
                                    </div>
                                <!-- /.row -->
                                </div>
                                <!-- /.q-icon-list -->


                                <div class="performance">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <ul>
                                                <?php
                                                            
                                                $quality_left_content= get_field('quality_left_content');

                                                if($quality_left_content):

                                                    foreach($quality_left_content as $quality_left_content_data) : ?>
                                                    <li><?php echo $quality_left_content_data['title']; ?></li>
                                                     <?php 
	                                                    endforeach;
							    endif;
                                                    ?>          
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 -->

                                        <div class="col-lg-6">
                                            <div class="content">
                                               <?php echo $quality_right_content = get_field('quality_right_content'); ?>
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 -->
                                    </div>
                                </div>
                                <!-- /.performance -->

                                <div class="customer-needs">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="content">
                                                 <?php echo $quality_left_content_2= get_field('quality_left_content_2'); ?>
                                            </div> 
                                        </div>
                                        <!-- /.col-lg-6 -->
                                        <div class="col-lg-6">
                                            <img class="img-fluid" src="<?php echo $quality_right_image= get_field('quality_right_image'); ?>" alt="">
                                        </div>
                                        <!-- /.col-lg-6 -->
                                    </div>
                                </div>
                                <!-- /.customer-needs -->

                            </div>
                            <!-- /.quality -->


                            <div class="bl-banner bl-bnnr2">
                                <ul>
                                    
                                    <?php
                                                        
                                        $quality_benefits = get_field('quality_benefits');

                                        if($quality_benefits):

                                                foreach($quality_benefits as $quality_benefit) : ?>
                                            <li>
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



                            <div id="research" class="research">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="content">
                                            <?php echo $research = get_field('research'); ?>    
                                        </div>
                                    </div>

                                    <div class="col-lg-7">
                                        <img class="img-fluid" src="<?php echo $research_image = get_field('research_image'); ?>" alt="">
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        
                                    <ul>
                                        <?php
                                                        
                                        $research_application = get_field('research_application');

                                        if($research_application):

                                            foreach($research_application as $research_applications) : ?>
                                            <li>
                                                <div class="circle">
                                                    <div class="inner-circle">
                                                        <span><?php echo $research_applications['title']; ?></span>
                                                    </div>
                                                </div>
                                            </li>                           
                                            <?php 
                                            endforeach;

                                        endif;
                                    ?>  
                                    
                                    </ul>

                                    </div>
                                    <!-- /.col-md-8 -->
                                    <div class="col-lg-4 mt-5">
                                        <div class="content">
                                            <?php echo $why_is_research_important = get_field('why_is_research_important'); ?> 
                                        </div>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.col-md-4 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.research -->


                            <div class="bl-banner bl-bnnr2 ml-auto">
                                <ul>
                                    
                                    <?php
                                                        
                                        $research_benefits = get_field('research_benefits');

                                        if($research_benefits):

                                            foreach($research_benefits as $research_benefit) : ?>

                                                <li>
                                                    <div class="bl-item">
                                                        <img src="<?php echo $research_benefit['image']; ?>" alt="">
                                                        <p><?php echo $research_benefit['title']; ?></p>
                                                    </div>
                                                </li>   

                                    <?php 
                                            endforeach;

                                        endif;
                                    ?>                  
                                                        
                                </ul>
                            </div>
                            <!-- /.bl-banner.bl-bnnr2 -->
                            
                            
                            <div id="consulting" class="consulting">
                                <div class="consulting-wrap1">
                                    <div class="row">
                                        <?php
                                            
                                            $consulting = get_field('consulting_main');

                                             if($consulting):

                                            foreach($consulting as $consultingdata) : ?>
                                        <div class="col-lg-5">
                                            <div class="content">
                                                <?php
                                                    echo $consultingdata['content_left'];
                                                ?>
                                            </div>
                                        </div>
                                        <!-- /.col-md-5 -->
                                        <div class="col-lg-7">
                                            <div class="float-center">
                                                <?php
                                                    echo $consultingdata['content_right'];
                                                ?>
                                                
                                            </div>  
                                        </div>
                                        <!-- /.col-md-7 -->
                                        <?php 
                                            endforeach;
                                            endif;
                                         ?>
                                    </div>
                                    <!-- /.row -->  
                                </div>

                                <div class="consulting-wrap2">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="con-solution">
                                                <div class="line-top">
                                                    <h3><?php
                                                        echo $consulting_bottom_content_heading = get_field('consulting_bottom_content_heading');
                                                    ?></h3>
                                                </div>
                                                <ul>
                                                    <?php
                                                        
                                                        $consulting_bottom_content = get_field('consulting_bottom_left_content');

                                                         if($consulting_bottom_content):

                                                        foreach($consulting_bottom_content as $consulting_bottom_content_data) : ?>
                                                    <li>
                                                        <div class="inner-circle"><span><?php echo $consulting_bottom_content_data['title']; ?></span></div>

                                                        <!-- tooltip -->
                                                        <div class="tooltp">
                                                            <div class="tooltp-arrow"></div>
                                                            <?php echo $consulting_bottom_content_data['content']; ?>
                                                        </div>


                                                    </li>
                                                    <?php 
                                                        endforeach;
                                                        endif;
                                                    ?>
                                                </ul>
                                                <div class="line-bottom">
                                                    <h3><?php
                                                        echo $consulting_bottom_content_bottom_heading = get_field('consulting_bottom_content_bottom_heading');
                                                    ?></h3>
                                                </div>
                                            </div>
                                            <!-- /.consul-sol -->
                                        </div>
                                        <!-- /.col-md-8 -->
                                        <div class="col-lg-4">
                                            <div class="content">
                                                <div class="text-block">
                                                    <?php
                                                        echo $problems_we_solve = get_field('problems_we_solve');
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col-md-4 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.consulting-wrap2 -->

                            </div>
                            <!-- /.consulting -->

                            <div class="bl-banner">

                                <ul>
                                    <?php
                                    $consulting_benefits = get_field('consulting_benefits');

                                     if($consulting_benefits):

                                    foreach($consulting_benefits as $consulting_benefits_data) : 
                                    ?>
                                        <li>
                                            <div class="bl-item">
                                                <img src="<?php echo $consulting_benefits_data['image']['url']; ?>" alt="">
                                                <p><?php echo $consulting_benefits_data['title']; ?></p>
                                            </div>
                                        </li>                       
                                    <?php 
                                    endforeach;
                                    endif;
                                    ?>              
                                    
                                </ul>

                            </div>
                            <!-- /.bl-banner -->

                            <div id="develop" class="development">
                                <div class="row">
                                        <div class="col-lg-5">
                                            <div class="content">
                                                <?php
                                                    echo $development = get_field('development');
                                                ?>
                                            </div>
                                        </div>
                                    <!-- /.col-md-4 -->
                                    <div class="col-lg-6 offset-lg-1">
                                        <svg class="clip-svg">
                                            <defs>
                                                <clipPath id="hexagon-clip" clipPathUnits="objectBoundingBox">
                                                    <polygon points="0.25 0.05, 0.75 0.05, 1 0.5, 0.75 0.95, 0.25 0.95, 0 0.5" />
                                                </clipPath>
                                            </defs>
                                        </svg> 

                                        <ul>
                                            <?php

                                                $development_content_right = get_field('development_content_right');

                                                if($development_content_right):

                                                    foreach($development_content_right as $development_content_right) : ?>
                                                
                                                        <li>
                                                            <div class="hexagon-each dev-item">
                                                                <div class="hexagon-each inner-circle">
                                                                    <span><?php echo $development_content_right['title']; ?></span> 
                                                                </div>
                                                                <div class="overlay">
                                                                    <div class="caption"><?php echo $development_content_right['content']; ?></div>
                                                                </div>

                                                            </div>
                                                        </li>                               
                                                    <?php 
                                                    endforeach;
                                                endif;
                                            ?>                          
                                        </ul>

                                    </div>
                                </div>
                                <!-- /.row -->
                                
                                <div class="methods">
                                    <div class="row">
                                        <div class="col-lg-8 d-none d-lg-block">

                                            <?php $experimentation_image = get_field('experimentation_image'); 

                                            if($experimentation_image!='')
                                            {
                                            ?>
                                                <img class="img-fluid" src="<?php  echo $experimentation_image; ?>" >
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <!-- /.col-md-8 -->
                                        <div class="col-lg-4">
                                            <div class="content">
                                                <?php
                                                     echo $methods_we_use = get_field('methods_we_use');
                                                ?>
                                            </div>
                                        </div>
                                        <!-- /.col-md-4 -->
                                    </div>
                                <!-- /.row -->
                                </div>
                                <!-- /.methods -->
                            </div>
                            <!-- /.development -->


                            <div class="bl-banner ml-auto bl-comp">
                                <div class="support-company">

                                    <h3><?php echo $technology_heading = get_field('technology_heading'); ?></h3>
                                    <?php
                                                        
                                        $technologies = get_field('technologies');

                                        if($technologies):

                                            foreach($technologies as $technology) :
                                        ?>

                                        <a><img src="<?php echo $technology['image']; ?>" alt=""></a>

                                        <?php 
                                            endforeach;

                                        endif;
                                    ?>  

                                    <?php //echo $technologies_content = get_field('technologies_content'); ?>
                                </div>
                            </div>
                            <!-- /.bl-banner -->




                        </div>
                        <!-- /.main-wrapper -->
                    
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