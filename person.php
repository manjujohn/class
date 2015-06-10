

<?php
include 'model.php';
Class person extends Model{
	public $name;
	public $age;
	public $address;
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
	public function setAge($age)
	{
		$this->age=$age;
	}
	public function getAge()
	{
		return $this->age;
	}
	public function setAddress($address)
	{
		$this->address=$address;
	}
	public function getAddress()
	{
		return $this->address;
	}
}
$obj=new person;
if(isset($_POST["btnSubmit"]))
{

$obj->setId($_POST["txtId"]);
$obj->setName($_POST["txtName"]);
$obj->setAge($_POST["txtAge"]);
$obj->setAddress($_POST["txtAddress"]);
$var=get_class_vars('Person');
$obj->save() ;
}
if(isset($_POST["btnFind"]))
{
$result=new person;
$result=$obj->find($_POST["txtId"]);
if($result){
echo "Name:".$result->getName();
echo "<br/>";
echo "Age:".$result->getAge();
echo "<br/>";
echo "Address:".$result->getAddress();
}
}
?>