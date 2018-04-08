// auto slide code 
$(document).ready(function () {
$('.slider .active').delay().fadeIn();
    (function autoSlider() {
        $('.slider .active').each(function () {
            if (!$(this).is(':last-child')) {  
                $(this).delay(3000).fadeOut(1000, function () {
                    $(this).removeClass('active').next().addClass('active').fadeIn(500);
                    autoSlider();
                });
            }
            else {
                $(this).delay(3000).fadeOut(2000, function () {
                    $(this).removeClass('active');
                    $('.slider div').eq(0).addClass('active').fadeIn(1000);
                    autoSlider();
                });
            }
        });
    }());
    });