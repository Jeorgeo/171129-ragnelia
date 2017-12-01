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
			<textarea class="text" placeholder="Задайте вопрос"></textarea>
			<input type="text" placeholder="Ваше имя" name="name">
			<input type="text" placeholder="Мобильный телефон" name="phone">
			<div class="button submit"><span class="text">отправить</span></div>
		</div>
	</div>
</div>
<div id="footer">
	<div class="content">
		<a href="/"><div class="logo"><object data="/css/img/logo-v1.png" height="62px" type="image/svg+xml"></object></div></a>
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
<div id="popup">
	<div class="content">
		<div class="close">x</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
