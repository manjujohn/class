<?php
include "person.php";
include "car.php";
include "bird.php";
$pname=" ";
$page=" ";
$paddress=" ";
$bname=" ";
$bcolor=" ";
$cname=" ";
$ccolor=" ";
$cmodel=" ";


$tblname = get_class($obj);
$tblname1 = get_class($obj1);
$tblname2 = get_class($obj2);
// console.log($tblname);
if(isset($_POST["btnSubmit"]))
{

$obj->setId($_POST["txtId"]);
$obj->setName($_POST["txtName"]);
$obj->setAge($_POST["txtAge"]);
$obj->setAddress($_POST["txtAddress"]);
//$var=get_class_vars('Person');
$obj->save() ;
}

if(isset($_POST["btnFind"]))
{

	if($_POST["txtId"]!="")
	{
	$result=$obj->find($_POST["txtId"]);
	if($result)
		{

		$pname=$result->getName();
		$page=$result->getAge();
		$paddress=$result->getAddress();
		}
	}
	else
	{
		echo "enter an id";
	}
}

if(isset($_POST["btnSubmit2"]))
{
$obj2->setName($_POST["txtName"]);
$obj2->setColor($_POST["txtColor"]);
$obj2->setModel($_POST["txtModel"]);
//$var=get_class_vars('Person');
$obj2->save() ;
}
if(isset($_POST["btnFind2"]))
{

	if($_POST["txtId"]!="")
	{

	$result2=$obj2->find($_POST["txtId"]);
	if($result2)
		{
		$cname=$result2->getName();
		$ccolor=$result2->getColor();
		$cmodel=$result2->getModel();
		}
	}
	else
	{
		echo "enter an id";
	}

}

if(isset($_POST["btnSubmit1"]))
{
$obj1->setName($_POST["txtName"]);
$obj1->setColor($_POST["txtColor"]);
//$var=get_class_vars('Person');
$obj1->save() ;
}
if(isset($_POST["btnFind1"]))
{

if($_POST["txtId"]!="")
	{

	$result1=$obj1->find($_POST["txtId"]);
	if($result1)
		{
		$bname=$result1->getName();
		$bcolor=$result1->getColor();
		
		}
	}
	else
	{
		echo "enter an id";
	}


}
?>

<!DOCTYPE html>
<html>	
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="jquery1.js"></script>
		
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 well">
				<h3>Person</h3>

					<form method="post" class="form-horizontal" action=" ">
					<div class="form-group">
							<label for="txtId" class="col-md-4 control-label">Enter Id</label>
							<div class="col-md-8">
								<input type="text" name="txtId"  class="form-control" placeholder="Enter Id">
							</div>
							
						</div>

						<div class="form-group">
   							 <div class="col-sm-offset-4 col-sm-4">
      							<button type="submit" class="btn btn-success btn-md" id="btnRegister1" name="btnFind">Find</button>
   							 </div>
  						</div>
  						
					
						<div class="form-group">
							<label for="txtName" class="col-md-4 control-label">Name</label>
							<div class="col-md-8">
								<input type="text" name="txtName" value="<?php echo $pname; ?>" class="form-control" placeholder="Name">
							</div>
							
						</div>
						<div class="form-group">
							<label for="txtAge" class="col-md-4 control-label">Age</label>
							<div class="col-md-8">
								<input type="text" name="txtAge" value="<?php echo $page; ?>" class="form-control" placeholder="Age">
							</div>
							
						</div>
						<div class="form-group">
							<label for="txtAddress" class="col-md-4 control-label">Address</label>
							<div class="col-md-8">
								<textarea type="text" name="txtAddress"  class="form-control" placeholder="Address"><?php echo $paddress; ?></textarea>
							</div>
							
						</div>
						<div class="form-group">
   							 <div class="col-sm-offset-4 col-sm-4">
      							<button type="submit" class="btn btn-success btn-md" id="btnRegister" name="btnSubmit">submit</button>
   							 </div>
  						</div>
					</form>		

				</div>

				<div class="col-md-4 ">
				<h3>Bird</h3>

					<form method="post"  class="form-horizontal" action=" ">
					<div class="form-group">
							<label for="txtId" class="col-md-4 control-label">Enter Id</label>
							<div class="col-md-8">
								<input type="text" name="txtId" class="form-control" placeholder="Enter Id">
							</div>
							
						</div>

						<div class="form-group">
   							 <div class="col-sm-offset-4 col-sm-4">
      							<button type="submit" class="btn btn-success btn-md" id="btnRegister1" name="btnFind1">Find</button>
   							 </div>
  						</div>
  						

					
						<div class="form-group">
							<label for="txtName" class="col-md-4 control-label">Name</label>
							<div class="col-md-8">
								<input type="text" name="txtName" class="form-control" placeholder="Name" value="<?php echo $bname; ?>">
							</div>
							
						</div>
						<div class="form-group">
							<label for="txtColor" class="col-md-4 control-label">Color</label>
							<div class="col-md-8">
								<input type="text" name="txtColor" class="form-control" placeholder="Color" value="<?php echo $bcolor; ?>">
							</div>
							
						</div>
						
						<div class="form-group">
   							 <div class="col-sm-offset-4 col-sm-4">
      							<button type="submit" class="btn btn-success btn-md" id="btnRegister" name="btnSubmit1">submit</button>
   							 </div>
  						</div>
					</form>		

				</div>
				
				<div class="col-md-4 well">
				<h3>Car</h3>
						<form method="post" action=" " class="form-horizontal">
					<div class="form-group">
							<label for="txtId" class="col-md-4 control-label">Enter Id</label>
							<div class="col-md-8">
								<input type="text" name="txtId" class="form-control" placeholder="Enter Id">
							</div>
							
						</div>

						<div class="form-group">
   							 <div class="col-sm-offset-4 col-sm-4">
      							<button type="submit" class="btn btn-success btn-md" id="btnRegister1" name="btnFind2" >Find</button>
   							 </div>
  						</div>
  						
					
						<div class="form-group">
							<label for="txtName" class="col-md-4 control-label" >Brand Name</label>
							<div class="col-md-8">
								<input type="text" name="txtName" class="form-control" placeholder=" Name" value="<?php echo $cname; ?>">
							</div>
							
						</div>
						<div class="form-group">
							<label for="txtColor" class="col-md-4 control-label">Color</label>
							<div class="col-md-8">
								<input type="text" name="txtColor" class="form-control" placeholder=" Color"  value="<?php echo $ccolor; ?>">
							</div>
							
						</div>

						<div class="form-group">
							<label for="txtModel" class="col-md-4 control-label">Model</label>
							<div class="col-md-8">
								<input type="text" name="txtModel" class="form-control" placeholder=" Model" value="<?php echo $cmodel; ?>">
							</div>
							
						</div>
						
						<div class="form-group">
   							 <div class="col-sm-offset-4 col-sm-4">
      							<button type="submit" class="btn btn-success btn-md" id="btnRegister" name="btnSubmit2">submit</button>
   							 </div>
  						</div>
					</form>	

					</div>
					</div>
					<div class="row  col-md-8 ">
				
				
				<div class="select" class="col-sm-8">
				<h3>Person</h3>
				<table class="table table-bordered col-offset=sm-2 col-sm-6 ">
				<thead>
				<tr><th>Name</th><th>Age</th><th>Address</th><th></th></tr>
				</thead>
				<tbody>
					<?php 

						$r=$obj->load();
						$r1=$obj1->load();
						$r2=$obj2->load();
						while($row = $r->fetch_assoc())
						{
						?>
							<tr  id="<?php echo $row['id'] ;?>" data-tablename="<?php echo $tblname2 ;?>">

							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['age']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><button  onclick="del(<?php echo $row['id'];  echo ", "."'$tblname'";?>)">Delete</button></td>
							</tr>
						<?php
						}

						?>
						</tbody>
						</table>
						<h3>Bird</h3>
						<table class="table table-bordered col-md-6">
				<thead>
				<tr><th>Name</th><th>Color</th><th></th></tr>
				</thead>
				<tbody>
						<?php
						while($row = $r1->fetch_assoc())
						{
						?>
							<tr  id="<?php echo $row['id'] ;?>" data-tablename="<?php echo $tblname2 ;?>">

							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['color']; ?></td>
							<td><button onclick="del(<?php echo $row['id']; echo ", "."'$tblname1'";?>)">Delete</button></td>
							
		
							</tr>
						<?php
						}
						?>
						</tbody>
						</table>
						<h3>Car</h3>
						<table class="table table-bordered col-md-6">
				<thead>
				<tr><th>Name</th><th>Color</th><th>Model</th><th></th></tr>
				</thead>
				<tbody>
						<?php
						while($row = $r2->fetch_assoc())
						{
						?>
							<tr  id="<?php echo $row['id'] ;?>" data-tablename="<?php echo $tblname2 ;?>">

							<td><?php echo $row['brand_name']; ?></td>
							<td><?php echo $row['color']; ?></td>
							<td><?php echo $row['model']; ?></td>
							<td><button onclick="del(<?php echo $row['id']; echo ", "."'$tblname2'";?>)">Delete</button></td>
							</tr>
						<?php
						}
					 ?>

					

				</div>
			</div>
			
		</div>

		</div>

	</body>
	<script type="text/javascript">
	$(document).ready(function(){

		$('button').on('click', function(event){

			id= $(this).parent().parent().attr('id');
			tbl = $(this).parent().parent().data('tablename');
			alert(tbl);

			var values={
			id1:id,
			tblname:tbl
		}
		$.ajax({


			type:"POST",
			data:values,
			dataType:"text",
			url:tbl+".php",
			success:function(data){
				console.log("on success",data);
				$('#'+id).remove();
				},
			complete:function(data){
				console.log("on complete",data);
			},
			error:function(data){
				console.log("on error",data);

			}

		});


		});

	});
	function del(id,tbl)
	{
		
	/*$
		var values={
			id1:id,
			tblname:tbl
		}
		$.ajax({


			type:"POST",
			data:values,
			dataType:"text",
			url:tbl+".php",
			success:function(data){
				console.log("on success",data);
				$('#'+id).remove();
				},
			complete:function(data){
				console.log("on complete",data);
			},
			error:function(data){
				console.log("on error",data);

			}

		});*/

	}
	</script>




</html>

