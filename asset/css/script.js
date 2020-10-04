$(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    
    
    $('.jumbotron .display-4').css({
        'transform' : 'translate(0px, ' + wScroll/12 +'%)'
    });
    $('.jumbotron textarea').css({
        'transform' : 'translate(0px, ' + wScroll/4 +'%)'
    });

    $('.jumbotron a').css({
        'transform' : 'translate(0px, ' + wScroll +'%)'
    });

    if ( wScroll > $('.features').offset().top -200  ) {
        $('.features .row2 .col-lg-3').css({
            'transform' : 'scale(1)'
        });    
    }
});