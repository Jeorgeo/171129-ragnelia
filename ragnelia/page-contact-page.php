<?php
/**
 * Template Name: Контакты
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

get_header(); ?>

<div id="contact">
	<div class="content">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
		<div class="title">Контактная информация</div>
		<div class="mapsBox">
			<div class="maps">
				<?php echo get_field( 'map_c' ); ?>
			</div>
			<div class="text">
				<div class="unit">Время работы: <span class="val"><?php echo get_field( 'time_c' ); ?></span></div>
				<div class="unit">Телефон 1: <span class="val"><?php echo get_field( 'phone1_c' ); ?></span></div>
				<div class="unit">Телефон 2: <span class="val"><?php echo get_field( 'phone2_c' ); ?></span></div>
				<div class="unit">E-mail: <span class="val"><?php echo get_field( 'mail_c' ); ?></span></div>
				<div class="unit">Адрес: <span class="val"><?php echo get_field( 'adress_c' ); ?></span></div>
                <div class="soc">
                	<a href="<?php echo get_field( 'link_inst' ); ?>"><div class="unit inst"></div></a>
                	<a href="<?php echo get_field( 'link_vk' ); ?>"><div class="unit vk"></div></a>
                </div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
