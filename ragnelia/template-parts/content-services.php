<?php
/**
 * Template part for portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ragnelia
 */

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

<div id="portfoliosPage">
	<div class="content">
		<div class="portfolioBox">
			<div class="imagesBox">
				<div class="mainImage"><img src="<?php echo get_field('image_s',$obj->ID); ?>"></div>
				<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php echo get_field('image1',$obj->ID); ?>"></div>
				<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php echo get_field('image2',$obj->ID); ?>"></div>
				<div class="image"><div class="shadow">СМОТРЕТЬ</div><img src="<?php echo get_field('image3',$obj->ID); ?>"></div>
			</div>
			<div class="text">
				<div class="name"><?php echo get_field('title_s',$obj->ID); ?></div>
				<div class="desc">
            <?php the_post(); ?>
      			<?php the_content(); ?>
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
        							<div class="type_r unit active" name="test">Объемные буквы</div>
        							<div class="type_r unit active" name="test2">Композитные вывески</div>
        							<div class="type_r unit active" name="test">Объемные буквы</div>
        							<div class="type_r unit active" name="test2">Композитные вывески</div>
        						</div>
        					</div>
        					<div class="input noArrow">
        						<input type="text" name="adres" placeholder="Адрес размещения">
        					</div>
        					<div class="input">
        						<div id="type_1" class="units">
        							<div class="type_1 unit select">Параметр №1</div>
        							<div class="type_1 unit active" name="test">Объемные буквы</div>
        							<div class="type_1 unit active" name="test2">Композитные вывески</div>
        						</div>
        					</div>
        					<div class="input">
        						<div id="type_2" class="units">
        							<div class="type_2 unit select">Параметр №2</div>
        							<div class="type_2 unit active" name="test">Объемные буквы</div>
        							<div class="type_2 unit active" name="test2">Композитные вывески</div>
        						</div>
        					</div>
        				</div>
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
        		<input id="pole-type_r" type="hidden" name="type_r" value="">
        		<input id="pole-type_1" type="hidden" name="type_1" value="">
        		<input id="pole-type_2" type="hidden" name="type_2" value="">
        		<input id="pole-price" type="hidden" name="price" value="">
        	</form>
        </div>
			</div>
		</div>
		<div class="h2">Другие услуги</div>
		<div class="allPortBox">
			<div class="arrow left"></div>
				<div move='0' class="allPort">
          <?php
    				foreach ($news as $obj) {
    					if($obj->post_name == 'archive'){
    							continue;
    					}
    			 ?>
           <a href="<?php echo $obj->post_name; ?>">
     				<div class="unit">
     					<div class="name"><?php echo $obj->post_title; ?></div>
     					<img src="<?php echo get_field('image',$obj->ID); ?>" >
     				</div>
     			</a>
     			<?php
     				}
     			 ?>
				</div>
			<div class="arrow right">
		</div>
	</div>
</div>
</div>
