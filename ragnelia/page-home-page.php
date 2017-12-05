<?php
/**
 * Template Name: Главная
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
				'numberposts' => 100,
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
);
$news_p = get_posts(
		array(
				'numberposts' => 100,
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
);
$news_r = get_posts(
		array(
				'numberposts' => 100,
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


<div id="mainBanner">
	<div class="content">
		<div class="title">Изготовление наружной рекламы<br>в Москве и Области от 49р/см</div>
		<div class="panelButton">
			<div class="text">Проект, изготовление, согласование и монтаж наружной<br>рекламы за 5 дней в Москве и Московской области по цене от 49р/см</div>
			<div class="button callback cloud-link"><span class="text">Заказать звонок</span></div>
		</div>
		<div class="arrowBlock">
			<div class="arrow">
				<div class="a1"></div>
				<div class="a2"></div>
				<div class="a3"></div>
			</div>
		</div>
	</div>
</div>
<div id="about">
	<div class="content">
		<div class="leftBlock">
			<div class="title">Чем занимается наша компания?</div>
			<div class="text">Мы - рекламно-производственная компания полного цикла</div>
		</div>
		<div class="rightBlock">
			<?php
				foreach ($news as $obj) {
					if($obj->post_name == 'archive') {
							continue;
					}
			 ?>
			 <a href="<?php echo $obj->post_name; ?>" target="_blank">
 				<div class="unit">
 					<div class="textBlock">
 						<div class="title"><span><?php echo $obj->post_title; ?></span></div>
 							<div class="property"><?php echo get_field('price',$obj->ID); ?></div>
 							<div class="property"><?php echo get_field('making',$obj->ID); ?></div>
 							<div class="property"><?php echo get_field('installation',$obj->ID); ?></div>
 							<div class="property"><?php echo get_field('agreement',$obj->ID); ?></div>
 					</div>
 					<div class="img"><img src="<?php echo get_field('image',$obj->ID); ?>"></div>
 				</div></a>
 			<?php
 				}
 			 ?>

		</div>
	</div>
</div>
<div id="calc">
	<form class="calc-form" method="post">
		<div class="content">
			<div class="title">Расчитайте стоимость рекламы за 2 минуты!</div>
			<div class="h2">заполните поля и узнайте стоимость</div>
			<div class="calcBlock">
				<div class="inputs">
					<div class="input">
						<div id="type_r" class="units">
							<div class="type_r unit select">Тип рекламы</div>
							<div class="type_r unit active" name="test">Буквы:</div>
							<div class="type_r unit active" name="test">Световые лайтбоксы:</div>
							<div class="type_r unit active" name="test">Визитки, полиграфия:</div>
							<div class="type_r unit active" name="test">Штендеры:</div>
							<div class="type_r unit active" name="test">Информационные панели:</div>
							<div class="type_r unit active" name="test">Интерьерная печать:</div>
							<div class="type_r unit active" name="test">Сайты:</div>
							<div class="type_r unit active" name="test">Световые панель-кронштейны:</div>
							<div class="type_r unit active" name="test">Панель-кронштейны:</div>

						</div>
					</div>
					<div class="input noArrow">
						<input type="text" name="adres" placeholder="Адрес размещения">
					</div>
					<div class="input">
						<div id="type_1" class="units">
							<div class="type_1 unit select">Параметр №1</div>
							<div class="type_1 unit active" name="test">ВЫСОТА(см)</div>
							<div class="type_1 unit active" name="test">объем(м3)</div>
							<div class="type_1 unit active" name="test">ТИРАЖ (количество)</div>
							<div class="type_1 unit active" name="test">РАЗМЕР</div>
							<div class="type_1 unit active" name="test">РАЗМЕР(квадратный метр)</div>
							<div class="type_1 unit active" name="test">РАЗМЕР(квадратный метр)</div>
							<div class="type_1 unit active" name="test">ТИП САЙТА</div>
							<div class="type_1 unit active" name="test">РАЗМЕР (квадратный метр)</div>
							<div class="type_1 unit active" name="test">РАЗМЕР (квадратный метр)</div>
						</div>
					</div>
					<div class="input">
						<div id="type_2" class="units">
							<div class="price-block block_active">
								<div class="type_2 unit select">Параметр №2</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">5</div>
								<div class="type_2 unit active" name="test2">10</div>
								<div class="type_2 unit active" name="test2">15</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">5</div>
								<div class="type_2 unit active" name="test2">10</div>
								<div class="type_2 unit active" name="test2">15</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">10</div>
								<div class="type_2 unit active" name="test2">20</div>
								<div class="type_2 unit active" name="test2">30</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">малый</div>
								<div class="type_2 unit active" name="test2">средний</div>
								<div class="type_2 unit active" name="test2">большой</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">5</div>
								<div class="type_2 unit active" name="test2">10</div>
								<div class="type_2 unit active" name="test2">15</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">5</div>
								<div class="type_2 unit active" name="test2">10</div>
								<div class="type_2 unit active" name="test2">15</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">Landing-page</div>
								<div class="type_2 unit active" name="test2">Корпоративный</div>
								<div class="type_2 unit active" name="test2">Магазин</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">5</div>
								<div class="type_2 unit active" name="test2">10</div>
								<div class="type_2 unit active" name="test2">15</div>
							</div>
							<div class="price-block">
								<div class="type_2 unit select">Параметр №2</div>
								<div class="type_2 unit active" name="test">5</div>
								<div class="type_2 unit active" name="test2">10</div>
								<div class="type_2 unit active" name="test2">15</div>
							</div>

						</div>
					</div>
				</div>
				<div id="calc-result" class="price-block" method="post">
					<div class="itog">
						Ориентировочная стоимость: <span id="form-price" class="count">1000р.</span>
					</div>
					<div class="h3">Для более точного расчета цены и сроков - оставьте заявку</div>
					<div class="boxInputs">
						<input type="text" class="phone" name="phone" placeholder="Контактный телефон*"><div class="button submit"><span class="text">Отправить заявку</span></div>
					</div>
					<div class="dopText">Нажимая кнопку, вы соглашаетесь на<br><span class="persOpen">обработку персональных данных.</span></div>
				</div>
			</div>
		</div>
		<input id="pole-type_r" type="hidden" name="type_r" value="">
		<input id="pole-type_1" type="hidden" name="type_1" value="">
		<input id="pole-type_2" type="hidden" name="type_2" value="">
		<input id="pole-price" type="hidden" name="price" value="">
	</form>
</div>
<div id="clients">
	<div class="line1"></div>
	<div class="line2"></div>
	<div class="line3"></div>
	<div class="contentBlock">
		<div class="content">
			<div class="leftBlock">
				<div class="title">Наши клиенты</div>
				<div class="text">
					Компания Рагнелия с 2014 года оказывает услуги<br>комплексного рекламного агенства.<br><br>
					За 3 года работы мы реализовали:<br>
					<span class="cont">более 3000 наружный вывесок</span>
					<span class="cont">более 1000 уникальных дизайнов</span>
					<span class="cont">более 1800 клиентов</span>
				</div>
				<div class="partner">
					<img src="<?php bloginfo('template_url'); ?>/images/partner.jpg">
				</div>
			</div>
			<div class="rightBlock">
				<div class="unit">
					СРОК выполнения<br>
					<span class="orange">от 2-ух дней</span>
				</div>
				<div class="unit">
					Техническая документация<br>
					<span class="orange">Бесплатно</span>
				</div>
				<div class="unit">
					МАКЕТ в день обращения<br>
					<span class="orange">Бесплатно</span>
				</div>
				<div class="unit">
					ВЫЕЗД замерщика<br>
					<span class="orange">Бесплатно</span>
				</div>
				<div class="unit">
					Монтаж<br>
					<span class="orange">от 2000 рублей</span>
				</div>
				<div class="unit">
					ГАРАНТИЯ<br>
					<span class="orange">2 года</span>
				</div>
			</div>
		</div>
	</div>
	<div class="line4"></div>
	<div class="line5"></div>
	<div class="line6"></div>
</div>
<div id="project">
	<div class="content">
		<div class="title">Выполненые проекты</div>
		<div class="sliderBox">
			<div class="contentBox">
				<?php
					foreach ($news_p as $obj) {
						if($obj->post_name == 'archive'){
								continue;
						}
				 ?>

					<div class="unit">
						<img src="<?php echo get_field('image',$obj->ID); ?>" >
						<div class="textBlock">
							<div class="name t">Название проекта: <span class="val"><?php echo get_field('title_p',$obj->ID); ?></span></div>
							<div class="adres t">Адрес проекта: <span class="val"><?php echo get_field('adress_p',$obj->ID); ?></span></div>
							<div class="des t">Описание проекта: <span class="val"><?php echo get_field('description_p',$obj->ID); ?></span></div>
						</div>
					</div>

				<?php
					}
				 ?>

			</div>
			<div class="doteds">
				<div class="unit active">
				</div>
				<div class="unit">
				</div>
				<div class="unit">
				</div>
			</div>
			<div class="button port cloud-link"><span class="text">Хочу также!</span></div>
		</div>
	</div>
</div>
<div id="opinion">
	<div class="content">
		<div class="title">Отзывы и благодарности наших клиентов</div>
		<div class="opinionBox">
			<?php
				foreach ($news_r as $obj) {
					if($obj->post_name == 'archive'){
							continue;
					}
			 ?>
			<div class="unit popupOpen">
				<div class="hoverBox">смотреть</div>
				<img src="<?php echo get_field('image',$obj->ID); ?>">
			</div>
			<?php
				}
			 ?>
		</div>
		<div class="button opinionGo"><span class="text">В раздел "Отзывы"</span></div>
	</div>
</div>

<?php
get_footer();
