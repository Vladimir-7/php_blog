<?php 
require_once __DIR__ . '/../models/Articles.php';

class AdminController
{
	public function actionAdd()
	{
		$title = $_POST['title'];
		$text = $_POST['text'];
		$tags = $_POST['tags'];
		$items = Articles::addArticle($title,$text,$tags);
		echo "Добавление статьи в Базу" . " " . $title;
	}
}