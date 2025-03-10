<?php

class ProductGetWay
{

    private $conn;
    public function __construct(Database $db)
    {
        $this->conn = $db->getConnection();
    }

    public function getAllProducts(): array
    {
        $sql = "SELECT * FROM sh_products";
        $stmt = $this->conn->query($sql);

        $data = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $row["price"] = (float) $row["price"];
            $data[] = $row;
        }

        return $data;
    }
}
