require("./bootstrap");
import $ from 'jquery';
window.$ = window.jQuery = $;
import 'jquery-ui/ui/widgets/datepicker.js';
$('.datepicker').datepicker();


 const member = document.querySelector(".member");

// HIDE OR SHOW THE MEMBER DETAILS

member.addEventListener("click", function (e) {
    e.preventDefault();
    const btn = e.target.parentElement.parentElement.querySelector('.member__name').querySelector('.btn__member-details');

    const details = e.target.parentElement.parentElement.querySelector('.member__details');

    console.log(btn);
    if (e.target === btn) {
        $(details).slideToggle();
    } else {
        return;
    }
});




