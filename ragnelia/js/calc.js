//Расчет приблизительной стоимости и отправка формы


var calcForm = document.querySelector('.calc-form');
var selectTypeR = calcForm.querySelector('#type_r');
var selectType1 = calcForm.querySelector('#type_1');
var selectQ = calcForm.querySelectorAll('.price-block');
var quant = calcForm.querySelectorAll('.unit');
var dataTypeR = calcForm.querySelectorAll('.type_r');
var dataType1 = calcForm.querySelectorAll('.type_1');
var dataType2 = calcForm.querySelectorAll('.type_2');
var poleTypeR = calcForm.querySelector('#pole-type_r');
var poleType2 = calcForm.querySelector('#pole-type_2');
var polePrice = calcForm.querySelector('#pole-price');
var divPrice = calcForm.querySelector('#form-price');
var label = calcForm.querySelector('.label-quant');
var labelQuant = label.querySelector('span');
var calcResultForm = calcForm.querySelector('#calc-result');
var showResult = calcForm.querySelector('.sub-calc-btn');
var sendResult = calcForm.querySelector('.submit');
var x = 0;
var z = dataTypeR.length;
var y = selectQ.length;
var w = quant.length;



var typePrice = [0, 69, 9000, 8, 1690, 900, 199, 9000, 3950];
var typeСoefficient = ['м-м..', 'ВЫСОТА(см)','ОБЪЕМ(м3)', 'ТИРАЖ (шт)', 'КОЛИЧЕСТВО (шт)', 'РАЗМЕР(м2)', 'РАЗМЕР(м2)', 'РАЗМЕР(м2)', 'РАЗМЕР(м2)'];



    for (var i = 0; i < z; i++) {

      dataTypeR[i].addEventListener('click', function(evt) {
        var self = evt.target;

          var n = z;

          while(n--) {

             if(dataTypeR[n] == self) {

                x = n;
                console.log(x);

                break;

             }

          }
          poleTypeR.value = dataTypeR[x].innerHTML;
          labelQuant.innerText = typeСoefficient[x];
      });
    };

      showResult.addEventListener('click', function(evt) {

          //evt.preventDefault();

          calcResultForm.classList.remove('price-block');

          var inputQuant = calcForm.querySelector('#quant');

          price = typePrice[x] * inputQuant.value;

          if (isNaN(price)) {
            divPrice.innerText = 'проверьте данные';
          } else {
            divPrice.innerText = price + ' р';
          };

          poleType2.value = labelQuant.innerText + inputQuant.value;

          polePrice.value = divPrice.innerText;

      });
