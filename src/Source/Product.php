<?php

namespace Source;

class Product
{
    private $db;

    public function __construct(ProductInterface $db)
    {
        $this->db = $db->connect();
    }

    public function listProduct()
    {
        $query = "select * from products";

        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}