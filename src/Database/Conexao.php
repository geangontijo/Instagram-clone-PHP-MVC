<?php

namespace Inst\Database;

abstract class Conexao
{
    static public function getConexao():\PDO
    {
        try {
            $rootDir = __DIR__ . '/database.sqlite';
            return new \PDO('sqlite:'. $rootDir);
        }catch (\PDOException $exception){
            var_dump($exception->getMessage());
        }
    }
}