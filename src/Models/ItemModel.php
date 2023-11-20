<?php

namespace App\Models;

use PDO;
class ItemModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getItems()
    {
        $query = $this->db->prepare('SELECT * FROM `items` ');
        $query->execute();
        return $query->fetchAll();
    }

}