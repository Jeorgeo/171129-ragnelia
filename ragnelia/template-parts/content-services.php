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
				<div class="mainImage"><img src="<?php echo get_field('image',$obj->ID); ?>"></div>
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
        <div id="calc-contener">
        	<h3>
        		<span class="hidden-xs">Калькулятор</span>
        		<span id="advice">расчет вывески из объемных световых букв</span>
        	</h3>
        	<div id="calc-form" style="background-image: none;">
        		<div class="row">
        			<div class="col-md-6 col-xs-6">
        				<div class="cont" style="display: block;"> Изделие:<!--0-->
        					<select id="offer">
        						<option value="8" data-price="60-2000-8000-5000-100" selected="selected">Объемные буквы</option>
        						<option value="0" data-price="299-500-60-40-40">Баннер</option>
        						<option value="4" data-price="1160-1500-500-500">На холсте</option>
        						<option value="5" data-price="850">Перфо-пленка</option>
        						<option value="6" data-price="500-750-450-700-250">Плакат-Афиша</option>
        						<option value="7" data-price="500-750-450-700-250">Самоклейка</option>
        					</select>
        				</div>
        				<div class="cont" style="display: none;"> Бумага:<!--1-->
        					<select id="papir">
        						<option value="0" selected="selected">Глянцевая</option>
        						<option value="1">Матовая</option>
        					</select>
        				</div>
        				<div class="row">
        					<div class="col-xs-6">
        						<div class="cont" style="display: none;"> Ширина, м:<!--2-->
        							<input id="width" value="1" type="text">
        						</div>
        					</div>
        					<div class="col-xs-6">
        						<div class="cont" style="display: none;"> Высота, м:<!--3-->
        							<input id="hight" value="1" type="text">
        						</div>
        					</div>
        				</div>
        				<div class="row">
        					<div class="col-xs-12">
        						<div class="cont" style="display: block;"><!--4-->
        							<textarea id="lett" placeholder="Слово или фраза"></textarea>
        						</div>
        					</div>
        				</div>
        				<div class="row">
        					<div class="col-xs-12">
        						<div class="cont" style="display: block;"> Высота букв, см:<!--5-->
        							<input id="lett_h" value="1" type="text">
        						</div>
        					</div>
        				</div>
        				<div class="cont" style="display: block;"> Шрифт:<!--6-->
        					<select id="font">
        						<option value="0" selected="selected">Arial</option>
        						<option value="1">ApercuPro</option>
        						<option value="2">Arvo</option>
        						<option value="3">Century Gothic</option>
        						<option value="4">Circe Extra</option>
        					 <!--option value="5">5</option>
        					 <option value="6">6</option-->
        						<option value="7">HelveticaNeue Black</option>
        						<option value="8">HelveticaNeue Bold</option>
        						<option value="9">Marta</option>
        						<!--option value="10">10</option-->
        						<option value="11">MyriadPro</option>
        						<option value="12">MyriadPro Condensed</option>
        						<option value="13">OfficinaSerif</option>
        						<!--option value="14">14</option-->
        					 </select>
        					 <div id="coef1">Или любой другой шрифт</div>
        					</div>
        					<div class="cont" style="display: none;"> Размер, мм:<!--7-->
        						<select id="size">
        							<option value="0" selected="selected">А3 (297x420)</option>
        							<option value="1">А4 (210x297)</option>
        							<option value="2">А5 (148x210)</option>
        							<option value="3">А6 (105x148)</option>
        							<option value="4">210x200</option>
        							<option value="5">210x98</option>
        						</select>
        					</div>
        					<div class="cont" style="display: none;"> Цветность:<!--8-->
        						<select id="cvet">
        							<option value="0" selected="selected">4+4 (двусторонняя)</option>
        							<option value="1">4+0 (односторонняя)</option>
        						</select>
        					</div>
        					<div class="cont" style="display: none;"> Разрешение, DPI:<!--9-->
        						<select id="pdi">
        							<option value="0" selected="selected">360</option>
        							<option value="1">720</option>
        							<option value="2">1440</option>
        						</select>
        					</div>
        					<div class="cont" style="display: none;"> Количество, шт:<!--10-->
        						<input id="col1" value="1" type="text">
        					</div>
        					<div class="cont" style="display: none;"> Количество, шт:<!--11-->
        						<select name="" id="col2">
        							<option value="0" selected="selected">100</option>
        							<option value="1">200</option>
        							<option value="2">500</option>
        							<option value="3">1000</option>
        							<option value="4">2000</option>
        							<option value="5">3000</option>
        							<option value="6">4000</option>
        							<option value="7">5000</option>
        							<option value="8">6000</option>
        							<option value="9">8000</option>
        							<option value="10">10000</option>
        							<option value="11">20000</option>
        						</select>
        					</div>
        				</div>
        				<div class="col-md-6 col-xs-6">
        					<div class="cont" style="display: none;"><!--12-->
        						<input id="lamir" type="checkbox">
        						<label for="lamir">Ламинирование</label>
        					</div>
        					<div class="cont" style="display: none;"> Люверсы:<!--13-->
        						<select id="luvers">
        							<option value="0" selected="selected">-</option>
        							<option value="1">Шаг 30 см</option>
        							<option value="2">Шаг 50 см</option>
        						</select>
        					</div>
        					<div class="cont" style="display: none;"><!--14-->
        						<input id="podram" type="checkbox">
        						<label for="podram">Подрамник</label>
        					</div>
        					<div class="cont" style="display: none;"><!--15-->
        						<input id="gall" type="checkbox">
        						<label for="gall">Галерейная натяжка</label>
        					</div>
        					<div class="cont" style="display: none;"><!--16-->
        						<input id="power" type="checkbox">
        						<label for="power">Усиление края</label>
        					</div>
        					<div class="cont" style="display: none;"><!--17-->
        						<input id="krug" type="checkbox">
        						<label for="krug">Скругление</label>
        					</div>
        					<div class="cont" style="display: none;"> Фальц:<!--18-->
        						<select id="falc">
        							<option value="0" selected="selected">Без фальца</option>
        							<option value="1">1 фальц (+1 день)</option>
        							<option value="2">1 фальц (день в день)</option>
        							<option value="3">2 фальц (+1 день)</option>
        							<option value="4">2 фальц (день в день)</option>
        						</select>
        					</div>
        					<div class="cont" style="display: block;"><!--19-->
        						<div>ВЫБРАТЬ ЦВЕТ:</div>
        						<div id="proba">
        							<div style="margin-top: 3px;">
        								<span>Лицо буквы</span>
        								<span class="trg" id="litco" value="rgb(224, 139, 68)" style="margin-left: 10px; background-color: rgb(255, 255, 0); color: rgb(34, 34, 34);">&nbsp;</span>
        							</div>
        							<div style="margin-top: 3px;">
        								<span>Борт буквы</span>
        								<span class="trg" id="bort" value="rgb(224, 182, 68)" style="margin-left: 11px; background-color: rgb(255, 0, 0); color: rgb(221, 221, 221);">&nbsp;</span></div>
        						</div>
        					</div>
        					<div class="cont cont_label" style="display: block;"><!--20-->
        						<input id="block" type="checkbox">
        						<label class="calc-form" for="block">Блок питания</label>
        					</div>
        					<div class="cont cont_label" style="display: block;"><!--21-->
        						<input id="contr" type="checkbox">
        						<label class="calc-form" for="contr">Контражур</label>
        						<input id="pdlj" type="checkbox">
        						<label class="calc-form" for="pdlj">Подложка</label>
        					</div>
        					<div id="podlojka" class="cont" style="display: none;"><!--22-->
        						<div class="ct">Высота подложки, см:
        							<input id="pdlj_h" value="1" type="text">
        						</div>
        						<div class="ct">Длина подложки, см:
        							<input id="pdlj_w" value="1" type="text">
        						</div>
        						<div style="margin-top: 3px;"><span>Цвет подложки</span><span class="trg" id="podl" value="rgb(0, 0, 0)" style="margin-left: 10px; background-color: rgb(0, 0, 0); color: rgb(221, 221, 221);">&nbsp;</span></div>
        					</div>
        					<div class="cont" style="display: block;"><!--23-->
        						<input id="montaj" type="checkbox">
        						Монтаж
        					</div>
        				</div>
        			</div>
        			<div id="view" class="cont" style="display: block; font-family: Arial; color: rgb(255, 255, 0); text-shadow: rgb(255, 0, 0) -4px 4px 0px, rgb(255, 0, 0) -3px 3px 0px, rgb(255, 0, 0) -2px 2px 0px, rgb(255, 0, 0) -1px 1px 0px; background-color: rgb(0, 0, 0);"><!--26 (27)-->
        				Примерный вид
        			</div>
        			<div id="kolvo">Стоимость: <span id="itog">60</span> руб.</div>
        			<div class="text-center">
        				<button type="button" class="button btn btn-success" data-toggle="modal" data-target="#order"><span class="text">Оставить заявку</span></button>
        			</div>
        		</div>
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

<!--<script src="<?php bloginfo('template_url'); ?>/js/libs.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jqColorPicker.js"></script>!-->
