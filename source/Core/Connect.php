<?php

namespace Source\Core;

use PDO;
use PDOException;

abstract class Connect
{
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    /**
     * Retorna uma instância PDO com a conecção com o banco de dados.
     *
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    CONF_DB_DRIVE . ":host=" . CONF_DB_HOST . ";dbname=" . CONF_DB_NAME,
                    CONF_DB_USER,
                    CONF_DB_PASS,
                    self::OPTIONS
                );
            } catch (PDOException $e) {
                die("Erro ao tentar fazer conecção com o banco de dados: {$e->getMessage()}");
            }
        }

        return self::$instance;
    }

    /**
     * __construct
     *
     * @return void
     */
    final private function __construct()
    {
    }

    /**
     * __clone
     *
     * @return void
     */
    final private function __clone()
    {
    }
}
