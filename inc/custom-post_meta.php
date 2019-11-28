<?php
/**
 * Register  Classes meta.
 */ 


function classes_meta() {
    add_meta_box( 'classes_post_meta', __( 'News Section' ), 'classes_meta_callback', 'page', 'normal', 'high' );
    
}
add_action( 'add_meta_boxes', 'classes_meta' );
 
/**
 * Outputs the content of the meta box
 */
 
function classes_meta_callback( $post ) {

wp_nonce_field( 'classes_meta_submit', 'classes_meta_input' );
$newsCatFirst = get_post_meta( $post->ID, 'newsCatFirst', true );
$newsCatFirstSecond = get_post_meta( $post->ID, 'newsCatFirstSecond', true );
$newsCatFirstThird = get_post_meta( $post->ID, 'newsCatFirstThird', true );

$terms = get_terms( 'taxonomies_news' );
  ?>

  <table>
      <tr>
      <td><label for="classesmeta"><?php _e( 'Select News Category For Section First ')?></td>
      <td> 
        <select name="newsCatFirst">
          
        <?php 
        foreach ( $terms as $term ):
          $termID = $term->term_id;
          $term = get_term( $termID, 'taxonomies_news' );
          $catName = $term->name;
        ?>
       
          <option value="<?php echo $term->term_id;?>"<?php if($newsCatFirst == $term->term_id):?> selected="selected" <?php endif; ?>>
            <?php echo get_taxnomie_news_cat_name($termID);?>
          </option>
          <?php endforeach; ?>
        </select>
      </td>
    </tr> 
     <tr>
      <td><label for="classesmeta"><?php _e( 'Select News Category For Section Second ')?></td>
      <td> 
        <select name="newsCatFirstSecond">
          
          <?php 
        foreach ( $terms as $term ):
        $termID = $term->term_id;
          ?>
          <option value="<?php echo $term->term_id;?>"<?php if($newsCatFirstSecond  == $term->term_id):?> selected="selected" <?php endif; ?>>
            <?php echo get_taxnomie_news_cat_name($termID);?>
          </option>
          <?php endforeach; ?>
        </select>
      </td>
    </tr> 
    <tr>
      <td><label for="classesmeta"><?php _e( 'Select News Category For Section Third ')?></td>
      <td> 
        <select name="newsCatFirstThird">
          
          <?php 
        foreach ( $terms as $term ):
          $termID = $term->term_id;
          ?>
          <option value="<?php echo $term->term_id;?>"<?php if($newsCatFirstThird== $term->term_id):?> selected="selected" <?php endif; ?>>
            <?php echo get_taxnomie_news_cat_name($termID);?>
              
          </option>
          <?php endforeach; ?>
        </select>
      </td>
    </tr> 
  </table>


<?php

} 
 /**
 * Saves the custom meta input
 */
function classes_meta_save( $post_id ) {

    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'classes_meta_input' ] ) && wp_verify_nonce( $_POST[ 'classes_meta_input' ], 'classes_meta_submit' ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce  ) {
        return;
    }
     

        if( isset($_POST['newsCatFirst']) ):        
            update_post_meta($post_id, 'newsCatFirst', sanitize_text_field( $_POST[ 'newsCatFirst']));      
        endif;

          if( isset($_POST['newsCatFirstSecond']) ):        
            update_post_meta($post_id, 'newsCatFirstSecond', sanitize_text_field( $_POST[ 'newsCatFirstSecond']));      
          endif;

          if( isset($_POST['newsCatFirstThird']) ):        
            update_post_meta($post_id, 'newsCatFirstThird', sanitize_text_field( $_POST[ 'newsCatFirstThird']));      
          endif;

}
add_action( 'save_post', 'classes_meta_save' ); 

 
/* Testimonial Post Meta */

function testimonial_meta() {
    add_meta_box( 'testimonial_facebooklink_meta', __( 'Team Designation' ), 'testimonial_meta_callback', 'testimonial', 'normal', 'high' );
    
}
add_action( 'add_meta_boxes', 'testimonial_meta' );
 
/**
 * Outputs the content of the meta box
 */
 
function testimonial_meta_callback( $post ) {
  wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
  $testimonial_designation = get_post_meta( $post->ID, 'testimonial_designation', true );
  ?>
  <table>
    <tr>
      <td><label for="testimonialmeta"><?php _e( 'Designation ')?></td>
      <td> <input type="text" name="testimonial_designation" id="testimonial_designation" value="<?php echo esc_attr__( $testimonial_designation);?>"  /></td>
    </tr> 
  </table>

<?php

} 
 /**
 * Saves the custom meta input
 */
function testimonial_meta_save( $post_id ) {

      $is_autosave = wp_is_post_autosave( $post_id );
      $is_revision = wp_is_post_revision( $post_id );
     
      // Exits script depending on save status
      if ( $is_autosave || $is_revision  ) {
          return;
      }
        if( isset($_POST['testimonial_designation']) ):        
            update_post_meta($post_id, 'testimonial_designation', sanitize_text_field( $_POST[ 'testimonial_designation']));      
        endif;

        
}
add_action( 'save_post', 'testimonial_meta_save' );


/* Trainer Post Meta */

function trainer_meta() {
    add_meta_box( 'trainer_facebooklink_meta', __( 'Team Designation' ), 'trainer_meta_callback', 'trainer', 'normal', 'high' );
    
}
add_action( 'add_meta_boxes', 'trainer_meta' );
 
/**
 * Outputs the content of the meta box
 */
 
function trainer_meta_callback( $post ) {
   wp_nonce_field( 'trainer_meta_submit', 'trainer_meta_input' );
  $trainer_designation = get_post_meta( $post->ID, 'trainer_designation', true );
  ?>
  <table>
    <tr>
      <td><label for="trainermeta"><?php _e( 'Designation ')?></td>
      <td> <input type="text" name="trainer_designation" id="trainer_designation" value="<?php echo esc_attr__( $trainer_designation);?>"  /></td>
    </tr> 
  </table>

<?php

} 
 /**
 * Saves the custom meta input
 */
function trainer_meta_save( $post_id ) {

    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'trainer_meta_input' ] ) && wp_verify_nonce( $_POST[ 'trainer_meta_input' ], 'trainer_meta_submit' ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce  ) {
        return;
    }

      $is_autosave = wp_is_post_autosave( $post_id );
      $is_revision = wp_is_post_revision( $post_id );
     
      // Exits script depending on save status
      if ( $is_autosave || $is_revision  ) {
          return;
      }
        if( isset($_POST['trainer_designation']) ):        
            update_post_meta($post_id, 'trainer_designation', sanitize_text_field( $_POST[ 'trainer_designation']));      
        endif;

        
}
add_action( 'save_post', 'trainer_meta_save' );





