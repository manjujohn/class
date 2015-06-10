<?php
include 'model.php';
Class car extends Model{
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

$obj=new car ;
if(isset($_POST["btnSubmit2"]))
{
$obj->setName($_POST["txtName"]);
$obj->setColor($_POST["txtColor"]);
$obj->setModel($_POST["txtModel"]);
$var=get_class_vars('Person');
$obj->save() ;
}
if(isset($_POST["btnFind2"]))
{
$result=new car;
$result=$obj->find($_POST["txtId"]);
if($result){
echo "Name:".$result->getName();
echo "<br/>";
echo "Color:".$result->getColor();
echo "<br/>";
echo "Model:".$result->getModel();
}
}
?>