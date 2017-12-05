$(document).ready(function(){
$('.trg').colorPicker(
{
	customBG: '#222',
	margin: '5px 0 0',
	//doRender: 'div div',
	buildCallback: function($elm) {
		this.$colorPatch = $elm.prepend('<div class="cp-disp">').find('.cp-disp');
	},
	renderCallback: function($elm, toggled){
		myCalc(-1);
	}
});


$('.usl-i, .viv-i img').on("click", function(){
	var lnk = $(this).attr("src").replace("usl", "usl-");
	var atr = $(this).attr("alt");
	/*$("#text_order").text("");*/
	$.magnificPopup.open({
		items: {
			src: "<div class=\"pop-up\" id=\"pop-up\"><img src=\"" + lnk + "\"><a href=\"#\" class=\"want\" data-toggle=\"modal\" data-target=\"#order\" onclick=\"document.getElementById('text_order').value='" + atr + "'; yaCounter44918776.reachGoal('VIVESKI'); return true;\">Запросить скидку</a><a href=\"#\" class=\"buy\" data-toggle=\"modal\" data-target=\"#order\" onclick=\"document.getElementById('text_order').value='" + atr + "';yaCounter44918776.reachGoal('VIVESKI'); return true;\">Хочу такую</a></div>",
			type: 'inline'
		},
		callbacks: {
			open: function() {
				$("#pop-up a").on("click", function(event){
					event.preventDefault();
					$.magnificPopup.close();
					//$("#text_order").val(atr + "\n");
					//yaCounter44918776.reachGoal('VIVESKI');
					//$("#ord-link").trigger("click");
				});
			}
		}
	});
});


$("#owl-demo").owlCarousel({
	//navigation : true,
	autoPlay: 5000,
	slideSpeed : 300,
	paginationSpeed : 400,
	autoHeight : true,
	items : 1,
	itemsDesktop : false, //[1000,5]
	itemsDesktopSmall : false,
	itemsTablet: false,
	itemsMobile : false
});
//galery prods
$("#owl-images").owlCarousel({
	//autoPlay: 3000, //Set AutoPlay to 3 seconds
	 //navigation : true,
	 autoPlay: 5000,
	 slideSpeed : 300,
	 paginationSpeed : 400,
	 autoHeight : true,
	 items : 3,
	 itemsDesktop : [1199,2],
	 itemsDesktopSmall : [979,2],
	 itemsTablet: false,
	 itemsMobile : [540,1]
	}).magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Загрузка картинки #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery:	{
			enabled: true,
			navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	},
	image: {
		tError: 'Картинка (#%curr%) не была загружена. Нажмите для просмотра <a href="%url%">здесь</a>',
		titleSrc:function(item){
			return item.el.attr('title') + '<small>Copyright © "Принтер-МСК"</small>';
		}
	}
});

	$('#w_images').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Загрузка картинки #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	},
	image: {
		tError: 'Картинка (#%curr%) не была загружена. Нажмите для просмотра <a href="%url%">здесь</a>',
		titleSrc: function(item) {
			return item.el.attr('title') + '<small>Copyright © "Принтер-МСК"</small>';
		}
	}
});

	$('#menu-calc').hide();
	$(window).scroll(function() {
		if($(this).scrollTop() >= 100)
		{
			$('#menu').addClass('stickytop');
			$('#menu-calc').show();
		}
		else
		{
			$('#menu').removeClass('stickytop');
			$('#menu-calc').hide();
		}

		/*if($(this).scrollTop() >= 200)
		{
			if($('#cta').attr("data-hach") == "0"){
				$('#cta').removeClass('nan');
			}
		}
		else
		{
			$('#cta').addClass('nan');
		}*/
	});

	var menuToggle = function(type)
	{
		if(type == 0)
		{
			$("#menu ul").css({"display" : "block"});
           // $("#menu").css({"background":"none", "border":"none"});
           return '<i class="fa fa-times" aria-hidden="true"></i> Закрыть меню';
         }
         else
         {
         	$("#menu ul").css({"display" : "none"});
           // $("#menu").css({"background":"#feb72c", "border":"border: 1px solid #fbf785"});
           return '<i class="fa fa-bars" aria-hidden="true"></i> Открыть меню';
         }
       };

       $("#toggle-menu").on("click", function(){
       	if($("#menu ul").css("display") == "none"){type = 0;}
       	else{type = 1;}
       	var answ = menuToggle(type);
       	$(this).html(answ);
       });

       var serviceToggle = function()
       {
       	var leftMenu = $("#left-menu");
       	if(leftMenu.css("display") == "none")
       	{
       		leftMenu.show(500);
       		return '<i class="fa fa-minus" aria-hidden="true"></i> Скрыть перечень услуг';
       	}
       	else
       	{
       		leftMenu.hide(500);
       		return '<i class="fa fa-plus" aria-hidden="true"></i> Показать перечень услуг';
       	}
       };
       $("#left-menu-toggle").on("click", function(){
       	var answ = serviceToggle();
       	$(this).html(answ);
       });

    /*
    $(window).resize(function(){
        if($(document).width() > 751 && $("#menu ul").css("display") == "none")
        {
            $("#menu ul").css("display", "block") ;
        }
        if($(document).width() > 975 && $("#left-menu").css("display") == "none")
        {
            $("#left-menu").css("display", "block") ;
        }
      });*/

//.active

function link_to_id(url)
{
	var url2 = new URL(url);
	var prod = url2.pathname.split("-");
	var prod_id = prod[0].replace("/", "") * 1;
	return prod_id;
}


var mylink = location.pathname.split('-')[0].replace("/", "");
//var mylink = link_to_id(location.href);
if(Number.isInteger(mylink * 1))
{
	var for_button = mylink * 1;
	if(mylink == "")
	{
		mylink = "";
	}
	else
	{
		mylink = "uslugi";
	}
}
$('#menu a[href="/' + mylink + '"]').parent().addClass('active');

//service click
$("#service .pl").on("click", function(){
	$("#text_order").text("Услуга: " + $(this).children("h3").text());
});
$(".show-bottom div").on("click", function(){
	yaCounter44918776.reachGoal('WIN_BUTT0');
	$(this).parents(".pl").trigger("click");
	$("#ord-link").trigger("click");
});
var menulink = location.pathname;
$('#left-menu a[href="' + menulink + '"]').addClass('active');

/*$(".w_butt").on("click", function()
{
	$("#text_order").text($(this).attr("data-img") + "\n");
	yaCounter44918776.reachGoal('WIN_BUTT');
	$("#ord-link").trigger("click");
});*/

//калькулятор
function myCalc(link_id)
{
	var pr = 0;
		/*var offer_arr = [ //[min-price, grid, design]
			[[300, 500], [0, 2, 3, 6, 7, 10, 13, 16], 500], //0 - Баннер 1
			[0, [0, 5, 8, 16], 250], //1 - Визитка 4
			[0, [0, 8, 14, 16], 1000], //2 - Календари 12
			[0, [0, 4, 5, 8, 14, 15, 16], 1000], //3 - Листовка 11
			[[0, 1160, 1500], [0, 2, 3, 6, 7, 11, 12, 16], 1000], //4 - На холсте 14
 			[850, [0, 2, 3, 7, 16], 500], //5 - Перфо-пленка 15
			[[0, 500, 750], [0, 1, 2, 3, 6, 7, 9, 16], 1500], //6 - Плакат-Афиша 41
			[[0, 500, 750], [0, 1, 2, 3, 6, 7, 9, 16], 1000] //7 - Самоклейка 3
			];*/
		var offer_arr = [ //[min-price, grid, design]
			[[300, 500], [0, 2, 3, 9, 10, 13, 16, 23], 500], //0 - Баннер 1
			[0, [0, 8, 11, 23], 250], //1 - Визитка 4
			[0, [0, 11, 17, 23], 1000], //2 - Календари 12
			[0, [0, 7, 8, 11, 17, 18, 23], 1000], //3 - Листовка 11
			[[0, 1160, 1500], [0, 2, 3, 9, 10, 14, 15, 23], 1000], //4 - На холсте 14
 			[850, [0, 2, 3, 10, 22], 500], //5 - Перфо-пленка 15
			[[0, 500, 750], [0, 1, 2, 3, 9, 10, 12, 23], 1500], //6 - Плакат-Афиша 41
			[[0, 500, 750], [0, 1, 2, 3, 9, 10, 12, 23], 1000], //7 - Самоклейка 3
			[0, [0, 4, 5, 6, 19, 20, 21, 24, 25, 27], 60] //8 - Буквы 3
			];
		//возможен вариант с маской, двоичной системы - 16 цифр, те параметры что нужны 1, что не нужны - 0. Далее, подсчет исходя из параметра. Если этот параметр 0, то его и не учитывать при подсчете суммы или прибавлять 0. Сейчас реализовано через видимости.
		/*var list_arr = [
		[
		[5965, 7388, 8652, 9766, 13032, 15333, 17399, 19245, 21734, 25710, 27687],
		[5197, 7667, 8262, 9504, 11629, 14849, 15343, 17908, 19310, 22115, 26918]
			], //А3
			[
			[3269, 5500, 5703, 5920, 8177, 8400, 10982, 11449, 13799, 17440, 20101],
			[2761, 5011, 5344, 5811, 7710, 7753, 10407, 10838, 11737, 15534, 17333]
			], //А4
			[
			[1685, 2804, 3905, 4390, 5116, 5812, 6435, 7058, 8784, 10166, 11604],
			[1425, 2553, 3718, 4204, 4749, 5299, 5922, 6361, 8073, 9433, 10842]
			], //А5
			[
			[859, 920, 1300, 2500, 3868, 4354, 4427, 5786, 6203, 7039, 8874],
			[748, 816, 899, 2300, 3494, 3980, 4279, 5455, 5837, 6599, 8361]
			], //А6
			[
			[2428, 3601, 3749, 5006, 5866, 6619, 7387, 7498, 9418, 11364, 13310],
			[2123, 3315, 3565, 4859, 5702, 6399, 7287, 7450, 9310, 11183, 13056]
			], //210x200
			[
			[1058, 1132, 1196, 2710, 3980, 4427, 4565, 5116, 5636, 6677, 8718],
			[930, 1013, 1121, 2499, 3973, 4271, 4455, 4932, 5394, 6318, 8241]
			],//210x98
			];
			var falc_arr =
			[
			[135, 150, 150, 300, 450, 600, 750, 900, 1020, 1260, 1500],
			[405, 450, 450, 800, 1150, 1400	, 650, 1800, 2020, 2360, 2700],
			[270, 300, 300, 450, 600, 900, 1050, 1200, 1440, 1920, 2400],
			[720, 800, 800, 1150, 1450, 1900, 2150, 2300, 2640, 3320, 4000]
			]
			var krug_arr = [131, 145, 145, 145, 290, 435, 580, 725, 870, 1160, 1450];


			var viz_arr =
			[
			[500, 811, 915, 2000, 2500, 3800, 4600, 5541, 6083, 7165, 8249, 15232],
			[450, 750, 851, 1500, 2300, 3500, 4300, 4970, 5376, 6188, 6999, 13999]
			]*/
			var cal_arr =
			[
			[2526, 2725, 3842, 4069, 4695, 6030, 7202, 8495, 9537, 11626, 13703],
			[2000, 2300, 2975, 3202, 3657, 4402, 4954, 5708, 6316, 7533, 10749]
			];
		var luvers_arr = [0, 60, 40]; // 3 люверса 60, 2 - 40

		var offer = $("#offer");
		var offer_v = offer.val() * 1;


		if(link_id > -1)
		{
			offer_v = link_id;
			//$("#offer option[value=" + link_id + "]").attr('selected', 'selected');
			$("#offer option[value=" + link_id + "]").prop("selected", true);
		}

		var pricearr = $("#offer option[value=" + offer_v + "]").attr("data-price").split("-");

		var papir = $("#papir");
		var papir_v = papir.val() * 1;

		var luvers = $("#luvers");
		var luvers_v = luvers.val() * 1;

		var pdi = $("#pdi");
		var pdi_v = pdi.val() * 1;

		var falc = $("#falc");
		var falc_v = falc.val() * 1;

		var col2 = $("#col2");
		var col2_v = col2.val() * 1;

		var size = $("#size");
		var size_v = size.val() * 1;

		var cvet = $("#cvet");
		var cvet_v = cvet.val() * 1;

		//checkbox
		var lamir = $("#lamir");
		var krug = $("#krug");
		var power = $("#power");
		var design = $("#design");
		var podram = $("#podram");
		var gall = $("#gall");

		//input
		var wi = $("#width").val() * 1;
		if(!wi){$("#width").val(1);wi=1;}
		var hi = $("#hight").val() * 1;
		if(!hi){$("#hight").val(1);hi=1;}
		var pl=Math.ceil(wi)*Math.ceil(hi);

		var col1 = $("#col1").val() * 1;
		if(!col1 || col1 > 99999){
			$("#col1").val(1);
			col1=1;
		}

		$("#calc-form div.cont").hide();
		//$("#calc-form div.cont").show();
		$("#calc-form").css("background-image", "none");
		offer_arr[offer_v][1].forEach(function(item, i, arr)
		{
			$("#calc-form div.cont").eq(item).show();
		});

$("#col2 option, #pdi option").show(); //включил выключаемы опционально компоненты выпадающих списков

var mess =	"Изделие: " + $("#offer option:selected").text() + "\n";
switch(offer_v)
{
	case 0:
	{
		$("#advice").text("расчет стоимости печати на баннерной ткани");
		$("#pdi option").eq(2).hide();//убрал 1440 dpi
		//pr += offer_arr[offer_v][0][pdi_v]; //по четкости
		if(pdi_v == 0){	pr += pricearr[0] * 1;}
		if(pdi_v == 1){	pr += pricearr[1] * 1;}

		if(pl>10 && pl<=50)
		{
			pr -= 10; //скидка 10 руб - 290 или 490 руб (зависит от pdi)
		}
		if(pl>50)
		{
			pr -= 30; //скидка 270 или 470 руб (зависит от pdi)
		}
		//pr += luvers_arr[luvers_v];
		if(luvers_v == 1){pr += pricearr[2] * 1;}
		if(luvers_v == 2){pr += pricearr[3] * 1;}

		pr = pr * pl * col1;

		var mess_pw = "Нет";
		if(power.is(':checked')) //40 рублей за погонный метр
		{
			pr += (Math.ceil(wi) * 2 + Math.ceil(hi) * 2) * pricearr[4] * 1;
			mess_pw = "Да";
		}

		mess +=	"Ширина, м: " + wi + "\n" +
		"Высота, м: " + hi + "\n" +
		"Разрешение, DPI: " + $("#pdi option:selected").text()  + "\n" +
		"Люверсы: " + $("#luvers option:selected").text()  + "\n" +
		"Усиление края: " + mess_pw + "\n" +
		"Кол-во, шт: " + col1 + "\n";
	}
	break;
	case 1:
	{
		pr += viz_arr[cvet_v][col2_v];

		mess +=	"Цветность: " + $("#cvet option:selected").text() + "\n" +
		"Кол-во, шт: " + $("#col2 option:selected").text() + "\n";
	}
	break;
	case 2:
	{
		$("#col2 option").eq(11).hide(); //убрал 20 000 штук
		var lam = 1;
		var mess_krug = "Нет";
		if(krug.is(':checked')) //40 рублей за погонный метр
		{
			lam = 0;
			mess_krug = "Да";
		}
		pr = cal_arr[lam][col2_v];

		mess +=	"Скругление: " + mess_krug + "\n" +
		"Кол-во, шт: " + $("#col2 option:selected").text() + "\n";
	}
	break;
	case 3:
	{
		$("#col2 option").eq(11).hide(); //убрал 20 000 штук

		pr += list_arr[size_v][cvet_v][col2_v]; //размеру и цветности;
		if(falc_v > 0)
		{
			pr += falc_arr[falc_v - 1][col2_v];
		}
		var mess_krug = "Нет";
		if(krug.is(':checked')) //40 рублей за погонный метр
		{
			pr += krug_arr[col2_v];
			mess_krug = "Да";
		}

		mess +=	"Размер: " + $("#size option:selected").text() + "\n" +
		"Цветность: " + $("#cvet option:selected").text() + "\n" +
		"Скругление: " + mess_krug + "\n" +
		"Фальц: " + $("#falc option:selected").text()  + "\n" +
		"Кол-во, шт: " + $("#col2 option:selected").text() + "\n";
	}
	break;
	case 4:
	{
		$("#advice").text("расчет стоимости печати на холсте");
		$("#pdi option").eq(0).hide();//убрал 360 dpi
		if(pdi_v == 0) //поменял значение выпаддающего списка, т.к. по умолчанию - 0, которого теперьнет
		{
			$("#pdi option").eq(1).attr('selected', 'selected');
			pdi_v = 1;
		}

		//pr += offer_arr[offer_v][0][pdi_v];
		if(pdi_v == 1){	pr += pricearr[0] * 1;}
		if(pdi_v == 2){	pr += pricearr[1] * 1;}

		pr = pr * pl * col1;
		var mess_podram = "Нет";
		if(podram.is(':checked')) //40 рублей за погонный метр
		{
			if(pl > 1)
			{
				pr += pricearr[2] * 2;
			}
			else
			{
				pr += pricearr[2] * 1;
			}
			mess_podram = "Да";
		}
		var mess_gall = "Нет";
		if(gall.is(':checked')) //40 рублей за погонный метр
		{
			pr += pricearr[3] * 1;
			mess_gall = "Да";
		}

		mess +=	"Ширина, м: " + wi + "\n" +
		"Высота, м: " + hi + "\n" +
		"Разрешение, DPI: " + $("#pdi option:selected").text()  + "\n" +
		"Люверсы: " + $("#luvers option:selected").text()  + "\n" +
		"Подрамник: " + mess_podram + "\n" +
		"Галерейная натяжка: " + mess_gall + "\n" +
		"Кол-во, шт: " + col1 + "\n";
	}
	break;
	case 5:
	{
		$("#advice").text("расчет стоимости печати на перфо-пленке");
		//pr += offer_arr[offer_v][0];
		pr += pricearr[0] * 1;
		pr = pr * pl * col1;

		mess +=	"Ширина, м:" + wi + "м\n" +
		"Высота, м: " + hi + "м\n" +
		"Кол-во, шт: " + col1 + "\n";
	}
	break;
	case 8:
	{
		$("#advice").text("расчет вывески из объемных световых букв");
		var txt = $("#lett").val(),
				leng = txt.length; //кол-во букв
		leng -= (txt.split(" ").length - 1); //убрал пробелы
		if(leng < 1){leng = 1;}
		var lett_h = $("#lett_h").val() * 1,
				lett_pr = pricearr[0] * 1, //60 рулей
				zaden = "",
				montaj = 0; //монтаж беслатно

		var kontr_k = 1.6; //буква со свечением 120 (75* 1.6)
		if($("#oneday").is(':checked')) //за 1 день
		{
			lett_pr = pricearr[4] * 1; //стоимость
			$("#kvota").show();
			zaden += "Срочное изготовление: за 1 день!\n";
			kontr_k = 1.5;
		}
		pr += lett_pr * lett_h * leng;
		//pr += offer_arr[offer_v][2] * lett_h * leng;

		var lico =	$("#litco").css("background-color"),
		bort =	$("#bort").css("background-color"),
		bcg =	$("#podl").css("background-color"),
		block1 = "Не нужен",
		conazh = "Не нужен",
		podloj = "Не нужна",
		mntj = "Не нужен",
		shadow = "-4px 4px 0px " + bort + ",-3px 3px 0px " + bort + ",-2px 2px 0px " + bort + ",-1px 1px 0px " + bort,
		font_id = $("#font").val() * 1,
		fonts = ['Arial','ApercuPro-Bold','Arvo-Bold','Century_Gothic-Bold','Circe-ExtraBold','Futura_New-Bold','HelveticaNeue-Bold','HelveticaNeue-CondensedBlack','HelveticaNeue-CondensedBold','Marta-Bold','MuseoSansCyrl-700','MyriadPro-Bold','MyriadPro-Condensed_Bold','OfficinaSerif-BoldCTT','PFAgoraSansPro-Bold'];

		$("#coef1").text("Или любой другой шрифт");

		if($("#contr").is(':checked')) //40 рублей за погонный метр
		{
			pr = pr * kontr_k;
			shadow += "," + "-5px 5px 0px rgba(255,255,255,0.7),-6px 6px 0px rgba(255,255,255,0.4),-7px 7px 0px rgba(255,255,255,0.3),-8px 8px 0px rgba(255,255,255,0.2),-9px 9px 0px rgba(255,255,255,0.1)";
			conazh = "Нужен";
		}

		if($('#h_max').length > 0){
			$('#h_max').remove();
		}
		if($("#pdlj").is(':checked')) //40 рублей за погонный метр
		{
			$("#podlojka").show();
			var pdlj_h = $("#pdlj_h").val() * 1,
			pdlj_w = $("#pdlj_w").val() * 1,
			list = 1;

			if(pdlj_h > 140)
			{
				$("#pdlj_h").after('<div id="h_max">Максимальная высота 140см</div>').val(140);
			}

			if(pdlj_w > 400)
			{
				list = Math.ceil(pdlj_w / 400);
			}
			pr += pricearr[2] * 1 * list;
			//alert(list);
			podloj = " Нужна" + "\nВысота, см: " + pdlj_h + "\nДлина, см: " + pdlj_w + "\nЦвет подложки: " + bcg;
		}

		if($("#block").is(':checked')) //40 рублей за погонный метр
		{
			pr += pricearr[1] * 1;
			block1 = "Нужен";
		}
		$("#view").css({"font-family": fonts[font_id], "color": lico, "text-shadow": shadow, "background-color": bcg});

		//pr += montaj;
		if($("#montaj").is(':checked')) //за 1 день
		{
			pr += pricearr[3] * 1;
			mntj = "Нужен";
		}

		mess +=	"Текст: " + txt + "\n" +
		"Высота букв, см: " + lett_h + "\n" +
		"Шрифт: " + fonts[font_id] + "\n" +
		"Цвет лица: " + lico + "\n" +
		"Цвет борта: " + bort + "\n" +
		"Блок питания: " + block1 + "\n" +
		"Контражур: " + conazh + "\n" +
		"Подложка: " + podloj + "\n" +
		"Монтаж: " + mntj + "\n" +
		zaden;
	}
	break;
	default: //6 & 7
	{
		if(offer_v == 6){$("#advice").text("расчет стоимости печати плакатов - афиш");}
		if(offer_v == 7){$("#advice").text("расчет стоимости печати на самоклейке");}
		$("#pdi option").eq(0).hide();//убрал 360 dpi
		if(pdi_v == 0) //поменял значение выпаддающего списка, т.к. по умолчанию - 0, которого теперьнет
		{
			$("#pdi option").eq(1).attr('selected', 'selected');
			pdi_v = 1;
		}
		//pr += offer_arr[offer_v][0][pdi_v]; //по четкости

		if(papir_v == 0) //матовая бумага на 50р дешевле
		{
			if(pdi_v == 1){	pr += pricearr[0] * 1;}
			if(pdi_v == 2){	pr += pricearr[1] * 1;}
		}
		if(papir_v == 1) //матовая бумага на 50р дешевле
		{
			if(pdi_v == 1){	pr += pricearr[2] * 1;}
			if(pdi_v == 2){	pr += pricearr[3] * 1;}
		}
		var mess_lam = "Нет";
		if(lamir.is(':checked')) //40 рублей за погонный метр
		{
			pr += pricearr[4] * 1;
			mess_lam = "Да";
		}
		pr = pr * pl * col1;

		mess +=	"Бумага: " + $("#papir option:selected").text() + "\n" +
		"Ширина, м: " + wi + "\n" +
		"Высота, м: " + hi + "\n" +
		"Разрешение, DPI: " + $("#pdi option:selected").text()  + "\n" +
		"Ламинирование: " + mess_lam + "\n" +
		"Кол-во, шт: " + col1 + "\n";
	}
	break;

}

if(design.is(':checked'))
{
	pr += offer_arr[offer_v][2];
	mess += "Дизайн: Нужен \n";
}
mess += "Стоимость: " + pr + " руб.";

$("#itog").text(pr);
$("#text_order").val(mess);
}

var links_arr = [1,4,12,11,14,15,6,3,54]; //id оваров с калькулятором

if($.inArray(for_button, links_arr) > -1)
{
	$("#calc_button").show();
}

if($("#calc-form").length > 0)
{
	var link_id = -1;
	if(document.referrer != "")//если напрямую зашли, то рефера нет
	{
		link_id = $.inArray(link_to_id(document.referrer), links_arr);
	}

	var wListKeys = ["0","1","2","3","4","5","6","7","8","9",".",",","/","б","ю"];

	$("#offer, #papir, #lamir, #luvers, #podram, #gall, #size, #col2, #cvet, #power, #falc, #krug, #pdi, #design, #block, #font, #contr, #pdlj, #oneday, #montaj").on("change", function(){myCalc(-1);});
	//$("#podlj").hide();
	//alert("dd");
	$("#width, #hight, #col1, #lett_h, #pdlj_h, #pdlj_w").keypress(function(e)
	{
		var charKey = String.fromCharCode(e.keyCode || e.charCode);
		var keyAnsw = $.inArray(charKey, wListKeys);
		var inpVal = $(this).val();
		var thisId = $(this).attr("id");
		if(keyAnsw > -1)
		{
			if(keyAnsw == 10 || keyAnsw == 11 || keyAnsw == 12 || keyAnsw == 13 || keyAnsw == 14) //".",",","/","б","ю"
			{
				e.preventDefault();
				$("#calc_answ").text(0);
				if(thisId != "col1") //точки кол-ву ни к чему
				{
					if (-1 == inpVal.indexOf('.'))
					{
						var newVal = inpVal + ".";
						$(this).val(inpVal + ".");
					}
				}
			}
			else
			{
				$("#calc_answ").text(1);
			}
		}
		else
		{
			e.preventDefault();
			$("#calc_answ").text(0);
		}
		//alert("dd1");
	}).keyup(function(){
		if($("#calc_answ").text() == "1" && $(this).val() != "")
		{
			myCalc(-1);
		}
	});
	$("#lett").keyup(function(){
		$("#view").text($(this).val());
		myCalc(-1);
	});
	myCalc(link_id);
}
/*function (func,ms){var isThrottled=false,savedArgs,savedThis;
	function wrapper(){if(isThrottled){savedArgs=arguments;savedThis=this;return;}func.apply(this, arguments);isThrottled=true;setTimeout(function(){isThrottled = false;if(savedArgs){wrapper.apply(savedThis,savedArgs);savedArgs=savedThis=null;}},ms);}return wrapper;}

	var urls = [];
	urls['url("https://printer-msk.ru/img/rub1.png")'] = 'url("https://printer-msk.ru/img/rub2.png")';
	urls['url("https://printer-msk.ru/img/rub2.png")'] = 'url("https://printer-msk.ru/img/rub1.png")';
	$(window).scroll(throttle(function(){
		var bcg = $("#rub").css("background-image");
		//console.log($("#rub").css({"background-image": urls[bcg]}));
		$("#rub").css({"background-image": urls[bcg]});
		//console.log(urls[bcg]);
	}, 1000));*/

	/*$("#rub").on("click", function(){
		yaCounter44918776.reachGoal('60RUB');
		$("#ord-link").trigger("click");
		$("#text_order").text("Хочу вывеску по цене 60 руб/см.!");
	});*/
	/*$("#telo").on("click", function(){
		//yaCounter44918776.reachGoal('60RUB');
		$("#ord-link").trigger("click");
		$("#text_order").text("Мне нужна вывеска за один день!");
	});*/
	/*$("#hach").on("click", function(){
		$("#cta").addClass("nan").attr("data-hach", "1");
	});*/

});
