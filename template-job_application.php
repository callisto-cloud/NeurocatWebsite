<?php
/**
 * Template Name: Job Application
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

    get_header();
    $container = get_theme_mod( 'understrap_container_type' );
    $lastpageid= $_REQUEST['formid'];
 ?>
<style>
input.position { display:none; }
input.type { display:none; }
input.location { display:none; }
</style>

<div class="container-fluid no-pad job-detail <?php echo get_banner_class(); ?>">
    <div class="row">
        <div class="col-12">
            <div class="overlap-block">
                <div class="banner <?php echo get_banner_class(); ?>">
                    <div class="banner-content">
                        <h4><?php
							echo $page_heading = get_field('page_heading');
							?></h4>
                    </div>
                    <!-- /.banner-content -->
                </div>
                <!-- /.banner not-home -->

                <div class="container">
    <div class="row">
        <div class="col-12">
            
                
                <div class="txt-container">
                    <div class="ai-con">
                        <h1><?php echo get_the_title( $lastpageid ); ?></h1>
                        <ul class="job-caption">
                            <li class="job-type"><?php
                                            $job_type = get_post_meta( $lastpageid,'job_type',true );
                                            if($job_type!='')
                                            {
                                            echo $job_type;     
                                             }  
                                     ?></li>
                            <li class="job-address"><?php
                                            $job_location = get_post_meta( $lastpageid,'jobs_location',true );
                                            if($job_location!='')
                                            {
                                            echo $job_location;     
                                             }  
                                     ?></li>
                        </ul>

                        <div class="job-application">
                           
                            <?php echo do_shortcode('[contact-form-7 id="113" title="Submit your application"]'); ?>
                            
                        </div>
                        <!-- /.job-application -->
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
            <!-- /.overlap-block -->
        </div>
        <!-- /.col-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
 
 

 <?php get_footer(); ?>