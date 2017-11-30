<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Рагнелия</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/fonts.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<?
	switch ($_GET['page']) {
		case '': $page = 'page/main.php'; $mainMenu = 'active'; break;
		case 'main': $page = 'page/'.$_GET['page'].'.php'; $mainMenu = 'active'; break;
		case 'contact': $page = 'page/'.$_GET['page'].'.php'; $contactMenu = 'active'; break;
		case 'about': $page = 'page/'.$_GET['page'].'.php'; $aboutMenu = 'active'; break;
		case 'opinion': $page = 'page/'.$_GET['page'].'.php'; $opinionMenu = 'active'; break;
		case 'portfolio': $page = 'page/'.$_GET['page'].'.php'; $portfolioMenu = 'active'; break;
		case 'price': $page = 'page/'.$_GET['page'].'.php'; $priceMenu = 'active'; break;
		default: $page = 'page/404.php'; break;
	}
?>
<body>
<div id="menu">
	<div class="container">
		<div id="js-toggle" class="left-panel__menu-toggle">
			<button class="header-menu-toggle"><span>menu</span></button>
		</div>
		<a class="logo-link" href="/"><div class="logo"><object data="/css/img/logo-v1.png" height="62px" type="image/svg+xml"></object></div></a>
		<a class="phone-link" href="tel:+74952013021">+7 (495) 201-30-21</a>
		<div class="units left-panel">
			<a href="/" class="unit <?echo $mainMenu;?>"><span>Главная</span><div class="line"></div></a>
			<a href="/price" class="unit <?echo $priceMenu;?>"><span>Услуги и цены</span><div class="line"></div></a>
			<a href="/portfolio" class="unit <?echo $portfolioMenu;?>"><span>Портфолио</span><div class="line"></div></a>
			<a href="/opinion" class="unit <?echo $opinionMenu;?>"><span>Отзывы</span><div class="line"></div></a>
			<a href="/about" class="unit <?echo $aboutMenu;?>"><span>О нас</span><div class="line"></div></a>
			<a href="/contact" class="unit <?echo $contactMenu;?>"><span>Контакты</span><div class="line"></div></a>
			<div class="callback">
				<div class="phone"><a href="tel:+74952013021">+7 (495) 201-30-21</a></div>
				<div class="email">info@рагнелия.рф</div>
			</div>
		</div>
	</div>
</div>
<?
	include $page;
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
			<a href="/" class="unit <?echo $mainMenu;?>"><span>Главная</span><div class="line"></div></a>
			<a href="/price" class="unit <?echo $priceMenu;?>"><span>Услуги и цены</span><div class="line"></div></a>
			<a href="/portfolio" class="unit <?echo $portfolioMenu;?>"><span>Портфолио</span><div class="line"></div></a>
			<a href="/opinion" class="unit <?echo $opinionMenu;?>"><span>Отзывы</span><div class="line"></div></a>
			<a href="/about" class="unit <?echo $aboutMenu;?>"><span>О нас</span><div class="line"></div></a>
			<a href="/contact" class="unit <?echo $contactMenu;?>"><span>Контакты</span><div class="line"></div></a>
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
</body>
<script type="text/javascript" src="/js/menu.js"></script>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jqueryImage.min.js"></script>
<script type="text/javascript" src="/js/allScript.js"></script>
</html>
