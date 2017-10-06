<?php
/*
Template Name: sort_ASC
*/

global $post;

$name = $_REQUEST['filters'];


$args = array('category_name' => $name );
$posts = get_posts($args); 

foreach ($posts as $post){ 
	setup_postdata($post);

	$key1 = get_post_meta($post->ID, 'square', true);
	$key1 .= "м<sup>2</sup>";
	$key2 = get_post_meta($post->ID, 'price', true);
	$key2 .= "грн.";

	print "<div class='col-lg-4 anons-product'>";
	print "<a href='";
	print the_permalink();
	print "'>";
	print the_post_thumbnail();
	print "<h3>";
	print the_title();
 	print "</h3></a>";
 	print "<span class='square-val'>Площа охолодження до ".$key1."</span>";
 	print "<br><br><span class='price-val'>".$key2."</span>";
 	print "<a href='";
	print the_permalink();
	print "'>";
    print "<input type='button' value='КУПИТИ' style='float:right;' />";
 	print '</a></div>';
}
