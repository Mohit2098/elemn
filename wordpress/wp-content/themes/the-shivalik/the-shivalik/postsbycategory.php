<?php
/**
 /* template name:Posts by Category*/
 
 /* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Shivalik
 */

get_header();
?>
	<div id="container">
		<div id="content" role="main">

			<?php $cats=get_categories();
			foreach ($cats as $cat){

$cat_id= $cat->term_id;

echo "<h2>".$cat->name."- cat_id</h2>";
query_posts("cat=$cat_id&post_per_page=100");
	if(have_posts()): while (have_posts()): the_post();?>	
		<a href="<?php the_permalink();?>"><?php the_title();?></a>
		
		<?php echo 	'<hr/>';?>
	<?php  endwhile;endif;?>


<?php }?>
</div>
</div>

<?php
get_sidebar();
get_footer();
