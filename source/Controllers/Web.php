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
            "headerPhone" => "(65) 3686-3804",
            "products" => (new Products())->get("ORDER BY rand() LIMIT :limit", "limit=3"),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1")

        ]);
    }

    /**
     * Página lista de produtos.
     */
    public function products(?array $data)
    {
        echo $this->view->render("pages/products", [
            "header" => $this->seo->render("Conheça nossas Telhas | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "products" => (new Products())->get(),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(65) 3686-3804"
        ]);
    }

    /**
     * Página produto.
     */
    public function productView(?array $data)
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
            "details" => (new Details())->get("WHERE product_id = :product_id", "product_id={$product[0]->id}"),
            "benefits" => (new Benefits())->get("WHERE product_id = :product_id", "product_id={$product[0]->id}"),
            "sellers_whatsapp" => (new SellersWhatsApp())->get("WHERE status = :status ORDER BY rand()", "status=1"),
            "headerPhone" => "(65) 3686-3804"
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
            "headerPhone" => "(65) 3686-3804"
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
            "headerPhone" => "(65) 3686-3804"
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
            "headerPhone" => "(65) 3686-3804"
        ]);
    }

    /**
     * Ajax.
     */
    public function ajax(?array $data)
    {
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


            /**
             * Salvar no banco de dados
             */

            $lead = (new Lead())->setData(
                $data["name"],
                $data["phone"],
                $data["email"]
            )->save();

            /**
             * Mail queue
             */
            $mailBody = (new View(__DIR__ . "/../../shared/email"))->render("contact", [
                "data" => (object) $data,
                "whatsappLink" => whatsapp($data["phone"])
            ]);

            $email = new Email();
            $sendMail = $email->bootstrap("Lead via Site", $mailBody, CONF_MAIL, CONF_SITE_NAME)->queue();


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
