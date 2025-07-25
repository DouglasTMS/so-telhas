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

    $(".header__box__whatsapp").on("click", function (e) {
        e.preventDefault();
        $(".whatsapp-fixed__open-list").toggleClass("active");
        let iconUri = $(this).data("icon-uri");

        if ($(".whatsapp-fixed__open-list").hasClass("active")) {
            $(".whatsapp-fixed__open-list").find("img").attr("src", iconUri + "/whatsapp-fixed-close.svg");
        } else {
            $(".whatsapp-fixed__open-list").find("img").attr("src", iconUri + "/whatsapp-fixed.svg");
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
    * Cadastro de leads.
    */
    $('.lead__form').submit(function (e) {
        e.preventDefault();

        let name = $(this).find('input[name="name"]').val();
        let phone = $(this).find('input[name="phone"]').val();
        let email = $(this).find('input[name="email"]').val();
        let whatsappseller = $(this).find('input[name="whatsappseller"]').val();

        $.ajax({
            url: HOME_PATH + "/ajax",
            data: "action=createLead&name=" + name + "&phone=" + phone + "&email=" + email,
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                $(".load").fadeIn(200);
                $(".alpha").fadeIn(200);
            },
            success: function (e) {

                if (e.redirect === "yes") {
                    //window.location.href = HOME_PATH + "/obrigado";
                    $(".load").fadeOut(200);
                    $(".alpha").fadeOut(200);
                    window.open('https://api.whatsapp.com/send/?phone=' + whatsappseller + '&text=Olá! Eu estava no site e gostaria de tirar algumas dúvidas.', '_blank');
                    return;
                }
                else {
                    $(".load").fadeOut(200, function () {
                        message(e.error, e.message);
                    });
                }
            },
            complete: function () {

            }
        });
    });

    /**
   * Cadastro de leads.
   */
    $('.newsletter__form').submit(function (e) {
        e.preventDefault();

        let name = $(this).find('input[name="name"]').val();
        let email = $(this).find('input[name="email"]').val();

        $.ajax({
            url: HOME_PATH + "/ajax",
            data: "action=newsletter&name=" + name + "&email=" + email,
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                $(".load").fadeIn(200);
                $(".alpha").fadeIn(200);
            },
            success: function (e) {

                if (e.redirect === "yes") {
                    $(".load").fadeOut(200, function () {
                        message("success", "Obrigado! Seu e-mail foi cadastrado com sucesso.");
                        $('.newsletter__form').find('input[name="name"]').val("");
                        $('.newsletter__form').find('input[name="email"]').val("");
                        return;
                    });

                }
                else {
                    $(".load").fadeOut(200, function () {
                        message(e.error, e.message);
                    });
                }
            },
            complete: function () {

            }
        });
    });

    /**
    * Fechar modal de mensagem
    */
    $(".message").on("click", ".message__close", function () {
        $(".message").fadeOut(300, function () {
            $(".alpha").fadeOut(300);
        });
    });

    /**
     * Modal Conversion | Open
     */
    $(".open-modal-whatsapp-conversion .whatsapp-conversion__icon, .header__box__whatsapp").on("click", function (e) {
        e.preventDefault();
        //$(".whatsapp-conversion__lead-fields").toggleClass("visible");

        $.ajax({
            url: HOME_PATH + "/ajax",
            data: "action=choicheWhatsAppSeller",
            type: "POST",
            dataType: "json",
            beforeSend: function () {

            },
            success: function (e) {

                //window.open(e.whatsapp, '_blank');
                window.location.href = e.whatsapp;

            },
            complete: function () {
            }
        });

    });

    /**
     * Efeito de ativar e desativar whatsapp do vendedor.
     */
    $(".wpp span").on("click", function (e) {
        e.preventDefault();
        $(this).find("i").toggleClass("active");
        let sellerId = $(this).data("id");
        let sellerStatus = $(this).data("status");

        $.ajax({
            url: HOME_PATH + "/ajax",
            data: "action=activeWhatsAppSeller&id=" + sellerId + "&status=" + sellerStatus,
            type: "POST",
            dataType: "json",
            success: function (e) {
                $(".whatsapp-sellers-status-change-" + sellerId).data("status", e.newStatus);
            }
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

    /**
     * Modal Conversion | Send Lead Data
     */

    /** 
    $(".send-data-whatsapp-conversion").on("click", function (e) {
        e.preventDefault();

        let name = $(".whatsapp-conversion__lead-fields__main__form").find('input[name="whatsapp-conversion-name"]').val();
        let phone = $(".whatsapp-conversion__lead-fields__main__form").find('input[name="whatsapp-conversion-phone"]').val();

        if (name == "") {
            $(".whatsapp-conversion__lead-fields__main__form").fadeOut(300, function (e) {
                $(".whatsapp-conversion__lead-fields__main__message").fadeIn(300).css("display", "flex");
                $(".whatsapp-conversion__lead-fields__main__message p").text("Por favor, informe seu nome!");
            });
            return;
        }

        if (phone == "") {
            $(".whatsapp-conversion__lead-fields__main__form").fadeOut(300, function (e) {
                $(".whatsapp-conversion__lead-fields__main__message").fadeIn(300).css("display", "flex");
                $(".whatsapp-conversion__lead-fields__main__message p").text("Por favor, informe seu telefone!");
            });
            return;
        }

        $.ajax({
            url: HOME_PATH + "/ajax",
            data: "action=whatsapp-conversion&name=" + name + "&phone=" + phone,
            type: "POST",
            dataType: "json",
            beforeSend: function () {
                $(".whatsapp-conversion__lead-fields__main__form").fadeOut(100);
            },
            success: function (e) {

                if (e.success == "true") {
                    $(".whatsapp-conversion__lead-fields__main__sellers-list").fadeIn(100);
                    $(".whatsapp-conversion__lead-fields__header p").text("Selecione seu atendente!");
                }

                if (e.error == "true") {
                    $(".whatsapp-conversion__lead-fields__main__message").fadeIn(100).css("display", "flex");
                    $(".whatsapp-conversion__lead-fields__main__message p").text(e.message);
                    return;
                }


            },
            complete: function () {

            }
        });
    });
    */

    /**
     * Modal Conversion | Voltar Mensagem
     */
    /** 
    $(".whatsapp-conversion__lead-fields__main__message a").on("click", function (e) {
        e.preventDefault();
        $(".whatsapp-conversion__lead-fields__main__message").fadeOut(300, function (e) {
            $(".whatsapp-conversion__lead-fields__main__form").fadeIn(300);
        });
    });
    */

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