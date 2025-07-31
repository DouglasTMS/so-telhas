<?php

namespace Source\Controllers;

use Source\Core\View;
use Source\Models\Products;
use Source\Supports\Seo;
use Source\Supports\Email;
use Source\Models\Lead;
use Source\Models\Newsletter;
use Source\Models\Variations;
use Source\Models\SellersWhatsApp;

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
            "titleType" => 5
        ]);
    }



    /**
     * Página lista Telhas Termoacústica.
     */
    public function thermoacoustics(?array $data)
    {
        echo $this->view->render("pages/products", [
            "header" => $this->seo->render("Conheça nossas Telhas Isotérmicas | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "products" => (new Products())->get("WHERE type = :type", "type=1"),
            "headerPhone" => "(62) 3300-0460"
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
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    /**
     * Página de Telha Metálica.
     */
    public function metallicView(?array $data)
    {

        $product = (new Products())->get("WHERE uri = :uri", "uri={$data['uri']}");

        if (empty($product)) {
            header("Location: " . CONF_URL_BASE);
            return;
        }

        echo $this->view->render("pages/product-view", [
            "header" => $this->seo->render($product[0]->name, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "data" => $product[0],
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    /**
     * Página lista de Perfis.
     */
    public function perfil(?array $data)
    {
        echo $this->view->render("pages/products", [
            "header" => $this->seo->render("Conheça nossos Perfis | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "products" => (new Products())->get("WHERE type = :type", "type=4"),
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    /**
     * Página de visualização de perfil.
     */
    public function perfilView(?array $data)
    {

        $product = (new Products())->get("WHERE uri = :uri", "uri={$data['uri']}");

        if (empty($product)) {
            header("Location: " . CONF_URL_BASE);
            return;
        }

        echo $this->view->render("pages/product-view", [
            "header" => $this->seo->render($product[0]->name, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "data" => $product[0],
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    /**
     * Página de visualização do Isopainel.
     */
    public function isopainelView(?array $data)
    {

        $product = (new Products())->get("WHERE uri = :uri", "uri=isopainel");

        if (empty($product)) {
            header("Location: " . CONF_URL_BASE);
            return;
        }

        echo $this->view->render("pages/product-view", [
            "header" => $this->seo->render($product[0]->name, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "data" => $product[0],
            "products" => (new Products())->get("ORDER BY rand() LIMIT :limit", "limit=3"),
            "variations" => (new Variations())->get("WHERE product_id = :product_id", "product_id={$product[0]->id}"),
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    /**
     * Página lista de acabamentos.
     */
    public function finish(?array $data)
    {
        echo $this->view->render("pages/products", [
            "header" => $this->seo->render("Conheça nossos Acabamentos de Telhas Termoacústicas | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "products" => (new Products())->get("WHERE type = :type", "type=4"), // Trocar pra 5
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    /**
     * Página de visualização de perfil.
     */
    public function finishView(?array $data)
    {

        $product = (new Products())->get("WHERE uri = :uri", "uri={$data['uri']}");

        if (empty($product)) {
            header("Location: " . CONF_URL_BASE);
            return;
        }

        echo $this->view->render("pages/product-view", [
            "header" => $this->seo->render($product[0]->name, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "data" => $product[0],
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    ##### PARAFUSOS


    /**
     * Página de visualização de Cumeeiras.
     */
    public function ridgesView(?array $data)
    {

        $product = (new Products())->get("WHERE uri = :uri", "uri=cumeeira");

        if (empty($product)) {
            header("Location: " . CONF_URL_BASE);
            return;
        }

        echo $this->view->render("pages/product-view", [
            "header" => $this->seo->render($product[0]->name, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "data" => $product[0],
            "products" => (new Products())->get("ORDER BY rand() LIMIT :limit", "limit=3"),
            "variations" => (new Variations())->get("WHERE product_id = :product_id", "product_id={$product[0]->id}"),
            "headerPhone" => "(62) 3300-0460"
        ]);
    }





    /**
     * Página quem somos.
     */
    public function whoWeAre(?array $data)
    {
        echo $this->view->render("pages/who-we-are", [
            "header" => $this->seo->render("Conheça Melhor a Só Telhas | " . CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    /**
     * Página orçamento.
     */
    public function leads(?array $data)
    {
        echo $this->view->render("pages/leads", [
            "header" => $this->seo->render(CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "headerPhone" => "(62) 3300-0460"
        ]);
    }



    /**
     * Página sucesso.
     */
    public function success(?array $data)
    {
        echo $this->view->render("pages/success", [
            "header" => $this->seo->render(CONF_SITE_TITLE, CONF_SITE_DESCRIPTION, url(), thumb()->make("shared/img/seo.png", 1200, 628)),
            "headerPhone" => "(62) 3300-0460"
        ]);
    }


    /**
     * Ajax.
     */
    public function ajax(?array $data)
    {
        if ($data["action"] == "actionName") {
        }
    }
}
