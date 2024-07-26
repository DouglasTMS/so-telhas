<?php

namespace Source\Core;

use League\Plates\Engine;

/**
 * Faz a abstração do componente Plates para renderizar views.
 */
class View
{
    private $engine;

    /**
     * Inicia o processo de configuração da view.
     *
     * @param mixed $path
     * @param mixed $ext
     * @return void
     */
    public function __construct(string $path = CONF_VIEW_PATH, string $ext = CONF_VIEW_EXT)
    {
        $this->engine = new Engine($path, $ext);
    }

    /**
     * Adiciona novo diretório.
     *
     * @param mixed $name
     * @param mixed $path
     * @return View
     */
    public function addPath(string $name, string $path): View
    {
        $this->engine->addFolder($name, $path);
        return $this;
    }

    /**
     * Renderiza a view.
     *
     * @param mixed $templateName
     * @param mixed $data
     * @return string
     */
    public function render(string $templateName, array $data): string
    {
        $this->engine->addData($data);
        return $this->engine->render($templateName);
    }

    /**
     * Retorna o objeto Engine.
     *
     * @return Engine
     */
    public function engine(): Engine
    {
        return $this->engine;
    }
}
