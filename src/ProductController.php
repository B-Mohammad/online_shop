<?php

class ProductController
{
    public function __construct(private ProductGetWay $getWay) {}

    public function processRequest(string $method, ?string $id): void
    {
        if ($id) {
            $this->processOneProduct($method, $id);
        } else {
            $this->processProducts($method);
        }
    }

    private function processProducts(string $method): void
    {
        switch ($method) {
            case 'GET':

                echo json_encode($this->getWay->getAllProducts());
                break;
        }
    }

    private function processOneProduct(string $method, string $id): void {}
}
