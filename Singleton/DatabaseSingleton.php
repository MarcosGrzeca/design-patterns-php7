<?php

namespace Singleton;

/**
 * Implementa��o da classe de conex�o com o padr�o "Singleton"
 *
 * Class DatabaseSingleton
 * @package Singleton
 */
class DatabaseSingleton extends \PDO
{
    /**
     * DatabaseSingleton constructor.
     * @param $dsn
     * @param $username
     * @param $passwd
     * @param $options
     */
    private function __construct($dsn, $username, $passwd, $options)
    {
        parent::__construct($dsn, $username, $passwd, $options);
    }

    /**
     * DatabaseSingleton constructor.
     * @param $dsn
     * @param $username
     * @param $password
     * @param $options
     */
    public static function getInstance(
        string $dsn,
        string $username,
        string $password,
        array $options = []
    ) {
        parent::__construct($dsn, $username, $password, $options)
    }
}