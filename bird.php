<?php
include_once 'model.php';
Class bird extends model{
	public $name;
	public $color;
	public $id;
	public function setId($id)
	{
		$this->id=$id;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setName($name)
	{
		$this->name=$name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setColor($color)
	{
		$this->color=$color;
	}
	public function getColor()
	{
		return $this->color;
	}
	
}

$obj1=new bird ;
$result1=new bird;
if(isset($_POST['id1']))
{
	$id=$_POST['id1'];
	$obj1->delete($id);
}
?>