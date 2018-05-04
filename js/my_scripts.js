$(document).ready(function(){
    $('a[href^="#top"]').click(function(){
        var $element = $('a[name=' + $(this).attr('href').substr(1) + ']');
        if($element.length == 1) {
            $('html, body').animate({ scrollTop: $element.offset().top-130 }, 1000);
        }
        return false;
    });

    $('.go-anchor').click(function () {
        $('html, body').animate({
            scrollTop: $('#second-section').offset().top -130
        }, 800);
    });

    $('a[data-target^="anchor"]').on('click', function () {
        var target = $(this).attr('href'),

            bl_top = $(target).offset().top-120;

        $('body,html').animate({scrollTop: bl_top}, 1500);
        return false;
    });

});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://gpstracker-micro.com/thanks-page/';
}, false );
