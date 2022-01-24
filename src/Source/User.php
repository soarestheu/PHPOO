<?php
namespace Source;

class User
{
    private $db;

    public function __construct(UserInterface $db)
    {
        $this->db = $db->connect();
    }

    public function list()
    {
        $query = "select * from users";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}