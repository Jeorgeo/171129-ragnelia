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
        <!--Modal windows-->
        <div class="modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        		<div class="modal-dialog" role="document">
        			<div class="modal-content">

        				<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">[Х]</span></button>
        					<h4 class="modal-title" id="myModalLabel">Быстрое оформление заявки</h4>
        				</div>
                    <form class="form-horizontal" id="form_order" method="post" enctype="multipart/form-data">
        				<div class="modal-body" id="modal">
        				<h4>Обязательные пункты</h4>
        				<div class="form-group">
        					<label for="inputEmail3" class="col-sm-2 control-label">Ваше имя</label>
        					<div class="col-sm-10">
        						<input name="name" class="form-control" id="name-inp" placeholder="Ваше имя" type="text">
        					</div>
                   </div>
                <div class="form-group">
                     <label for="phone-inp" class="col-sm-2 control-label">Телефон</label>
                     <div class="col-sm-10">
                    <input name="phone" class="form-control" id="phone-inp" placeholder="Ваш телефон" type="text">
                  </div>
                 </div>
                <h4>Необязательные пункты</h4>
                <div class="form-group">
                     <label for="mail-inp" class="col-sm-2 control-label">E-mail</label>
                     <div class="col-sm-10">
                    <input name="mail" class="form-control" id="mail-inp" placeholder="Мы не рассылаем спам" type="text">
                  </div>
                   </div>
                <div class="form-group">
                     <label for="file-inp" class="col-sm-2 control-label">Фаил</label>
                     <div class="col-sm-10">
                    <input name="userfile" class="form-control" id="file-inp" placeholder="Мы не рассылаем спам" value="" type="file">
                    <p class="help-block">.jpg, .png, .psd, .pdf, .tif, .ai, .cdr</p>
                  </div>
                   </div>


                   <div class="form-group">
                     <label for="order-inp" class="col-sm-2 control-label">Сообщение</label>
                     <div class="col-sm-10">
                     	<textarea id="text_order" class="form-control" name="order" rows="5">Изделие: Объемные буквы
        Текст:
        Высота букв, см: 1
        Шрифт: Arial
        Цвет лица: rgb(255, 255, 0)
        Цвет борта: rgb(255, 0, 0)
        Блок питания: Не нужен
        Контражур: Не нужен
        Подложка: Не нужна
        Монтаж: Не нужен
        Стоимость: 60 руб.</textarea>
                       <p class="help-block">Комментарий, просьба, пожелание, адрес и т.п.</p>
                  </div>
                   </div>


              </div>
              <div class="modal-footer" id="modalF">
                <button type="submit" id="submit_order" class="btn btn-primary button"><span class="text">Отправить заявку</span></button>
              </div>
              </form>
               </div>
          </div>

           </div>

        <!--End of Modal windows-->

        <!--calculator-->
        <?php echo get_field( 'calc_code' ); ?>
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
     					<img src="<?php echo get_field('image_s',$obj->ID); ?>" >
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

<!--<script src="<?php bloginfo('template_url'); ?>/js/libs.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jqColorPicker.js"></script>!-->
