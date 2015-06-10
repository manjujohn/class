<?php
include 'model.php';
Class bird extends Model{
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

$obj=new bird ;
if(isset($_POST["btnSubmit1"]))
{
$obj->setName($_POST["txtName"]);
$obj->setColor($_POST["txtColor"]);
$var=get_class_vars('Person');
$obj->save() ;
}
if(isset($_POST["btnFind1"]))
{
$result=new bird;
$result=$obj->find($_POST["txtId"]);
if($result){
echo "Name:".$result->getName();
echo "<br/>";
echo "Color:".$result->getColor();
}
}
?>