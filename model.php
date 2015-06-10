  <?php
class Model{


public function connect()
{
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'password';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"db");
   if   ($conn) {
   		
   		return $conn;
   }
   else
   {
   	echo "Connection not established";
   }
 }
	
public function save()
{
	$conn=$this->connect();
	$tblname=get_class($this);
	$colname = "";
	$colvals = "";
	$up="";
	foreach ($this as $key => $value) {
		if($this->id==null)
		{
			if($key!='id')
			{
		
			$colname .= $key.',';
			$colvals.='"'.$value .'",';
			}
		}
		else
		{
			if($key=='id')
			{
			$this->id=$value;
			}
			$up .= $key.'="'.$value .'",';
			
		}
	}

	$col=chop($colname,',');
	$val=chop($colvals,',');
	$up=chop($up,',');
	if($this->id==null)
	{
	$query='insert into '.$tblname.' ('.$col.') values ('.$val.')';
	$result = mysqli_query($conn, $query); 
	if($result)
	{
		echo "insertion successfull";
	}
	
	}
	else
	{
	$query='update '.$tblname.' set '.$up.' where id='.$this->id;
	$result = mysqli_query($conn, $query); 
	if($result)
	{
		echo "updation successfull";
	}
	}
	
	

	//$ins=$conn->query($query);
	
}
 public function find($id)
 {
 	$conn=$this->connect();
 	$tblname=get_class($this);
 	$query='select * from '.$tblname.' where id='.$id;
 	$obj1=new $tblname;
 	$result = mysqli_query($conn, $query); 
 	$row = $result->fetch_assoc();
 	if($row)
 	{
  		foreach($row as $key=>$value)
  		 {
  		 	
  		 	$obj1->$key=$value;
  		}
		return $obj1;
	}
	else
	{

		echo "Invalid id";
	}

 }
	
}
?>