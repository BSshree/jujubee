(function() {
  
  var Menu = (function() {
    var burger = document.querySelector('.burger');
    var menu = document.querySelector('.menu');
    var menuList = document.querySelector('.menu__list');
    var brand = document.querySelector('.menu__brand');
    var menuItems = document.querySelectorAll('.menu__item');
    
    var active = false;
    
    var toggleMenu = function() {
      if (!active) {
        menu.classList.add('menu--active');
        menuList.classList.add('menu__list--active');
        brand.classList.add('menu__brand--active');
        burger.classList.add('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.add('menu__item--active');
        }
        
        active = true;
      } else {
        menu.classList.remove('menu--active');
        menuList.classList.remove('menu__list--active');
        brand.classList.remove('menu__brand--active');
        burger.classList.remove('burger--close');
        for (var i = 0, ii = menuItems.length; i < ii; i++) {
          menuItems[i].classList.remove('menu__item--active');
        }
        
        active = false;
      }
    };
    
    var bindActions = function() {
      burger.addEventListener('click', toggleMenu, false);
    };
    
    var init = function() {
      bindActions();
    };
    
    return {
      init: init
    };
    
  }());
  
  Menu.init();
  
}());

 $('#Clients').owlCarousel({
    center: true,
    loop:true,
    loop:true,
    margin:30,
    nav:false,
    autoplay:true,
    dots:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

      $('#Testimonial').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:false,
    dots:true,
    // navText: ["<i class='icon ion-ios-arrow-round-back'></i>", "<i class='icon ion-ios-arrow-round-forward'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
      $('#Projects').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
 
  $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 100){
      $("header").addClass("shrink");
    }
    else
    {
      $("header").removeClass("shrink");
    }
  });

   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
  wow.init();
  
  $(".arrow").on('click',function() {
    $('html, body').animate({
        'scrollTop' : $(".map").position().top
    });
});

       $( document ).ready(function() {
  $('.hoeit1').css('position','relative');
  setInterval(function(){

  $('.hoeit1').animate({
      right: '-=25'
    }, 1200);
  $('.hoeit1').animate({
      right: '+=25'
    }, 1200);
  }, 2400);
});