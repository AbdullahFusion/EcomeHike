$(function() {
    $('#menu').slicknav();
});

$("body").addClass("overflow-hidden");
window.onload = () => {
    $(".loader").fadeOut(300);
    $("body").removeClass("overflow-hidden");
}

// blogslider end

// b2b-slider
$('.b2b-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    autoplay: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1
        }
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1
        }
    }
    ]
});
// b2b-slider

// video-box
$("#play-btn").click(function(){
    $("#video-box").get(0).play();
    $("#video-box").prop("controls", true);
    $(this).hide();
})


// testi slider jas start
$('.testi-slider').slick({
   dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1,
});




// wow animation js 

$(function() {
    new WOW().init();
});



// $(document).ready(function(){
//   $(".bars-btn").click(function(){
//     $(".main-box").addClass("active");
//   });
// });

// $(document).ready(function(){
//   $(".coseing").click(function(){
//     $(".main-box").removeClass("active");
//   });
// });

$(document).ready(function(){
  $(".bars-btn").click(function(){
    $(".main-box").addClass("active");
  });

  $(".coseing").click(function(){
    $(".main-box").removeClass("active");
  });

  // Click outside the .main-box to remove the 'active' class
  $(document).click(function(event) {
    if (!$(event.target).closest(".main-box, .bars-btn").length) {
      $(".main-box").removeClass("active");
    }
  });
});


  // $(".menu-click").click(function(){
  //         $(".menu-sub").toggleClass("active");
  //         $(".menu-click i").toggleClass("active");
  //         $(".menu-sub1").removeClass("active");
  //         $(".menu-click1 i").removeClass("active");
  //       });


$(document).ready(function() {
  $(".menu-click").click(function(event){
    event.stopPropagation();
    $(".menu-sub").toggleClass("active");
    $(".menu-click i").toggleClass("active");
    $(".menu-sub1").removeClass("active");
    $(".menu-click1 i").removeClass("active");
  });

  $(document).click(function(event) {
    if (!$(event.target).closest('.menu-click, .menu-sub').length) {
      $(".menu-sub").removeClass("active");
      $(".menu-click i").removeClass("active");
    }
  });
});



  $(".menu-click1").click(function(){
          $(".menu-sub1").toggleClass("active");
          $(".menu-click1 i").toggleClass("active");
          $(".menu-sub").removeClass("active");
          $(".menu-click i").removeClass("active");
        });
        
        
    $(".all").click(function(){
     $(".height-cl").addClass("active");
     $(".all").addClass("d-none");
     $(".less").removeClass("d-none");
});
           
    $(".less").click(function(){
      $(".height-cl").removeClass("active");
      $(".all").removeClass("d-none");
      $(".less").addClass("d-none");
});
        
        
////// testimonial slider
$(".testwraper").slick({
  dots: false,
  arrows: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  fade: true,
  cssEase: 'linear',
  responsive: [
    {
    breakpoint: 776,
    settings: {
     vertical:false,
     dots: false,
     arrows: false
    }
  }
]
}); 


function toggleAccordionText() {
  // Sabhi .accordion-button elements ko select karo
  var accordionButtons = document.querySelectorAll('.accordion-button');

  // Har button ke liye loop chalao
  accordionButtons.forEach(function(button) {
    // Har button ko click event listener add karo
    button.addEventListener('click', function() {
      // Toggle the 'collapsed' class on the clicked button
      this.classList.toggle('collapsed');
      
      // Find the <span> element inside the clicked button
      var spanElement = this.querySelector('span');

      // Check if the clicked button has the 'collapsed' class
      if (this.classList.contains('collapsed')) {
        // If it does, change the text to 'Read Less...'
        spanElement.textContent = 'Read Less...';
      } else {
        // If it doesn't, change the text to 'Read More...'
        spanElement.textContent = 'Read More...';
      }
    });
  });
}

// Function ko call karo taake wo accordion ke buttons pe kaam kare
toggleAccordionText();




   //*****************************
    // Mobile Navigation
    //*****************************
    $('.mobile-nav-btn').click(function() {
        $('.mobile-nav-btn, .mobile-nav, .app-container').toggleClass('active');
    });


    $('.firstlevel li a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).siblings('ul').slideUp();
        }else{
            $('.firstlevel li a').removeClass('active');
            $(this).addClass('active');
            $('.  ').slideUp();
            $(this).siblings('ul').slideDown();
        }
    });

    $('.mainnav > li > a').click(function() {
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).parents('li').children('.firstlevel').slideUp();
        }else{
            $(this).addClass('active');
            $(this).parents('li').children('.firstlevel').slideDown();
            $(this).parents('li').siblings('li').children('a').removeClass('active');
            $(this).parents('li').siblings('li').children('.firstlevel').slideUp();
        }
    }); 

// sticky social
$(document).scroll(function () {
	"use strict";
    var y = $(this).scrollTop();
    if (y > 200) {
        $('.sticky-container').fadeIn();
    } else {
        $('.sticky-container').fadeOut();
    }

    if (y >= 70) {
        $(".header-main").addClass("showmenu");
    } else {
        $(".header-main").removeClass("showmenu");
    } 

}); 
// sticky social end

$(".portslider-inner-1").slick({
    dots:!1,
arrows:!1,
infinite:!0,
speed:1e3,
slidesToShow:5,
slidesToScroll:1,
autoplay:!0,
autoplaySpeed:2e3,
adaptiveHeight:!0,
responsive: [
    {
      breakpoint: 767,
      settings: {
    dots: false,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
    });



let burger = document.getElementById('navTrigger'),
    nav    = document.getElementById('navMenu');

burger.addEventListener('click', function(e){
  this.classList.toggle('active');
  nav.classList.toggle('active');
});



$(document).ready(function() {
  $(".bars-btn").click(function() {
    $(".main-box").addClass("active");
  });

  $(".coseing").click(function() {
    $(".main-box").removeClass("active");
  });

  // Click outside the .main-box to remove the 'active' class
  $(document).click(function(event) {
    if (!$(event.target).closest(".main-box, .bars-btn").length) {
      $(".main-box").removeClass("active");
    }
  });

  // .menu-btns per active class ko handle karna
  $(".menu-btns").click(function(event) {
    event.stopPropagation();  // Prevent the click event from propagating to the document
    $(this).addClass('active');
    $(".menu").removeClass("active");
  });

  // Click outside the .menu-btns to remove the 'active' class and add 'active' to .menu
  $(document).click(function(event) {
    if (!$(event.target).closest('.menu-btns').length) {
      $('.menu-btns').removeClass('active');
      $(".menu").addClass("active");
    }
  });

  // Scroll event to remove the 'active' class from .menu-btns and add 'active' to .menu
  $(window).scroll(function() {
    $('.menu-btns').removeClass('active');
    $(".menu").addClass("active");
  });
});


function setButtonURL(){
    Tawk_API.toggle();
    }
    
    
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



$('.port-slider').slick({
  dots: false,
    arrows: false,
     infinite: true,
     autoplay: true,
        autoplaySpeed: 1000,
        speed: 1000,
  centerMode: true,
  centerPadding: '120px',
  slidesToShow: 5,
  responsive: [
    {
      breakpoint: 769,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('[data-targetit]').on('click',function () {
        $(this).siblings().removeClass('current');
        $(this).addClass('current');
        var target = $(this).data('targetit');
        $('.'+target).siblings('[class^="tabs"]').removeClass('current');
        $('.'+target).addClass('current');
        $('.slick-slider').slick('setPosition', 0);

    });



jQuery(document).ready(function($) {
  $('.slick.marquee').slick({
    speed: 10000,
    autoplay: true,
    autoplaySpeed: 0,
    centerMode: true,
    cssEase: 'linear',
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: true,
    initialSlide: 1,
    arrows: false,
    buttons: false,
    pauseOnHover: true  // Add this line to pause the slider on hover
  });
});

 $('.center-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        dots: false,
        speed: 300,
        centerPadding: '20px',
        infinite: true,
        autoplaySpeed: 2000,
        autoplay: true,
        responsive: [{
         breakpoint: 991,
         settings: {
             slidesToShow: 1,
             slidesToScroll: 1
         }
    }]
      });
      
      
var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
		cw[i].className = 'letter out';
  }, i*80);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
		nw[i].className = 'letter in';
  }, 340+(i*80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  
  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 4000);

document.addEventListener('DOMContentLoaded', (event) => {
    const toggle = document.getElementById('switch');

    // Check if there is a stored value and set the toggle state accordingly
    const savedToggleState = localStorage.getItem('privacyToggleState');
    if (savedToggleState === 'on') {
        toggle.checked = true;
    } else {
        toggle.checked = false;
    }

    // Listen for changes on the toggle button
    toggle.addEventListener('change', function() {
        if (this.checked) {
            localStorage.setItem('privacyToggleState', 'on');
        } else {
            localStorage.setItem('privacyToggleState', 'off');
        }
    });
});    