<?php

namespace Source\Supports;

use CoffeeCode\Cropper\Cropper;

class Thumb
{
    private $cropper;

    public function __construct()
    {
        $this->cropper = new Cropper(CONF_UPLOAD_IMAGE_CACHE_PATH, CONF_UPLOAD_IMAGE_QUALITY["jpg"], CONF_UPLOAD_IMAGE_QUALITY["png"]);
    }

    /**
     * Cria a thumb da imagem.
     *
     * @param string $image
     * @param integer $width
     * @param integer|null $height
     * @return string
     */
    public function make(string $image, int $width, int $height = null): string
    {
        return url("/") . $this->cropper->make("{$image}", $width, $height);
    }

    /**
     * Remove o cache de uma imagem ou de todas.
     *
     * @param string $path
     * @return void
     */
    public function flush(string $path): void
    {
        if ($path) {
            $this->cropper->flush(CONF_UPLOAD_PATH . "/" . $path);
            return;
        }

        $this->cropper->flush();
    }
}
