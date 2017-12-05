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

get_header(); ?>

<div id="portfoliosPage">
	<div class="content">
		<div class="title">Наше портфолио</div>
		<div class="portBox">
			<a href="/portfolio/1"><div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/1.jpg">
			</div></a>
			<div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/4.jpg">
			</div>
			<div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
			</div>
			<div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
			</div>
			<div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/1.jpg">
			</div>
			<div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/4.jpg">
			</div>
			<div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/1.jpg">
			</div>
			<div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/4.jpg">
			</div>
			<div class="unit">
				<div class="name">MILAVISTA</div>
				<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
			</div>
		</div>
			<div class="portfolioBox">
				<div class="imagesBox">
					<div class="mainImage"><img src="<?php bloginfo('template_url'); ?>/images/portfolio/1.jpg"></div>
					<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>/images/portfolio/1.jpg"></div>
					<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>/images/portfolio/2.jpg"></div>
					<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>/images/portfolio/3.jpg"></div>
				</div>
				<div class="text">
					<div class="name">MilaVista</div>
					<div class="desc">
						Уже почти 50 лет компания Милавица создает женское
						белье, являясь одним из крупнейших производителей
						корсетных изделий в Восточной Европе.
						Продукция компании успешно продается более чем
						в 25-ти странах мира и характеризуется высоким
						качеством, оригинальным дизайном и продуманными
						конструктивными решениями.
					</div>
					<div class="l">Была поставлена задача:
						<span class="val">
							- Привлечь 1000 клиентов
						</span>
					</div>
					<div class="l">Решение:
						<span class="val">
							 - Разработка уникальной вывески<br>
							 - Создание световой вывески<br>
							 - Установка вывески на входе магазина
						</span>
					</div>
				</div>
			</div>
			<div class="h2">Другие проекты</div>
			<div class="allPortBox">
				<div class="arrow left"></div>
				<div move='0' class="allPort">
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
					</div></a>
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
					</div></a>
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
					</div></a>
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
					</div></a>
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
					</div></a>
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
					</div></a>
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/6.jpg">
					</div></a>
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/2.jpg">
					</div></a>
					<a href="/portfolio/1/"><div class="unit">
						<div class="name">MILAVISTA</div>
						<img src="<?php bloginfo('template_url'); ?>/images/portfolio/1.jpg">
					</div></a>
				</div>
				<div class="arrow right">
			</div>
	</div>
</div>
</div>


<?php
get_footer();
