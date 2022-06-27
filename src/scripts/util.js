$( document ).ready(function() {

    // consulta viacep

    $("input#cep").blur(function(){
        var cep = $(this).val().replace(/[^0-9]/, '');
        if(cep){
            var url = 'https://viacep.com.br/ws/'+cep+'/json/';
            $.ajax({
                url: url,
                dataType: 'jsonp',
                crossDomain: true,
                contentType: "application/json",
                success : function(json){
                    if(json.logradouro){
                        $('.resultado p').remove();
                        $('.resultado').append('<p>'+ json.logradouro +', '+
                            json.complemento +'</p><p>CEP: '+ json.cep +', '+ json.bairro +', '+ json.localidade +', '+ json.uf +'</p>');
                    } else {
                        $('.resultado p').remove();
                        $('.resultado').append('<p>Não conseguimos encontrar o seu CEP. Confira o numero e tente novamente.</p>');
                    }
                },
                error: function(){
                    $('.resultado p').remove();
                    $('.resultado').append('<p>Não conseguimos encontrar o seu CEP. Confira o numero e tente novamente.</p>');
                }
            });
        }
    });

    // form

    $('input , textarea').focus(function() {
        $(this).parent().addClass("focus")
    });

    $('input , textarea').bind('keyup', function() {
        $(this).parent().addClass("focus")
    });

    $('input , textarea').blur(function(){
        if( $(this).val() ) {} else {
            $(this).parent().removeClass('focus');
        }
    });

    // accordion

    $('.wrap-accordion .accordion .accordion-item .accordion-body a').click(function() {
        $(this).parent().removeClass('active');
        $(this).parent().parent().find('a').removeClass('active');
    });

    $('.wrap-accordion .accordion .accordion-item a').click(function() {
        $(this).toggleClass('active');
        $(this).parent().find('.accordion-body').toggleClass('active');
        $(this).parent().siblings().find('.accordion-body').removeClass('active');
    });

});

window.onload = function() {

    // slider

    $('.banner .images').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        appendDots: $('.banner')
    });

    // responsividade especifica

    var isMobile = $(window).width() <= 768,
        isTablet = $(window).width() <= 998,
        isDesktop = $(window).width() >= 1024,
        isDesktopMed = $(window).width() >= 1200,
        isDesktopMax = $(window).width() >= 1400;

    if (isMobile) {

        $('#carrousel ul').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            prevArrow: $('.carousel .arrows .left'),
            nextArrow: $('.carousel .arrows .right')
        });

    }


    if (isDesktop) {

        $('#carrousel ul').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            dots: false,
            prevArrow: $('.carousel .arrows .left'),
            nextArrow: $('.carousel .arrows .right')
        });

    }
};