<?php
/**
 * Template Name: Отзывы
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
				'post_type' => 'reviews',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);?>

<div id="opinionPage">
	<div class="content">
		<div class="title">Отзывы и благодарности от наших кдиентов</div>
		<div class="opinionBox">
			<?php
				foreach ($news as $obj) {
					if($obj->post_name == 'archive'){
							continue;
					}
			 ?>
			<div class="unit">
				<div class="img"><img src="<?php echo get_field('image',$obj->ID); ?>"></div>
				<div class="text">
					<div class="let">Отзыв:
						<span class="val o">
							<?php echo get_field('company_review',$obj->ID); ?>
						</span>
					</div>
					<div class="let">Компания:
						<span class="val">
							<?php echo get_field('company_name',$obj->ID); ?>
						</span>
					</div>
					<div class="let">Адрес:
						<span class="val">
							<?php echo get_field('company_adress',$obj->ID); ?>
						</span>
					</div>
					<div class="let">Что было сделано:
						<span class="val">
							<?php echo get_field('company_result',$obj->ID); ?>
						</span>
					</div>
				</div>
				<div class="button want cloud-link"><span class="text">Хочу так же!</span></div>
			</div>
			<?php
				}
			 ?>
		</div>
	</div>
</div>

<?php
get_footer();
