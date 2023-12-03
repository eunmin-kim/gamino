import $ from 'jquery';
var eventSource = new EventSource('/stream',{withCredentials:true});
let max = false;
let tmp = 0;
eventSource.addEventListener('wait',function(event) {

    var data = JSON.parse(event.data);
    console.log(data);
    var num = data.waiting_number;
    $('.order-count').text(num);
    var startNum = data.start.waiting_id;
    var currentNum = data.session_number[0]?.waiting_id;
    if (currentNum === undefined)
    {
        $('.order-state').text(0);
        $('.waiting-progress').val(100);
        return;
    }
    // console.log(currentNum);
    var lastNum = startNum + num;
    var cNum = currentNum - startNum + 1;
    // console.log(cNum);
    $('.order-state').text(cNum);
    $('.waiting-progress').attr('max',num);
    tmp = num;
    max = true;

    var getVal = tmp / cNum;

    $('.waiting-progress').val(getVal);
})
