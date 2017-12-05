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
 				'post_type' => 'portfolio',
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
				<div class="name"><?php echo get_field('title_p',$obj->ID); ?></div>
				<div class="desc">
            <?php the_post(); ?>
      			<?php the_content(); ?>
				</div>
				<div class="l">Была поставлена задача:
					<span class="val">
						<?php echo get_field('task',$obj->ID); ?>
					</span>
				</div>
				<div class="l">Решение:
					<span class="val">
						<?php echo get_field('solution',$obj->ID); ?>
					</span>
				</div>
			</div>
		</div>
		<div class="h2">Другие проекты</div>
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
