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
		<div class="title">Контактная информация</div>
		<div class="mapsBox">
			<div class="maps">
				<?php echo get_field( 'map_c' ); ?>
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A584e629f5973adf5b786de75afeeabc1c51c8b03eac17cfb6c429042d88ae75a&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
			<div class="text">
				<div class="unit">Время работы: <span class="val"><?php echo get_field( 'time_c' ); ?>с 9:00 до 20:00 (Пн-Пт)</span></div>
				<div class="unit">Телефон 1: <span class="val"><?php echo get_field( 'phone1_c' ); ?>+7 (903) 684-24-00</span></div>
				<div class="unit">Телефон 2: <span class="val"><?php echo get_field( 'phone2_c' ); ?>+7 (495) 201-30-21</span></div>
				<div class="unit">E-mail: <span class="val"><?php echo get_field( 'mail_c' ); ?>info@рагнелия.рф</span></div>
				<div class="unit">Адрес: <span class="val"><?php echo get_field( 'adress_c' ); ?>Москва, Нижняя Красносельская улица,
                   40/12к20 Офис 917</span></div>
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
