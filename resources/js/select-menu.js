import $ from 'jquery';


let totalPrice = 0;
$('.choose').click(function(e) {
    var className = e.target.className;
    var temp = className.split(" ");
    var index = temp[1];
    // var text = $('.name.item'+index).text()
    var selectedMenu = $(`.name.${index}`).text();
    var item = selectedMenu.split('|');
    var price = item[1].trim();
    totalPrice += price  * 1000;
    $('.total').text(`총합계 : ${totalPrice}원`)
    $('.menu-bar-item').append('<li class="menu-item"><a>&nbsp;<img src="image/minus.png" class="minus">&nbsp;'+selectedMenu+'</a></li>')
})

