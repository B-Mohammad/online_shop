<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
  require __DIR__ . "/src/$class.php";
});

set_exception_handler("ErrorHandler::handlerException");

header("Content-type: application/json; charset=UTF-8");

$parts = explode("/", $_SERVER["REQUEST_URI"]);

if ($parts[2] != "products") {
  http_response_code(404);
  exit;
}

$id = $parts[3];

$database = new Database();
$getWay = new ProductGetWay($database);



$controller = new ProductController($getWay);

$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);
