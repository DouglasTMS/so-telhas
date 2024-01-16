<?php

namespace Source\Supports;

use DateTime;
use Source\Models\Products;

class SiteMap
{
    private $products;
    private $dateTime;
    private $XML;

    function __construct()
    {
        $this->products = (new Products())->get();
        $datetime = new DateTime(date('Y-m-d H:i:s'));
        $this->dateTime = $datetime->format(DateTime::ATOM);
        $this->XMLGenerate();
        $this->createXMLFile();
        $this->compactXML();
    }

    private function XMLGenerate()
    {
        $this->XML = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset
            xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
            xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
            xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

            <url>
                <loc>' . url() . '</loc>
                <lastmod>' . $this->dateTime . '</lastmod>
                <changefreq>weekly</changefreq>
                <priority>1.00</priority>
            </url>

            <url>
                <loc>' . url("telhas") . '</loc>
                <lastmod>' . $this->dateTime . '</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.95</priority>
            </url>

            <url>
                <loc>' . url("quem-somos") . '</loc>
                <lastmod>' . $this->dateTime . '</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.95</priority>
            </url>

            <url>
                <loc>' . url("orcamento") . '</loc>
                <lastmod>' . $this->dateTime . '</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.95</priority>
            </url>

            <url>
                <loc>' . url("obrigado") . '</loc>
                <lastmod>' . $this->dateTime . '</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.95</priority>
            </url>

            ';

        foreach ($this->products as $product) {
            $datetime = new DateTime($product->updated_at);
            $date = $datetime->format(DateTime::ATOM);
            $this->XML .= '
                <url>
                    <loc>' . url("telhas") . '/' . $product->uri . '</loc>
                    <lastmod>' . $date . '</lastmod>
                    <changefreq>weekly</changefreq>
                    <priority>0.85</priority>
                </url>';
        }
        $this->XML .= '
        </urlset>';
    }

    private function createXMLFile()
    {
        $file = fopen("../sitemap.xml", 'w');
        if (fwrite($file, $this->XML)) {
            echo "Arquivo sitemap.xml criado com sucesso";
        } else {
            echo "Não foi possível criar o arquivo. Verifique as permissões do diretório.";
        }
        fclose($file);
    }

    private function compactXML()
    {
        $data = implode("", file(url("sitemap.xml")));
        $gzdata = gzencode($data, 9);
        $fp = fopen("../sitemap.xml.gz", "w");
        fwrite($fp, $gzdata);
        fclose($fp);
    }
}
