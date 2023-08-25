<?php

namespace Source\Supports;

use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    /** @var Optimizer */
    protected $optmizer;

    public function __construct(string $schema = "article")
    {
        $this->optmizer = new Optimizer();
        $this->optmizer->openGraph(
            CONF_SITE_NAME,
            CONF_SITE_LANG,
            $schema
        )->twitterCard(
            CONF_TWITTER_CREATOR_PROFILE,
            CONF_TWITTER_COMPANY_PROFILE,
            CONF_SITE_DOMAIN
        )->publisher(
            CONF_FACEBOOK_COMPANY_PAGE,
            CONF_FACEBOOK_CREATOR_PROFILE
        )->facebook(
            CONF_FACEBOOK_APP_ID
        );
    }

    public function __get($name)
    {
        return $this->optmizer->data()->$name;
    }

    /**
     * Renderiza o HTML com as tags já preenchidas.
     * 
     * @param string $title
     * @param string $description
     * @param string $url
     * @param string $image
     * @param bool $follow
     * 
     * @return string
     */
    public function render(string $title, string $description, string $url, string $image, bool $follow = true): string
    {
        return $this->optmizer->optimize($title, $description, $url, $image, $follow)->render();
    }

    /**
     * Retorna o objeto Optimizer.
     * 
     * @return Optimizer
     */
    public function optmizer(): Optimizer
    {
        return $this->optmizer;
    }
}
