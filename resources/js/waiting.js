import $ from 'jquery';

/**
 * 대기 등록
 */

$('.ready-section').hide();
$('.umm').hide();
$('.order-inhouse').click(()=> {
    localStorage.setItem("where","inhouse")
    $('.order-section').hide();
    $('.ready-section').show();
})
$('.order-visit').click(()=> {
    localStorage.setItem("where","visit")
    $('.order-section').hide();
    $('.ready-section').show();
})

/**
 * 메뉴 선택
 */

$('.select-menu').click(function() {
    window.location.href='/menu'
})
