<?php
class View
{
	protected $data=[];

	/*public function __set($k,$v)
	{
		$this->data[$k]=$v;
	}
	*/
	public function assign($name,$value)
	{
		$this->data[$name]=$value;
	}
	public function display($template)
	{
		foreach ($this->data as $key=>$val)
		{
			$$key=$val;
		}
		include __DIR__ . '/../views/' . $template;
	}
}