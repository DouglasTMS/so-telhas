<?php

namespace Source\Supports;

use CoffeeCode\Uploader\File;
use CoffeeCode\Uploader\Image;
use CoffeeCode\Uploader\Media;

class Upload
{
    private $message;
    private $fail = false;

    public function message(): string
    {
        return $this->message;
    }

    public function fail(): bool
    {
        return $this->fail;
    }

    /**
     * Responsável por fazer o upload de imagens.
     *
     * @param array $image
     * @param [type] $width
     * @return string|null
     */
    public function imagem(array $image, int $width = CONF_UPLOAD_MAX_IMAGE_SIZE): ?string
    {
        $upload = new Image(CONF_UPLOAD_PATH, CONF_UPLOAD_IMAGE_PATH);

        if (empty($image["type"]) || !in_array($image["type"], $upload::isAllowed())) {
            $this->message = "Formato de arquivo inválido.";
            $this->fail = true;
            return null;
        }

        return $upload->upload($image, microtime(), $width, CONF_UPLOAD_IMAGE_QUALITY);
    }

    /**
     * Responsável por fazer o upload de arquivos.
     *
     * @param array $file
     * @return string|null
     */
    public function file(array $file): ?string
    {
        $upload = new File(CONF_UPLOAD_PATH, CONF_UPLOAD_IMAGE_PATH);

        if (empty($image["type"]) || !in_array($image["type"], $upload::isAllowed())) {
            $this->message = "Formato de arquivo inválido.";
            $this->fail = true;
            return null;
        }

        return $upload->upload($file, microtime());
    }

    /**
     * Responsável por fazer o upload de mídias.
     *
     * @param array $file
     * @return string|null
     */
    public function media(array $file): ?string
    {
        $upload = new Media(CONF_UPLOAD_PATH, CONF_UPLOAD_IMAGE_PATH);

        if (empty($image["type"]) || !in_array($image["type"], $upload::isAllowed())) {
            $this->message = "Formato de arquivo inválido.";
            $this->fail = true;
            return null;
        }

        return $upload->upload($file, microtime());
    }

    /**
     * Remove o arquivo da pasta.
     *
     * @param string $filePath
     * @return void
     */
    public function remove(string $filePath): void
    {
        if (file_exists($filePath) && is_file($filePath)) {
            unlink($filePath);
        }
    }
}
