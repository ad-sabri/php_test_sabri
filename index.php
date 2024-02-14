<?php
/*
define('ROOT', __DIR__);
require_once(ROOT . '/utils/NewsManager.php');
require_once(ROOT . '/utils/CommentManager.php');

foreach (NewsManager::getInstance()->listNews() as $news) {
	echo("############ NEWS " . $news->getTitle() . " ############\n");
	echo($news->getBody() . "\n");
	foreach (CommentManager::getInstance()->listComments() as $comment) {
		if ($comment->getNewsId() == $news->getId()) {
			echo("Comment " . $comment->getId() . " : " . $comment->getBody() . "\n");
		}
	}
}

$commentManager = CommentManager::getInstance();
$c = $commentManager->listComments();

*/


use App\Controllers\NewsController;

require_once 'vendor/autoload.php';

$url = $_SERVER['REQUEST_URI'];

$path = parse_url($url, PHP_URL_PATH);

switch ($path) {
	case '/news/list':
		$ctrl = new NewsController();
		break;
}
