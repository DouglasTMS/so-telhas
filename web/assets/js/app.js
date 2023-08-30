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
    $(".menu__mobile-icon__box").on("click", function (e) {
        e.preventDefault();
        $(this).toggleClass("active");
        $(".menu__box").toggleClass("active");
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
});