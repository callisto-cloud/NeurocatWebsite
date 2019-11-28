<?php

// taxonomy name//
function get_taxnomie_news_cat_name($termID) {
   $term = get_term( $termID, 'taxonomies_news' );
   $catName = $term->name;
   return $catName;
}


function get_current_news_cat_name() {
global $post;
$tax_name = 'category';
$return = '';
$terms = get_the_terms( $post->ID, $tax_name );
if ( !empty( $terms ) ) {
$out = array();
foreach ( $terms as $term )
$out[0] = '<a href="' .get_term_link($term->slug, $tax_name) .'">'.$term->name.'</a> ';
$return = join( ', ', $out );

}
return $return;
}

// post title
function news_title()
{
$content =  get_the_title();
$lenght= strlen($content);
if($lenght > 20)
{
	
	$content = substr($content,0,20).'...';
}
else
{
	$content;
}

return $content;
                                                                                	
}

// post title
function neuro_news_excerpt()
{
$content =   get_the_excerpt();
$lenght= strlen($content);
if($lenght > 150)
{
	
	$content = substr($content,0,150).'...';
}
else
{
	$content;
}

return $content;
                                                                                	
}

?>