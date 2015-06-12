

<?php
include_once 'model.php';
Class person extends model{
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
$result=new person;

if(isset($_POST['id1']))
{
	$id=$_POST['id1'];
	$obj->delete($id);
}
?>