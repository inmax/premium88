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

});