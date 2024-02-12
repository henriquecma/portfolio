/*!
* Start Bootstrap - Full Width Pics v5.0.4 (https://startbootstrap.com/template/full-width-pics)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-full-width-pics/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

$('a[href^="#"]').click(function(){

var the_id = $(this).attr("href");

    $('html, body').animate({
        scrollTop:$(the_id).offset().top
    }, 'slow');

return false;});


window.scrollTo({ top: 900, behavior: 'smooth' });



