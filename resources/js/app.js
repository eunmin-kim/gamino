import './bootstrap';
import $ from 'jquery';


/**
 * 비밀번호 검증 join.blade.php
 * @type {Element}
 */
const password = document.querySelector(".join-pw");
const passwordConfirm = document.querySelector('.join-pw2');
let pass = "";
password.onchange = (e) => {
    pass = e.target.value;
}
passwordConfirm.onchange = (e) => {
    if (pass != e.target.value)
    {
        alert("비밀번호가 다릅니다.")
        password.value = "";
        passwordConfirm.value = "";
    }

}
