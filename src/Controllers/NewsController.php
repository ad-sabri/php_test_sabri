<?php

namespace App\Controllers;

use App\Utils\NewsManager;
use App\Utils\CommentManager;
use Framework\Response;

class NewsController
{
    public function listAction() {
        $newManager = NewsManager::getInstance();
        $commentManager = CommentManager::getInstance();
        $news = $newManager->listNews();

        $comments = $commentManager->listComments();

        return Response::send("news/list", ["news" => $news, "comments" => $comments]);
    }
}
