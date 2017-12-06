<?php
/**
 * Template Name: Услуги и цены
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
				'post_type' => 'services',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);?>

<div id="price">
	<div class="content">
		<div class="title">Услуги и цены</div>
		<div class="pricesBox">
			<?php
				foreach ($news as $obj) {
					if($obj->post_name == 'archive'){
							continue;
					}
			 ?>
			<a href="<?php echo $obj->post_name; ?>" target="_blank">
				<div class="unit">
					<div class="text">
						<div class="title"><span><?php echo $obj->post_title; ?></span></div>
						<div class="desc">
							<div class="property"><?php echo get_field('price',$obj->ID); ?></div>
							<div class="property"><?php echo get_field('making',$obj->ID); ?></div>
							<div class="property"><?php echo get_field('installation',$obj->ID); ?></div>
							<div class="property"><?php echo get_field('agreement',$obj->ID); ?></div>
						</div>
					</div>
					<div class="img"><img src="<?php echo get_field('image_s',$obj->ID); ?>"></div>
				</div></a>
			<?php
				}
			 ?>
		</div>

</div>

<?php
get_footer();
