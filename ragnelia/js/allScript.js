$(document).ready(function(){
	heightWindow = $(window).height();
	$('#mainBanner').css({'height':heightWindow-40});
	$(window).resize(function(){
		heightWindow = $(window).height();
		$('#mainBanner').css({'height':heightWindow-40});
	});

	// появление стрелочки
	/*$('#mainBanner').imagesLoaded({ background: true }, function(){
		$('.arrowBlock .arrow').addClass('active');
	});

	$(window).on('scroll', function() {
        if($('.arrowBlock .arrow').hasClass('active'))
        {
        	$('.arrowBlock .arrow').addClass('none');
        }
    });*/

	$('.calcBlock .input:not(.noArrow)').click(function(e){
		countUnit = $(this).find('.unit').length;
		if($(e.target).hasClass('select'))
		{
			if($(this).hasClass('open'))
			{
				$(this).removeClass('open okey').find('.units').css({'height':35});
			}
			else
			{
				$('.calcBlock .input').removeClass('open').find('.units').css({'height':35});
				$(this).addClass('open').find('.units').css({'height':(countUnit*35)});
			}
		}
		else
		{
			text = $(e.target).text();
			name = $(e.target).attr('name');
			$('.calcBlock .input').removeClass('open').find('.units').css({'height':35});
			$(e.target).parent().find('.select').text(text).attr({'name':name}).parent().parent().addClass('okey');

		}
	});

	$('.calcBlock .input input').focus(function(){
		$(this).parent().removeClass('okey').addClass('hover');
	});

	$('.calcBlock .input input').blur(function(){
		$(this).parent().removeClass('hover');
		if($(this).val().length > 0)
		{
			$(this).parent().addClass('okey');
		}
		else
		{
			$(this).parent().removeClass('okey');
		}
	});

	$('.calcBlock input').blur(function(){
		$(this).removeClass('hover');
		if($(this).val().length > 0)
		{
			$(this).addClass('okey');
		}
		else
		{
			$(this).removeClass('okey');
		}
	});


	//Анимация слайдера на главной
	$('#project .content .sliderBox .contentBox .unit').each(function(){
		$(this).css({'transform':'translateX('+($(this).index()*105)+'%)'}).attr({'trans':($(this).index()*105)});
	});

	$('#project .content .sliderBox .doteds .unit').click(function(){
		index = $(this).index();
		if((!$(this).hasClass('active')) && (!$('#project .content .sliderBox .contentBox .unit').hasClass('move')))
		{
			indexActive = $('#project .content .sliderBox .doteds .unit.active').index();
			indexNew = $(this).index();
			$('#project .content .sliderBox .doteds .unit').removeClass('active');
			$(this).addClass('active');
			move = 105;
			mult = (indexActive-indexNew)*move;
			$('#project .content .sliderBox .contentBox .unit').each(function(){
				trans = parseInt($(this).attr('trans'));

				$('#project .content .sliderBox .contentBox .unit').addClass('move');
				$(this).css({'transform':'translateX('+(trans+mult)+'%)'}).attr({'trans':(trans+mult)});
				$(this).on('transitionend webkitTransitionEnd oTransitionEnd', function () {
					$('#project .content .sliderBox .contentBox .unit').removeClass('move');
				});
			});
		}
	});
	//

	$('.popupOpen').click(function(){
		$('#popup').addClass('open');
		$(this).find('img').clone().insertAfter('#popup .content .close');
		h = $('#popup .content').find('img').height();
		w = $('#popup .content').find('img').width();
		$('#popup .content').css({'width':w, 'height':h})	;
	});

	$('#popup .close').click(function(){
		$('#popup').removeClass('open');
		$('#popup .content *:not(.close)').remove();
	});

	$('.priceBox .mainImage').html($('.priceBox .imagesBox .panel .imageBox .image:first').find('img').clone());

	$('.priceBox .imagesBox .panel .imageBox .image').each(function(){
		$(this).css({'transform':'translateX('+($(this).index()*105)+'%)'}).attr({'trans':($(this).index()*105)});
	});

	$('.priceBox .imagesBox .panel .imageBox .image').click(function(){
		$('.priceBox .mainImage').html($(this).find('img').clone());
	});

	$('.priceBox .imagesBox .arrow').click(function(){
		maxClick = $('.priceBox .imagesBox .panel .imageBox .image').length;
		move = parseInt($('.priceBox .imagesBox .panel .imageBox').attr('move'));
		maxRight = $('.priceBox .imageBox').width();
		left = $('.priceBox .imageBox .image:first').position();
		if(!$('.priceBox .imagesBox .panel .imageBox .image').hasClass('move'))
		{
			if($(this).hasClass('right'))
			{
				if(move < maxClick-2)
				{
					$('.priceBox .imagesBox .panel .imageBox .image').each(function(){
						trans = parseInt($(this).attr('trans'));
						$('.priceBox .imagesBox .panel .imageBox .image').addClass('move');
						$(this).css({'transform':'translateX('+(trans-100)+'%)'}).attr({'trans':(trans-100)});
						$(this).on('transitionend webkitTransitionEnd oTransitionEnd', function () {
							$('.priceBox .imagesBox .panel .imageBox .image').removeClass('move');
						});
					});
					$('.priceBox .imagesBox .panel .imageBox').attr({'move':move+1});
				}
			}
			else
			{
				if(move != 0)
				{
					$('.priceBox .imagesBox .panel .imageBox .image').each(function(){
						trans = parseInt($(this).attr('trans'));
						$('.priceBox .imagesBox .panel .imageBox .image').addClass('move');
						$(this).css({'transform':'translateX('+(trans+100)+'%)'}).attr({'trans':(trans+100)});
						$(this).on('transitionend webkitTransitionEnd oTransitionEnd', function () {
							$('.priceBox .imagesBox .panel .imageBox .image').removeClass('move');
						});
					});
					$('.priceBox .imagesBox .panel .imageBox').attr({'move':move-1});
				}
			}
		}
	});

	$('#price .allPriceBox .unit').each(function(){
		$(this).attr({'trans':0});
	});

	$('#price .allPriceBox .arrow').click(function(){
		sizeBlock = $('#price .allPrice .unit').length;
		move = parseInt($('#price .allPrice').attr('move'));
		maxRight = $('#price .allPrice').width();
		left = $('#price .allPrice .unit:first').position();
		maxClick = Math.floor(maxRight/($('#price .allPrice .unit').width()));
		if(!$('#price .allPrice .unit').hasClass('move'))
		{
			if($(this).hasClass('right'))
			{
				if(move < sizeBlock-maxClick)
				{
					$('#price .allPrice .unit').each(function(){
						trans = parseInt($(this).attr('trans'));
						$('#price .allPrice .unit').addClass('move');
						$(this).css({'transform':'translateX('+(trans-100)+'%)'}).attr({'trans':(trans-100)});
						$(this).on('transitionend webkitTransitionEnd oTransitionEnd', function () {
							$('#price .allPrice .unit').removeClass('move');
						});
					});
					$('#price .allPrice').attr({'move':move+1});
				}
			}
			else
			{
				if(move != 0)
				{
					$('#price .allPrice .unit').each(function(){
						trans = parseInt($(this).attr('trans'));
						$('#price .allPrice .unit').addClass('move');
						$(this).css({'transform':'translateX('+(trans+100)+'%)'}).attr({'trans':(trans+100)});
						$(this).on('transitionend webkitTransitionEnd oTransitionEnd', function () {
							$('#price .allPrice .unit').removeClass('move');
						});
					});
					$('#price .allPrice').attr({'move':move-1});
				}
			}
		}
	});

	$('.portfolioBox .mainImage').html($('.portfolioBox .image:first').find('img').clone());

	$('.portfolioBox .image').click(function(){
		$('.portfolioBox .mainImage').html($(this).find('img').clone());
	});

	$('.allPort .unit').each(function(){
		$(this).attr({'trans':0});
	});

	$('.allPortBox .arrow').click(function(){
		sizeBlock = $('.allPort .unit').length;
		move = parseInt($('.allPort').attr('move'));
		maxRight = $('.allPort').width();
		left = $('.allPort .unit:first').position();
		maxClick = Math.ceil(maxRight/($('.allPort .unit').width()));
		if(!$('.allPort .unit').hasClass('move'))
		{
			if($(this).hasClass('right'))
			{
				if(move < sizeBlock-maxClick)
				{
					$('.allPort .unit').each(function(){
						trans = parseInt($(this).attr('trans'));
						$('.allPort .unit').addClass('move');
						$(this).css({'transform':'translateX('+(trans-100)+'%)'}).attr({'trans':(trans-100)});
						$(this).on('transitionend webkitTransitionEnd oTransitionEnd', function () {
							$('.allPort .unit').removeClass('move');
						});
					});
					$('.allPort').attr({'move':move+1});
				}
			}
			else
			{
				if(move != 0)
				{
					$('.allPort .unit').each(function(){
						trans = parseInt($(this).attr('trans'));
						$('.allPort .unit').addClass('move');
						$(this).css({'transform':'translateX('+(trans+100)+'%)'}).attr({'trans':(trans+100)});
						$(this).on('transitionend webkitTransitionEnd oTransitionEnd', function () {
							$('.allPort .unit').removeClass('move');
						});
					});
					$('.allPort').attr({'move':move-1});
				}
			}
		}
	});


	$(document).click(function(e){
		closeInputCalc(e.target);
	});

});

function closeInputCalc(target)
{
	if(!$(target).hasClass('unit'))
	{
		$('.calcBlock .input').removeClass('open').find('.units').css({'height':35});
	}
}
