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
              // 'transition': 'all 0.5s',
              'top': '-110px'
            });
            $('#menu').css({
              'position': 'fixed',
              'top': topm
            });
            $('#logo').css({
              'width': '180px',
              'transition': 'all 0.2s',
              'top': '110px',
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
              'top': '0',
              'left': '30px'
            });
          }
        });
      }
    navColec();
});