$(document).ready(function() {
    footerCommentsAnimations();    
    $('.center-image').transition('tada');
    $('.mobile-menu .ui.dropdown').dropdown();
});

function footerCommentsAnimations() {
    var seconds = 15000;
    $('.comment1').transition('fade');
    setTimeout(function() {
        $('.comment1').transition('fade', 500, function() {
            $('.comment2').transition('fade');
            setTimeout(function() {
                $('.comment2').transition('fade', 500, function() {
                    $('.comment3').transition('fade');
                    setTimeout(function() {
                        $('.comment3').transition('fade', 500, function() {
                            $('.comment4').transition('fade');
                            setTimeout(function() {
                                $('.comment4').transition('fade', 500, function() { footerCommentsAnimations() });
                            }, seconds);
                        });
                    }, seconds);
                });
            }, seconds);
        });
    }, seconds);
}

function getUrlVars() {
    var vars = [], hash, value;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    if (hashes.length === 1) {
        return [];
    }
    for(var i = 0; i < hashes.length; i++) {
        hash = i in hashes ? hashes[i].split('=') : [];
        value = 1 in hash ? hash[1].split('#') : '';
        vars[hash[0]] = value[0];
    }
    
    return vars;
}