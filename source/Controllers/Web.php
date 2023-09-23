<?php

namespace Source\Controllers;

use Source\Core\View;
use Source\Supports\Seo;

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
        echo $this->view->render("pages/home", []);
    }

    /**
     * Página produtos.
     */
    public function products(?array $data)
    {
        echo $this->view->render("pages/products", []);
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
     * Ajax.
     */
    public function ajax(?array $data)
    {
    }
}
