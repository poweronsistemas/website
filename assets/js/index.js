var blueCirclePosition = 1;
var blueCircleInterval;
$(document).ready(function() {
    headerTextAnimations();
    detectFormError();
    $('.ui.form').on('submit', function() {
        $('.ui.dimmer').addClass('active');
    });
    
    $('.services-summary').visibility({
        onOnScreen: function() {
            $('.services-summary .ui.card').transition({
                animation : 'fly left',
                duration  : 800,
                interval  : 200
            });
        }
    });
    $('.middle-block-message').visibility({
        onOnScreen: function() {
            $('.middle-block-message .column').transition({
                animation : 'drop',
                duration  : 400,
                interval  : 200
            });
        }
    });
    startBlueCircleInterval();
    
    $('a.block1').on('click', function() { 
        setBlueCirclePosition(1);
        blueCirclePosition = 1;
        clearInterval(blueCircleInterval);
        startBlueCircleInterval();
        $("html, body").stop().animate({ scrollTop: $('.middle-block-content.content1').offset().top - 80 }, 500, 'swing');
    });
    $('a.block2').on('click', function() { 
        setBlueCirclePosition(2); 
        blueCirclePosition = 2;
        clearInterval(blueCircleInterval);
        startBlueCircleInterval();
        $("html, body").stop().animate({ scrollTop: $('.middle-block-content.content2').offset().top - 80 }, 500, 'swing');
    });
    $('a.block3').on('click', function() { 
        setBlueCirclePosition(3); 
        blueCirclePosition = 3;
        clearInterval(blueCircleInterval);
        startBlueCircleInterval();
        $("html, body").stop().animate({ scrollTop: $('.middle-block-content.content3').offset().top - 80 }, 500, 'swing');
    });
    $('a.block4').on('click', function() { 
        setBlueCirclePosition(4);
        blueCirclePosition = 4;
        clearInterval(blueCircleInterval); 
        startBlueCircleInterval();
        $("html, body").stop().animate({ scrollTop: $('.middle-block-content.content4').offset().top - 80 }, 500, 'swing');
    });
    
    $('.ui.dropdown').dropdown();
    
});

function startBlueCircleInterval() {
    blueCircleInterval = setInterval(function() {
        if (blueCirclePosition == 4) {
            blueCirclePosition = 1;
        } else {
            blueCirclePosition += 1;
        }
        setBlueCirclePosition(blueCirclePosition);
    }, 15000);
}

function setBlueCirclePosition(position) {
    $('.blue-circle')
        .removeClass('position1 position2 position3 position4')
        .addClass('position' + position)
    ;
    $('.middle-block-content').transition('hide');
    
    $('.middle-block-content.content' + position).transition('fade');
    $('.middle-block-content.content' + position + ' .column img').transition('tada');
}

function headerTextAnimations() {
    var seconds = 10000;
    $('.text-header1').transition('fly up');
    setTimeout(function() {
        $('.text-header1').transition('fly up', 500, function() {
            $('.text-header2').transition('fly up');
            setTimeout(function() {
                $('.text-header2').transition('fly up', 500, function() {
                    $('.text-header3').transition('fly up');
                    setTimeout(function() {
                        $('.text-header3').transition('fly up', 500, function() { headerTextAnimations() });
                    }, seconds);
                });
            }, seconds);
        });
    }, seconds);
}

function detectFormError() {
    var query = getUrlVars();
    if ('error' in query) {
        $('#' + query.error).addClass('error');
        $('#' + query.error + ' .ui.message').addClass('visible');
    }
    for (var i in query) {
        if ($('#' + i).length > 0) {
            $('#' + i).val(decodeURIComponent(query[i]));
        }
    }
}