<?php

namespace Source\Core;

/**
 * Classe responsável pela gestão completa de sessões no sitema.
 */
class Session
{
    /**
     * Inicia a configuração inicial do sistema de sessões.
     *
     * @return void
     */
    public function __construct()
    {
        if (!session_id()) {
            session_start();
        }
    }

    /**
     * Retorna a sessão como objeto.
     *
     * @param string $key
     * @return mixed
     */
    public function __get(string $key)
    {
        if (!empty($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    /**
     * Verifica se a sessão existe.
     *
     * @param string $key
     * @return bool
     */
    public function __isset(string $key): bool
    {
        return $this->has($key);
    }

    /**
     * Converte a sessão para um objeto.
     *
     * @return object
     */
    public function all(): ?object
    {
        return (object)$_SESSION;
    }

    /**
     * Cria uma nova sessão.
     *
     * @param string $key
     * @param mixed $value
     * @return Session
     */
    public function set(string $key, $value): Session
    {
        $_SESSION[$key] = (is_array($value) ? (object)$value : $value);
        return $this;
    }

    /**
     * Deleta uma sessão.
     *
     * @param string $key
     * @return Session
     */
    public function unset(string $key): Session
    {
        if (!empty($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }

        return $this;
    }

    /**
     * Verifica se a sessão existe.
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Regenera a sessão.
     *
     * @return Session
     */
    public function regenerate(): Session
    {
        session_regenerate_id(true);
        return $this;
    }

    /**
     * Destroi a sessão.
     *
     * @return Session
     */
    public function destroy(): Session
    {
        session_destroy();
        return $this;
    }

    /**
     * Verifica se existe mensagem flash para exibir.
     *
     * @return Message
     */
    public function flash(): ?string
    {

        if ($this->has("flash")) {
            $flash = $this->flash;
            $this->unset("flash");
            return "<div class='message show'><i class='" . $flash->type . "'></i><p>" . $flash->message . "</p><a href='#' class='btn blue close-message'>Fechar</a></div>";
        }

        return null;
    }

    /**
     * Verifica se existe mensagem flash para exibir na admin.
     *
     * @return Message
     */
    public function flashAdm(): ?string
    {

        if ($this->has("flashAdm")) {
            $flash = $this->flashAdm;
            $this->unset("flashAdm");
            return "<div class='message show'><div class='message__type " . $flash->type . "'></div><p>" . $flash->message . "</p><a href='#' title='Fechar' class='btn btn-message red border-radius-all'>Fechar</a></div>";
        }

        return null;
    }

    /**
     * Cria um CSRF Token.
     *
     * @return void
     */
    public function csrf(): void
    {
        $this->set("csrf_token", base64_encode(random_bytes(20)));
    }
}
