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
});