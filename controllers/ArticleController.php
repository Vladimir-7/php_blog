<?php
require_once __DIR__ . '/../models/Articles.php';
require_once __DIR__ . '/../classes/View.php';

class ArticleController
{
	public function actionIndex()
	{
		$items = Articles::getAll();
		$view = new View();
		//$view->items = $items;
		$view->assign('items',$items);
		$view->display('index.php');
	}
}