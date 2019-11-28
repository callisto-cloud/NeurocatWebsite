<?php

function getCustomField( $form_tag )
{
if ( $form_tag['name'] == 'position' ) {
 $page_title= get_the_title($_REQUEST['formid']);
$form_tag['values'][] = $page_title;
}
return $form_tag;


}
if ( !is_admin() ) {
add_filter( 'wpcf7_form_tag', 'getCustomField' );
}


function getCustomFieldsecond( $form_tag )
{
if ( $form_tag['name'] == 'Job_type' ) {
$page_title= get_post_meta( $_REQUEST['formid'],'job_type',true );
$form_tag['values'][] = $page_title;
}
return $form_tag;


}
if ( !is_admin() ) {
add_filter( 'wpcf7_form_tag', 'getCustomFieldsecond' );
}



function getCustomFieldthird( $form_tag )
{
if ( $form_tag['name'] == 'job_location' ) {
$page_title= get_post_meta( $_REQUEST['formid'],'jobs_location',true );
$form_tag['values'][] = $page_title;
}
return $form_tag;


}
if ( !is_admin() ) {
add_filter( 'wpcf7_form_tag', 'getCustomFieldthird' );
}




?>