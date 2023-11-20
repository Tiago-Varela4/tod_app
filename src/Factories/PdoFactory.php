<?php

namespace App\Factories;

class PdoFactory
{
    public function __invoke()
    {
        $pdo = new \PDO('mysql:dbname=todo_exercise;host=DB','root','password');
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_ASSOC);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }
}