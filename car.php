<?php
include_once 'model.php';

Class car extends model{
	public $brand_name;
	public $color;
	public $model;
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
		$this->brand_name=$name;
	}
	public function getName()
	{
		return $this->brand_name;
	}
	public function setColor($color)
	{
		$this->color=$color;
	}
	public function getColor()
	{
		return $this->color;
	}
	public function setModel($model)
	{
		$this->model=$model;
	}
	public function getModel()
	{
		return $this->model;
	}
	
}

$obj2=new car ;
$result2=new car;
if(isset($_POST['id1']))
{
	$id=$_POST['id1'];
	$obj2->delete($id);
}
?>