$(document).ready(function(){

    // toggle menu/navbar script 
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");

    });
    // typing animation script
    var typed =new Typed(".typing",{
        strings:["Spark"],
        typeSpeed:90,
        backSpeed:50,
        loop:true
    });

  
});