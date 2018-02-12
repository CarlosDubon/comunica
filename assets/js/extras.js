$(document).ready(main);

function main(){
    var $screen = $(window).height();
    
    $('.toggle-trigger').click(function(){
        if($(this).children('.toggle').is(':hidden')){
            $(this).children('#trigger').removeClass('glyphicon-chevron-down');
            $(this).children('#trigger').addClass('glyphicon-chevron-up');
           $(this).children('.toggle').slideToggle();

        }else{
            $(this).children('#trigger').removeClass('glyphicon-chevron-up')
            $(this).children('#trigger').addClass('glyphicon-chevron-down'); 
           $(this).children('.toggle').slideToggle();

        }
       
    });
    
    $counter = 0;
    $(window).scroll(function(){
        var Position = window.scrollY;
        if(Position>1){
            $('.ScrollUp').fadeIn('fast');
        }else{
           $('.ScrollUp').fadeOut('fast'); 
        }
    });
    $('.ScrollUp').click(function(){
        $('html, body').animate({
           scrollTop:0 
        }, 'slow');
    });
    
}