//mobile-menu

var toggleBtn = document.querySelector('#js-toggle');
var menuNav = document.querySelector('.left-panel');
var toggleArrow = document.querySelector('.header-menu-toggle');

toggleBtn.addEventListener('click', moveMenu);

function moveMenu(){
  if(menuNav.classList.contains('left-panel-show')) {
      toggleArrow.classList.remove('btn-arrow-top');
      toggleArrow.classList.remove('btn-arrow-bottom');
      menuNav.classList.remove('left-panel-show');
     } else {
      toggleArrow.classList.add('btn-arrow-top');
      toggleArrow.classList.add('btn-arrow-bottom');
      menuNav.classList.add('left-panel-show');
      }
};

// popup windows

var popup = document.querySelector(".popup-question");
var popupS = document.querySelector(".popup-question-s")
var openBtn = document.querySelectorAll(".cloud-link");
var closeBtn = document.querySelectorAll(".popup-question-close");
var winPopup = document.querySelector(".wrap");

function showPopup() {
  winPopup.classList.add("modal-content-show");
  popup.classList.add("modal-content-show");
};

function showThank() {
  winPopup.classList.add("modal-content-show");
  popupS.classList.add("modal-content-show");
  setTimeout(function() {
    popupS.classList.add("modal-content-hide");
    winPopup.classList.add("modal-content-hide");
  }, 3000);
  setTimeout(function() {
    popupS.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popupS.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 3500);
};

function removePopup() {
  popup.classList.add("modal-content-hide");
  popupS.classList.add("modal-content-hide");
  winPopup.classList.add("modal-content-hide");
  setTimeout(function() {
    popup.classList.remove("modal-content-show");
    popupS.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popup.classList.remove("modal-content-hide");
    popupS.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 600);

};

for (var i = 0; i < openBtn.length; i++) {
  openBtn[i].addEventListener("click", function(event) {

    event.preventDefault();

    showPopup();

  });
}

for (var i = 0; i < closeBtn.length; i++) {
  closeBtn[i].addEventListener("click", function(event) {

    event.preventDefault();

    removePopup();

  });
}

window.addEventListener("keydown", function(event) {

  if (event.keyCode === 27) {

    if (popup.classList.contains("modal-content-show")) {

      removePopup();

    }

  }

});

winPopup.addEventListener("click", function(event) {

  if (winPopup.classList.contains("modal-content-show")) {

    removePopup();

  }

});

$(document).ready(function() {

	//E-mail Ajax Send
	$(".send_form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			showThank();
      setTimeout(function() {
        // Done Functions
        th.trigger("reset");
      }, 1000);
		});
    showThank();
    setTimeout(function() {
      // Done Functions
      th.trigger("reset");
    }, 1000);
		return false;
	});

});
