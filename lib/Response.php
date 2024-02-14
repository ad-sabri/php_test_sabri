<?php

namespace Framework;

class Response
{
    public static function send(string $view, array $params) {
        ob_start();

        extract($params);

        require_once "./src/Views/$view.php";
        $content = ob_get_clean();

        return $content;
    }
}