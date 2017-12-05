//Расчет приблизительной стоимости и отправка формы


var calcForm = document.querySelector('.calc-form');
var selectTypeR = calcForm.querySelector('#type_r');
var selectType1 = calcForm.querySelector('#type_1');
var selectType2 = calcForm.querySelector('#type_2');
var selectQ = selectType2.querySelectorAll('.price-block');
var quant = selectType2.querySelectorAll('.unit');
var dataTypeR = calcForm.querySelectorAll('.type_r');
var dataType1 = calcForm.querySelectorAll('.type_1');
var dataType2 = calcForm.querySelectorAll('.type_2');
var poleTypeR = calcForm.querySelector('#pole-type_r');
var poleType1 = calcForm.querySelector('#pole-type_1');
var poleType2 = calcForm.querySelector('#pole-type_2');
var polePrice = calcForm.querySelector('#pole-price');
var divPrice = calcForm.querySelector('#form-price');
var x = 0;
var z = dataTypeR.length;
var y = selectQ.length;
var m = quant.length;

var typePrice = [0, 69, 9000, 8, 1, 900, 199, 1, 9000, 3950];
var type2 = [0, 0, 5, 10, 15, 0, 5, 10, 15, 0, 10, 20, 30, 0, 1690, 2450, 4300, 0, 5, 10, 15, 0, 5, 10, 15, 0, 15900, 39000, 49000, 0, 5, 10, 15, 0, 5, 10, 15];



    for (var i = 0; i < z; i++) {
      console.log(m);
      dataTypeR[i].addEventListener('click', function(evt) {
        var self = evt.target;

          var n = z;

          while(n--) {

             if(dataTypeR[n] == self) {

                x = n;

                break;

             }

          }
          poleTypeR.value = dataTypeR[x].innerHTML;
          for (var i = 0; i < y; i++) {
            selectQ[i].classList.remove('block_active');
          };
          selectQ[x].classList.add('block_active');
          for (var i = 0; i < dataType1.length; i++) {
            dataType1[i].classList.add('price-block');
            dataType1[i].classList.remove('block_active');
          };
          selectQ[x].classList.add('block_active');

          dataType1[x].classList.add('block_active');
      });
    };

    var x1 = 0;

    for (var i = 0; i < m; i++) {
      quant[i].addEventListener('click', function(evt) {
        var self = evt.target;

          var n = z;

          while(n--) {

             if(quant[n] == self) {

                x1 = n;

                break;

             }

          }

          price = typePrice[x] * type2[x1];

          console.log(typePrice[x], type2[x1], x, x1);

          divPrice.innerText = price + 'р';

      });
    }
