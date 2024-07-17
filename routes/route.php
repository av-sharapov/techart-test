<?php

use App\Controllers\NewsController;

$parsedUrl = parse_url($_SERVER['REQUEST_URI']);

switch($parsedUrl['path'])
{
    case '/':
        header('Location: /news', true, 302);
    case preg_match('/^\/(news|news\/)*$/', $parsedUrl['path']) ? true : false:
        $newsController = new NewsController();
        $newsController->index();
        break;
    case preg_match('/^\/news\/(\d+)$/', $parsedUrl['path']) ? true : false:
        preg_match('/^\/news\/(\d+)$/', $parsedUrl['path'], $matches);
        $id = $matches[1];
        $newsController = new NewsController();
        $newsController->show($id);
        break;
    default:
        http_response_code(404);
        echo '404';
        break;
}