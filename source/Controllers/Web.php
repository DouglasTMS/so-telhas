<?php

namespace Source\Controllers;

use Source\Core\View;
use Source\Models\Products;
use Source\Supports\Seo;
use Source\Supports\Email;
use Source\Models\Lead;

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
            "products" => (new Products())->get("ORDER BY rand() LIMIT :limit", "limit=3")
        ]);
    }

    /**
     * Página produtos.
     */
    public function products(?array $data)
    {
        echo $this->view->render("pages/products", [
            "products" => (new Products())->get()
        ]);
    }

    /**
     * Página quem somos.
     */
    public function whoWeAre(?array $data)
    {
        echo $this->view->render("pages/who-we-are", []);
    }

    /**
     * Página orçamento.
     */
    public function leads(?array $data)
    {
        echo $this->view->render("pages/leads", []);
    }

    /**
     * Página sucesso.
     */
    public function success(?array $data)
    {
        echo $this->view->render("pages/success", []);
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
    }
}
