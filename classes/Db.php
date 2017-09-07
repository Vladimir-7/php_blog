<?php
class Db
{
	public $link;
	public function __construct()
	{
		$this->link=mysqli_connect('localhost','root','9058393913','blog');
	}
	public function query($sql, $class='stdClass')
	{
		$result=mysqli_query($this->link,$sql);
		while($row=mysqli_fetch_object($result,$class)){
			$ret[]=$row;
		}
		return $ret;
	}
	public function queryOne($sql,$class='stbClass')
	{
		return $this->query($sql,$class)[0];
	}
	public function add($sql)
	{
		//$this->link->set_charset(utf8);
		$result=mysqli_query($this->link,$sql);
		return $result;
	}

}