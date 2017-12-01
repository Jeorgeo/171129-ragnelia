<?php
/**
 * Template Name: Прайс
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

<div id="price">
	<div class="content">
		<div class="title">Услуги и цены</div>
		<?if(($_GET['page'] == 'price') && ($_GET['id'] == false)):?>
		<div class="pricesBox">
			<a href="/price/1"><div class="unit">
				<div class="text">
					<div class="title"><span>Объемные буквы</span></div>
					<div class="desc">
						<div class="property">Цена - от 49р/см</div>
						<div class="property">Изготовление - от 2-х дней</div>
						<div class="property">Монтаж - 1 день</div>
						<div class="property">Согласование - бесплатно</div>
					</div>
				</div>
				<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/1.jpg"></div>
			</div></a>
			<a href="/price/2"><div class="unit">
				<div class="text">
					<div class="title"><span>Объемные буквы</span></div>
					<div class="desc">
						<div class="property">Цена - от 49р/см</div>
						<div class="property">Изготовление - от 2-х дней</div>
						<div class="property">Монтаж - 1 день</div>
						<div class="property">Согласование - бесплатно</div>
					</div>
				</div>
				<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/2.jpg"></div>
			</div></a>
			<a href="/price/3"><div class="unit">
				<div class="text">
					<div class="title"><span>Панель-кронштейны</span></div>
					<div class="desc">
						<div class="property">Цена - от 49р/см</div>
						<div class="property">Изготовление - от 2-х дней</div>
						<div class="property">Монтаж - 1 день</div>
						<div class="property">Согласование - бесплатно</div>
					</div>
				</div>
				<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/3.jpg"></div>
			</div></a>
			<a href="/price/4"><div class="unit">
				<div class="text">
					<div class="title"><span>Композитные вывески</span></div>
					<div class="desc">
						<div class="property">Цена - от 49р/см</div>
						<div class="property">Изготовление - от 2-х дней</div>
						<div class="property">Монтаж - 1 день</div>
						<div class="property">Согласование - бесплатно</div>
					</div>
				</div>
				<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/4.jpg"></div>
			</div></a>
			<a href="/price/5"><div class="unit">
				<div class="text">
					<div class="title"><span>Визитки</span></div>
					<div class="desc">
						<div class="property">Цена - от 49р/см</div>
						<div class="property">Изготовление - от 2-х дней</div>
						<div class="property">Монтаж - 1 день</div>
						<div class="property">Согласование - бесплатно</div>
					</div>
				</div>
				<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/5.jpg"></div>
			</div></a>
		</div>
		<?else:?>
			<div class="priceBox">
				<div class="imagesBox">
					<div class="mainImage"><img src="<?php bloginfo('template_url'); ?>//images/portfolio/1.jpg"></div>
					<div class="panel">
						<div class="arrow left"></div>
						<div move='0' class="imageBox">
							<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>//images/portfolio/1.jpg"></div>
							<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>//images/portfolio/2.jpg"></div>
							<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>//images/portfolio/3.jpg"></div>
							<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>//images/portfolio/1.jpg"></div>
							<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>//images/portfolio/3.jpg"></div>
							<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php bloginfo('template_url'); ?>//images/portfolio/1.jpg"></div>
						</div>
						<div class="arrow right"></div>
					</div>
				</div>
				<div class="text">
					<div class="name">MilaVista</div>
					<div class="desc">
						Световая вывеска представляет собой композит, на передняя панель
						крепется световые буквы, изготовлена из акрилового стекла и пвх,
						поликарбоната. Композитные вывески  могут быть выполнены из
						пластика или алюминиея. Вывеска должна содержать название
						компании и/или  бренд торговой компании.<br>
						Прочую информацию о часах работы, детализацию видов деятельности
						и прочее лучше указать на вывеске - табличке "Режим работы".<br><br>
						Композитные вывески представляют собой имиджевый
						рекламный носитель, на котором обычно изображается
						основная информация - название магазина, логотип.<br>
						Наружная световая вывеска работает на благо Вашей компании и днем,
						и в темное время суток, привлекая внимание новых клиентов.
					</div>
					<div class="calc">
						<div class="title">Расчитайте стоимость услуги</div>
						<div class="calcBlock">
							<input class="adres" placeholder="Адрес размещения" type="text" name="adres">
							<div class="input">
								<div class="units">
									<div class="unit select">Параметр №1</div>
									<div class="unit active" name="test">Объемные буквы</div>
									<div class="unit active" name="test2">Композитные вывески</div>
								</div>
							</div>
							<div class="input">
								<div class="units">
									<div class="unit select">Параметр №2</div>
									<div class="unit active" name="test">Объемные буквы</div>
									<div class="unit active" name="test2">Композитные вывески</div>
								</div>
							</div>
						</div>
						<div class="itog">
							Ориентировочная стоимость: <span class="count">1000р.</span>
						</div>
						<div class="h3">Для более точного расчета цены и сроков - оставьте заявку</div>
						<div class="boxInputs">
							<input type="text" class="phone" name="phone" placeholder="Контактный телефон*"><div class="button submit"><span class="text">Отправить заявку</span></div>
						</div>
						<div class="dopText">Нажимая кнопку, вы соглашаетесь на<br><span class="persOpen">обработку персональных данных.</span></div>
					</div>
				</div>
			</div>
			<div class="h2">Другие проекты</div>
			<div class="allPriceBox">
				<div class="arrow left"></div>
				<div move='0' class="allPrice">
					<a href="/price/5"><div class="unit">
						<div class="text">
							<div class="title"><span>Панель-кронштейны</span></div>
							<div class="desc">
								<div class="property">Цена - от 49р/см</div>
								<div class="property">Изготовление - от 2-х дней</div>
								<div class="property">Монтаж - 1 день</div>
								<div class="property">Согласование - бесплатно</div>
							</div>
						</div>
						<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/5.jpg"></div>
					</div></a>
					<a href="/price/5"><div class="unit">
						<div class="text">
							<div class="title"><span>Визитки</span></div>
							<div class="desc">
								<div class="property">Цена - от 49р/см</div>
								<div class="property">Изготовление - от 2-х дней</div>
								<div class="property">Монтаж - 1 день</div>
								<div class="property">Согласование - бесплатно</div>
							</div>
						</div>
						<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/5.jpg"></div>
					</div></a>
					<a href="/price/5"><div class="unit">
						<div class="text">
							<div class="title"><span>Визитки</span></div>
							<div class="desc">
								<div class="property">Цена - от 49р/см</div>
								<div class="property">Изготовление - от 2-х дней</div>
								<div class="property">Монтаж - 1 день</div>
								<div class="property">Согласование - бесплатно</div>
							</div>
						</div>
						<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/5.jpg"></div>
					</div></a>
					<a href="/price/5"><div class="unit">
						<div class="text">
							<div class="title"><span>Визитки</span></div>
							<div class="desc">
								<div class="property">Цена - от 49р/см</div>
								<div class="property">Изготовление - от 2-х дней</div>
								<div class="property">Монтаж - 1 день</div>
								<div class="property">Согласование - бесплатно</div>
							</div>
						</div>
						<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/5.jpg"></div>
					</div></a>
					<a href="/price/5"><div class="unit">
						<div class="text">
							<div class="title"><span>Визитки</span></div>
							<div class="desc">
								<div class="property">Цена - от 49р/см</div>
								<div class="property">Изготовление - от 2-х дней</div>
								<div class="property">Монтаж - 1 день</div>
								<div class="property">Согласование - бесплатно</div>
							</div>
						</div>
						<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/5.jpg"></div>
					</div></a>
					<a href="/price/5"><div class="unit">
						<div class="text">
							<div class="title"><span>Визитки</span></div>
							<div class="desc">
								<div class="property">Цена - от 49р/см</div>
								<div class="property">Изготовление - от 2-х дней</div>
								<div class="property">Монтаж - 1 день</div>
								<div class="property">Согласование - бесплатно</div>
							</div>
						</div>
						<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/5.jpg"></div>
					</div></a>
					<a href="/price/5"><div class="unit">
						<div class="text">
							<div class="title"><span>Визитки</span></div>
							<div class="desc">
								<div class="property">Цена - от 49р/см</div>
								<div class="property">Изготовление - от 2-х дней</div>
								<div class="property">Монтаж - 1 день</div>
								<div class="property">Согласование - бесплатно</div>
							</div>
						</div>
						<div class="img"><img src="<?php bloginfo('template_url'); ?>//images/price/5.jpg"></div>
					</div></a>
				</div>
				<div class="arrow right">
			</div>
		<?endif;?>
	</div>
</div>

<?php
get_footer();
