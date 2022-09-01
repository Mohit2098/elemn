<?php
// Template Name: Land 




get_header(); 


// get the current taxonomy term
$term = get_queried_object();

echo get_field('external_url'.$term);


// vars

?>

