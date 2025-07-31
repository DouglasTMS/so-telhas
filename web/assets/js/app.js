$(function () {

    HOME_PATH = $('meta[name="home_path"]').attr('content');

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
        spOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.phone_mask').mask(SPMaskBehavior, spOptions);

    //---------------------------------------------------------------------------------------------
    // Menu mobile --------------------------------------------------------------------------------
    //---------------------------------------------------------------------------------------------
    $(".mobile-icon__box").on("click", function (e) {
        e.preventDefault();
        $(this).toggleClass("active");
        $(".menu").toggleClass("active");
        $(".menu-icon-mobile__box p").toggleClass("off");
    });

    //---------------------------------------------------------------------------------------------
    // Open and Close WhatsApp Phones List --------------------------------------------------------
    //---------------------------------------------------------------------------------------------
    $(".whatsapp-fixed__open-list").on("click", function (e) {
        e.preventDefault();
        $(this).toggleClass("active");
        let iconUri = $(this).data("icon-uri");

        if ($(this).hasClass("active")) {
            $(this).find("img").attr("src", iconUri + "/whatsapp-fixed-close.svg");
        } else {
            $(this).find("img").attr("src", iconUri + "/whatsapp-fixed.svg");
        }
        $(".whatsapp-fixed__list-box").toggleClass("visible");
    });

    /**
    * Função de mensagem
    */
    function message(type, message) {
        $(".message").empty().html("<header class='message__type " + type + "'></header><p class='message__text'>" + message + "</p><p class='message__close'>Fechar</p>").fadeIn(200).css("display", "flex");
    }

    /**
    * Fechar modal de mensagem
    */
    $(".message").on("click", ".message__close", function () {
        $(".message").fadeOut(300, function () {
            $(".alpha").fadeOut(300);
        });
    });

    /**
     * Slider
     */
    $(".slider__controls").on("click", "span", function () {

        clearInterval(autoInterval);

        let positon = $(this).index() + 1;

        $(".slider__controls span").removeClass("active");
        $(this).addClass("active");

        if (positon === 1) {
            $(".slider__box").css("margin-left", 0);
            return;
        }

        if (positon === 2) {
            $(".slider__box").css("margin-left", "-100%");
            return;
        }

        if (positon === 3) {
            $(".slider__box").css("margin-left", "-200%");
            return;
        }
    });

    countAutoSlider = 1;

    function autoSlider() {
        autoInterval = setInterval(() => {

            $(".slider__controls span").removeClass("active");

            if (countAutoSlider !== 3) {
                $(".slider__box").css("margin-left", "-=" + countAutoSlider + "00%");
                countAutoSlider++;
                $(".slider__controls ." + countAutoSlider).addClass("active");
            } else {
                $(".slider__box").css("margin-left", "0");
                countAutoSlider = 1;
                $(".slider__controls ." + countAutoSlider).addClass("active");
            }

        }, 5000);
    }
    autoSlider();


    $("body").on("click", ".no-action", (e) => {
        e.preventDefault();
        return;
    });

    /**
     * Perguntas frequentes - Effect.
     */
    $(".answers__box__item").click(function (e) {
        e.preventDefault();
        $(".answers__box__item").removeClass("active");
        $(this).toggleClass("active");
    });
});