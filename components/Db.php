<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.02.2017
 * Time: 23:35
 */

class Db
{

    public static function getConnection()
    {
        $paramsPath = ROOT.'/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }

}