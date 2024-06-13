AOS.init();

$('.testimonial-items').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
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

$('.main-services').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        500:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
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

// =========== scroll =======

window.onscroll = function () { myFunction() };

var header = document.querySelector(".bottom-header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }

};

// ========== menu ==========

var faBar = document.querySelector(".menu-icon");
var faSolid = document.querySelector(".hm");
// console.log(faSolid);
var menu = document.querySelector(".primary-menu");

var x = 0;
// console.log(faBar);
faBar.addEventListener("click", () => {
  if (x == 0) {
    menu.classList.toggle("active");

    faSolid.classList.remove("fa-bars");
    faSolid.classList.add("fa-xmark");
    x = 1;
  } else {
    menu.classList.toggle("active");

    faSolid.classList.remove("fa-xmark");
    faSolid.classList.add("fa-bars");
    x = 0;
  }
});