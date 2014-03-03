$(function() {

  function selectProduct(item) {
    item = $(item);
    var cont = $('.item_detail');
    var data = item.attr('id');
    item.click(function() {
      $('.collection li').removeClass('active');
      $(this).addClass('active');
      var html = $('#item_' + data).html();
      cont.html(html);
    });
  }

  var items = $('.collection li');
  for (var i = 0;i<items.length; i++) {
    selectProduct(items[i]);
  }
  function navColec(){
        var menu = $('#menu').offset();
        var topm = menu.top - 110;
        $(document).scroll(function(){
          var scrollTop = $(document).scrollTop();
          var menu = $('#menu').offset();
          console.log(scrollTop);
          if(scrollTop >= 110){
            $('header').css({
              'position':'fixed',
              // 'transition': 'all 0.2s',
              'top': '-110px'
            });
            $('#menu').css({
              'position': 'fixed',
              'top': topm
            });
            $('#logo').css({
              'width': '180px',
              'transition': 'all 0.2s',
              'top': '70px',
              'left': '70px'
            });
          }
          if(scrollTop < 110){
            $('header').css({
              'position':'absolute',
              'top': '0'
            });
            $('#menu').css({
              'position':'absolute',
              'top': menu.top
            });
            $('#logo').css({
              'width': '280px',
              'top': '-40px',
              'left': '30px'
            });
          }
        });
      }
    //RESPONSIVE

    function desplegar() {
      var menu = $('.icon-menu');
      menu.click(function() {
        $('.menu-res').toggleClass('active');
      })
    }
    desplegar();

    function scrollUp(){
      $("#back-top").hide();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('#back-top').fadeIn();
          } else {
          $('#back-top').fadeOut();}
        });
      $('#back-top a').click(function () {
        $('body,html').animate({scrollTop: 0}, 500);
          return false;});
    }
  scrollUp();

  function redireccionar() {
    if (window.innerWidth <= 768) {
      $('#linkWine').attr('href','trivium-collection-smartphone.php');
      $('#linkCosmeticsAloe').attr('href','cosmetics-aloe-smartphone.php');
      $('#LinkCosmeticsOlive').attr('href','cosmetics-oil-smartphone.php');
      $('#linkWinePecinha').attr('href','senorio-pecina-smartphone.php');
      $('#linkGourmet').attr('href','don-bocarte-smartphone.php');
    }
  }
  redireccionar();
  
  function slide() {
    var left = parseInt($('div.aloe ul li:first-child').css('margin-left'));
    $('.collection.aloe').append('<span class="next">');
    $('.collection.aloe').prepend('<span class="prev">');

    $('.prev').click(function() {
      if (left != 0) {
        $('div.aloe ul li:first-child').css('margin-left', left + 654);
        left = left + 654;
      }
    });
    $('.next').click(function() {
      if( left > - 1308 ) {
        $('div.aloe ul li:first-child').css('margin-left', left - 654);
        left = left - 654;
      }
    });

  }
  slide();


});