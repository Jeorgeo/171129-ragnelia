<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ragnelia
 */

?>

<div id="callBackBlock">
	<div class="content">
		<div class="title">Остались вопросы? Хотите сделать заказ?</div>
		<div class="h2">звоните нам в офис: +7 (495) 201-30-21<br>или<br>заполните поля и мы свяжемся с Вами в течении 5 минут</div>
		<div class="formBlock">
			<form class="quest" method="post">
				<textarea class="text" placeholder="Задайте вопрос"></textarea>
				<input type="text" placeholder="Ваше имя" name="name">
				<input type="text" placeholder="Мобильный телефон" name="phone">
				<button class="button submit" type="submit" name="submit"><span class="text">отправить</span></button>
			</form>

		</div>
	</div>
</div>
<div id="footer">
	<div class="content">
		<div class="logo"><?php the_custom_logo(); ?></div>
		<div class="units">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			<div class="callback">
				<div class="phone"><a href="tel:+74952013021">+7 (495) 201-30-21</a></div>
				<div class="email">info@рагнелия.рф</div>
			</div>
		</div>
	</div>
</div>

<!-- popup form -->

<div class="wrap"></div>
<div id="popup">
	<div class="content">
		<div class="close">x</div>
	</div>
</div>

<div id="window" class="popup-question">
	<div class="popup-question-close">
		close
	</div>
	<div class="details-form">
		<form id="js_form" method="post" class="cloud-form reviews-form">
			<!-- Hidden Required Fields -->
			<input type="hidden" name="project_name" value="Dinelli.ru">
			<?php dynamic_sidebar( 'admin_mail' ); ?>
			<input type="hidden" name="form_subject" value="Отзыв с сайта">
			<!-- END Hidden Required Fields -->

			<input id="phone" class="cloud-form__phone" type="text" name="phone"
			value="" placeholder="+7(___) ___-__-__" required
			pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$">
			<input id="mail"  class="cloud-form__mail" type="text" name="mail"
			value="" placeholder="iNfo@mail.ru" required
			pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
			<label  class="cloud-form__message" for="message">Ваше сообщение</label>
			<textarea id="message" class="cloud-form__message" name="message"
			rows="2" cols="80" placeholder=""></textarea>
			<button id="submit" class="button cloud-form__submit" type="submit" name="submit">
				<span class="text">Отправить</span>
			</button>
			<input id="сonsent-r" class="cloud-form__сonsent" type="checkbox" name="сonsent" value="" required>
			<label class="cloud-form__сonsent" for="сonsent-r">
				Согласие на обработку персональных данных
			</label>
		</form>
	</div>
</div>
<div id="window" class="popup-question-s ">
	<div class="popup-question-close">
		close
	</div>
	<div class="details-form">
		<p>
			Спасибо!
		</p>
		</form>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
