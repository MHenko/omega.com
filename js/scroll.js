$(function(){

$('.scroll').click(function() {
        var section = $('.' + this.id);
        $('html, body').animate({scrollTop: section.offset().top},'slow');
    });
    
    $('.scroll-top').click(function(){
        $('html,body').animate({scrollTop: 0},'slow');
    });

});