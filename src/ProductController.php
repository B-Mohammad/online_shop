<?php

class ProductController
{
    public function processRequest(string $method, ?string $id): void
    {
        if ($id) {
            $this->processOneProduct($method,$id);
        } else {
            $this-> processProducts($method);
        }
    }

    private function processProducts(string $method): void {}

    private function processOneProduct(string $method, string $id): void {}
}
