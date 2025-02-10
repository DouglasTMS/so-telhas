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
        $(".whatsapp-conversion__lead-fields").toggleClass("visible");
    });

    /**
     * Modal Conversion | Send Lead Data
     */
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
            },
            success: function (e) {

                $(".whatsapp-conversion__lead-fields__main__form").fadeOut(100);

                if (e.error) {
                    $(".whatsapp-conversion__lead-fields__main__message").fadeIn(300).css("display", "flex");
                    $(".whatsapp-conversion__lead-fields__main__message p").text(e.message);
                    return;
                }

                if (e.success) {
                    $(".whatsapp-conversion__lead-fields__main__sellers-list").fadeIn(300).css("display", "flex");
                    $(".whatsapp-conversion__lead-fields__header p").text("Selecione seu Atendente!");
                    return;
                }
            },
            complete: function () {

            }
        });
    });

    /**
     * Modal Conversion | Voltar Mensagem
     */
    $(".whatsapp-conversion__lead-fields__main__message a").on("click", function (e) {
        e.preventDefault();
        $(".whatsapp-conversion__lead-fields__main__message").fadeOut(300, function (e) {
            $(".whatsapp-conversion__lead-fields__main__form").fadeIn(300);
        });
    });


});