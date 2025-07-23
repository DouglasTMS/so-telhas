<?php

namespace Source\Controllers;

use Source\Core\View;
use Source\Models\Products;
use Source\Supports\Seo;
use Source\Supports\Email;
use Source\Models\Lead;
use Source\Models\Newsletter;
use Source\Models\Variations;
use Source\Models\Details;
use Source\Models\Benefits;
use Source\Models\SellersWhatsApp;
use Source\Supports\SiteMap;

class Web
{
    private $view;
    protected $seo;
    protected $menu;

    public function __construct()
    {
        $this->view = new View();
        $this->seo  = new Seo();
    }

    /**
     * Página home.
     */
    public function home(?array $data)
    {
        echo $this->view->render("pages/home", [
            "header" => $this->seo->render(CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "headerPhone" => "(62) 3300-0460",
            "products" => (new Products())->get("ORDER BY rand() LIMIT :limit", "limit=4"),
            "whatsapp_form" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "titleType" => 5
        ]);
    }

    /**
     * Página lista Telhas Termoacústica.
     */
    public function thermoacoustics()
    {
        echo $this->view->render("pages/products", [
            "header" => $this->seo->render("Conheça nossas Telhas Termoacústicas | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "products" => (new Products())->get("WHERE type = :type", "type=1"),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(62) 3300-0460",
            "whatsapp_form" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1")
        ]);
    }

    /**
     * Página de Telha Termoacústica.
     */
    public function thermoacousticsView(?array $data)
    {

        $product = (new Products())->get("WHERE uri = :uri", "uri={$data['uri']}");

        if (empty($product)) {
            header("Location: " . CONF_URL_BASE);
            return;
        }

        echo $this->view->render("pages/product-view", [
            "header" => $this->seo->render($product[0]->name, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "data" => $product[0],
            "products" => (new Products())->get("ORDER BY rand() LIMIT :limit", "limit=3"),
            "variations" => (new Variations())->get("WHERE product_id = :product_id", "product_id={$product[0]->id}"),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(62) 3300-0460",
            "whatsapp_form" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1")
        ]);
    }

    /**
     * Página lista Telhas Termoacústica.
     */
    public function metallic(array $data)
    {

        $product = (new Products())->get("WHERE uri = :uri", "uri={$data['uri']}");

        var_dump($product);

        if (empty($product)) {
            header("Location: " . CONF_URL_BASE);
            return;
        }


        echo $this->view->render("pages/products", [
            "header" => $this->seo->render("Conheça nossas Telhas Termoacústicas | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "products" => (new Products())->get("WHERE type = :type", "type=1"),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(62) 3300-0460",
            "whatsapp_form" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1")
        ]);
    }






    /**
     * Página de visualização do Isopainel.
     */
    public function productIsopainel(?array $data)
    {

        $product = (new Products())->get("WHERE uri = :uri", "uri={$data['isopainel']}");

        var_dump($product);

        if (empty($product)) {
            header("Location: " . CONF_URL_BASE);
            return;
        }

        echo $this->view->render("pages/product-view", [
            "header" => $this->seo->render($product[0]->name, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "data" => $product[0],
            "products" => (new Products())->get("ORDER BY rand() LIMIT :limit", "limit=3"),
            "variations" => (new Variations())->get("WHERE product_id = :product_id", "product_id={$product[0]->id}"),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(62) 3300-0460",
            "whatsapp_form" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1")
        ]);
    }

    /**
     * Página lista de Perfis.
     */
    public function productPerfis(?array $data)
    {
        echo $this->view->render("pages/products", [
            "header" => $this->seo->render("Conheça nossos Perfis | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "products" => (new Products())->get("WHERE type = :type", "type=4"),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(62) 3300-0460",
            "whatsapp_form" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1")
        ]);
    }



    /**
     * Página quem somos.
     */
    public function whoWeAre(?array $data)
    {
        echo $this->view->render("pages/who-we-are", [
            "header" => $this->seo->render("Conheça Melhor a Só Telhas | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(62) 3300-0460",
            "whatsapp_form" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1")
        ]);
    }

    /**
     * Página orçamento.
     */
    public function leads(?array $data)
    {
        echo $this->view->render("pages/leads", [
            "header" => $this->seo->render(CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(62) 3300-0460",
            "whatsapp_form" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1"),
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1")
        ]);
    }

    /**
     * Página sucesso.
     */
    public function success(?array $data)
    {
        echo $this->view->render("pages/success", [
            "header" => $this->seo->render(CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(62) 3300-0460",
            "contact_phone" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand() LIMIT :limit", "status=1&limit=1")
        ]);
    }

    /**
     * PAINEL FAKE wpp.
     */
    public function wpp(?array $data)
    {
        echo $this->view->render("pages/wpp", [
            "header" => null,
            "sellers_whatsapp" => (new SellersWhatsApp())->get()
        ]);
    }

    /**
     * Ajax.
     */
    public function ajax(?array $data)
    {



        /**
         * Ativar e desativar whatsapp de vendedor.
         */
        if ($data["action"] == "activeWhatsAppSeller") {


            /**
             * Verificação e atualização do status desejado.
             */
            $status = ($data["status"] == 1 ? 0 : 1);

            /**
             * Atualizar status no banco de dados.
             */
            $updateStatus = (new SellersWhatsApp())->updateSellerStatus($data["id"], $status);
            $response["newStatus"] = $status;

            echo json_encode($response);
            return;
        }

        /**
         * WhatsApp Conversion.
         */
        if ($data["action"] == "whatsapp-conversion") {


            if (empty($data["name"])) {
                $response["message"] = "Por favor, informe seu nome.";
                $response["error"] = "true";
                echo json_encode($response);
                return;
            }

            if (empty($data["phone"])) {
                $response["message"] = "Por favor, informe seu telefone.";
                $response["error"] = "true";
                echo json_encode($response);
                return;
            }

            /**
             * Salvar no banco de dados
             */

            $lead = (new Lead())->setData(
                $data["name"],
                $data["phone"]
            )->save();

            /**
             * Mail queue
             */
            $mailBody = (new View(__DIR__ . "/../../shared/email"))->render("whatsapp-conversion", [
                "data" => (object) $data,
                "whatsappLink" => whatsapp($data["phone"])
            ]);

            $email = new Email();
            $sendMail = $email->bootstrap("Lead via Site | WhatsApp", $mailBody, "leads@sotelhas.ind.br", $data["name"])->queue();


            /**
             * Enviar pra página de sucesso
             */
            $response["success"] = "true";
            echo json_encode($response);
            return;
        }

        /**
         * Escolher qual vendedor vai receber o lead.
         */
        if ($data["action"] == "choicheWhatsAppSeller") {
            $seller = (new SellersWhatsApp())->get("WHERE status = :status ORDER BY updated_at ASC LIMIT :limit", "status=1&limit=1");

            $response["whatsapp"] = "https://api.whatsapp.com/send/?phone=" . whatsapp($seller[0]->phone) . "&text=Olá, {$seller[0]->name}! Eu estava no seu site e gostaria de tirar algumas dúvidas.";

            /**
             * Atualizar o vendedor.
             */
            $updateSeller = (new SellersWhatsApp())->updateUpdatedAt($seller[0]->id);

            echo json_encode($response);
            return;
        }

        if ($data["action"] == "createLead") {

            if (empty($data["name"])) {
                $response["message"] = "Por favor, informe seu nome.";
                $response["error"] = "error";
                echo json_encode($response);
                return;
            }

            if (empty($data["phone"])) {
                $response["message"] = "Por favor, informe seu telefone.";
                $response["error"] = "error";
                echo json_encode($response);
                return;
            }

            /**
             * Salvar no banco de dados
             */

            $lead = (new Lead())->setData(
                $data["name"],
                $data["phone"]
            )->save();

            /**
             * Mail queue
             */
            //$mailBody = (new View(__DIR__ . "/../../shared/email"))->render("contact", [
            //"data" => (object) $data,
            //"whatsappLink" => whatsapp($data["phone"])
            //]);

            //$email = new Email();
            //$sendMail = $email->bootstrap("Lead via Site", $mailBody, CONF_MAIL, CONF_SITE_NAME)->queue();


            /**
             * Enviar pra página de sucesso
             */
            $response["redirect"] = "yes";
            echo json_encode($response);
            return;
        }

        if ($data["action"] == "newsletter") {

            if (empty($data["email"])) {
                $response["message"] = "Por favor, informe seu e-mail.";
                $response["error"] = "error";
                echo json_encode($response);
                return;
            }

            if (!is_email($data["email"])) {
                $response["message"] = "Por favor, informe um e-mail válido.";
                $response["error"] = "error";
                echo json_encode($response);
                return;
            }

            if (empty($data["name"])) {
                $response["message"] = "Por favor, informe seu nome.";
                $response["error"] = "error";
                echo json_encode($response);
                return;
            }

            $newsletter = new Newsletter();

            $checkEmail = $newsletter->checkEmail($data["email"]);

            if (!empty($checkEmail)) {
                $response["message"] = "Esse e-mail já está cadastrado.";
                $response["error"] = "error";
                echo json_encode($response);
                return;
            }

            $save = $newsletter->setData($data["name"], $data["email"])->save();

            if (!$save) {
                $response["message"] = "Desculpe! Houve um erro inesperado.";
                $response["error"] = "error";
                echo json_encode($response);
                return;
            }

            $response["redirect"] = "yes";
            echo json_encode($response);
            return;
        }
    }
}
