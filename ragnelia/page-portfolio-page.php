<?php
/**
 * Template Name: Портфолио
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ragnelia
 */

get_header();

$news = get_posts(
		array(
				'numberposts' => -1,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'portfolio',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);?>

<div id="portfoliosPage">
	<div class="content">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
		<div class="title">Наше портфолио</div>
		<div class="portBox">
			<?php
				foreach ($news as $obj) {
					if($obj->post_name == 'archive'){
							continue;
					}
			 ?>
			<a href="<?php echo $obj->post_name; ?>">
				<div class="unit">
					<div class="name"><?php echo $obj->post_title; ?></div>
					<img src="<?php echo get_field('image',$obj->ID); ?>" >
				</div>
			</a>
			<?php
				}
			 ?>
		</div>

</div>


<?php
get_footer();
