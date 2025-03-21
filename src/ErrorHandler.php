<?php
class ErrorHandler
{
    public static function handlerException(Throwable $e): void
    {
        http_response_code(500);
        echo json_encode([
            "code" => $e->getCode(),
            "message" => $e->getMessage(),
            "line" => $e->getLine(),
            "file" => $e->getFile()
        ]);
    }
}
