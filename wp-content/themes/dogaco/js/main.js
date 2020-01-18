(function() {
//   $('#menu-item-7 > a').each(function() {
//      $(this).attr('href', $(this).attr('href') + "javascript:void(0)");
//    });

  // スライドショー
  const setImage = [
    "https://dogaco-trimming.com/wp-content/themes/dogaco/img/header-img01.png",
    "https://dogaco-trimming.com/wp-content/themes/dogaco/img/header-img02.png",
    "https://dogaco-trimming.com/wp-content/themes/dogaco/img/header-img03.png",
    "https://dogaco-trimming.com/wp-content/themes/dogaco/img/header-img04.png",
  ];
  const view = document.getElementById('view');
  const next = document.getElementById('next');

  let list;
  let image;
  let current = 0;
  let clickBtn = true;

  function createSlide() {
    for (let i = 0; i < setImage.length; i++) {
      list = document.createElement('li');
      image = document.createElement('img');
      image.src = setImage[i];
      list.appendChild(image);
    }
  }
  createSlide()

  next.addEventListener('click', function() {
    if (clickBtn === true) {
      clickBtn = false;
      view.classList.add("appear");
      current++;
      if (current > setImage.length - 1) {
        current = 0;
      }
      view.src = setImage[current];
      setTimeout('view.classList.remove("appear");', 2100);
      setTimeout(function() {
        clickBtn = true;
      }, 2100);
    } else {
      return false;
    }
  });

  function autoPlay() {
    setTimeout(function() {
      next.click();
      autoPlay();
    }, 3000);
  }
  window.onload = autoPlay();

  //ハンバーガーメニュー
  function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('js-hamburger');
    var blackBg = document.getElementById('js-black-bg');

    hamburger.addEventListener('click', function() {
      body.classList.toggle('nav-open');
    });
    blackBg.addEventListener('click', function() {
      body.classList.remove('nav-open');
    });
  }
  toggleNav();

  //サブメニュー
  $(function() {
    $('#menu-item-7 a').click(function() {
      $(this).next('ul').slideToggle();
    });

    $('.menu-item-7').click(function() {
      $('.menu-item-has-children img').toggleClass('menu-about__rotate');
    });
  });


  //フェードイン
  $(window).on('load scroll', function() {

    var box = $('.fadeIn');
    var animated = 'animated';

    box.each(function() {

      var boxOffset = $(this).offset().top;
      var scrollPos = $(window).scrollTop();
      var wh = $(window).height();

      if (scrollPos > boxOffset - wh + 130) {
        $(this).addClass(animated);
      }
    });
  });

  //footprint-header
  $(window).on('load scroll', function() {

    var foot_header1 = $('.footprint-header1');
    var foot_header2 = $('.footprint-header2');
    var foot_header3 = $('.footprint-header3');
    var foot_header4 = $('.footprint-header4');
    var foot_header5 = $('.footprint-header5');
    var foot_header6 = $('.footprint-header6');

    foot_header1.each(function() {
      $(this).animate({
        opacity: 1
      }, 1000);
    });
    foot_header2.each(function() {
      $(this).animate({
        opacity: 1
      }, 1300);
    });
    foot_header3.each(function() {
      $(this).animate({
        opacity: 1
      }, 1600);
    });
    foot_header4.each(function() {
      $(this).animate({
        opacity: 1
      }, 1900);
    });
    foot_header5.each(function() {
      $(this).animate({
        opacity: 1
      }, 2200);
    });
    foot_header6.each(function() {
      $(this).animate({
        opacity: 1
      }, 2500);
    });
  });

  //footprint
  $(window).on('load scroll', function() {

    var foot = $('.footprint');
    var forward = 'forward';

    foot.each(function() {

      var footOffset = $(this).offset().top;
      var scrollPosition = $(window).scrollTop();
      var winhei = $(window).height();

      if (scrollPosition > footOffset - winhei + 70) {
        $(this).addClass(forward);
      }
    });
  });

  //pagetop
  $(function() {
    var topBtn = $('#page-top');
    topBtn.click(function() {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
      return false;
    });
  });

  //GALLERY-slideshow
  $('.slider').slick({
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [{
      breakpoint: 1024,
      settings: { //601px～1024pxでは3画像表示
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    }, {
      breakpoint: 896,
      settings: { //481px～600pxでは2画像表示
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 650,
      settings: { //480px以下では1画像表示
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

})();
