<?php
require_once __DIR__ . '/../classes/Db.php';

class Articles
{
	public $id;
	public $title;
	public $date;
	public $text;
	public $tegs;

	public static function getAll()
	{
		$db = new Db();
		return $db->query('SELECT title, date, text FROM Articles','Articles');

	}
	public static function getOne($id)
	{
		$db = new Db();
		return $db->queryOne("SELECT title,date,text FROM Articles WHERE id='".$id."'",'Articles');
	}
	//Добавление статьи в базу для Админ Контроллера.
	public function addArticle($title,$text,$tags)
	{
		$db = new Db();
		return $db->add("INSERT INTO Articles (title,text,tags) VALUES ('".$title."','".$text."','".$tags."')");
	}
}