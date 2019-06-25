<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>complain box</title>
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body background="images/images.jpg">
<?php
include('crud.php');
 session_start();
if(isset($_SESSION['username']))
{
	$nam=$_SESSION['username'];
	
	
	}
if(isset($_REQUEST['bor']))
			{
			
			$obj->admin_delete('table_job',$_REQUEST['bor']);
			$obj->admin_delete('table_train',$_REQUEST['bor']);
			$obj->admin_delete('report',$_REQUEST['bor']);
			$obj->admin_delete2('user_info',$_REQUEST['bor']);
             $obj->admin_delete2('user_train',$_REQUEST['bor']);			
			//echo "this user successfully deleted";
			}
//if(isset($_REQUEST['login']))
//{
	//extract($_REQUEST);
	//if($obj->admin($name,$password))
	//{
		//session_start();
	//$_SESSION['username']=$name;
		//$nam=$_SESSION['username'];
		
		?>
      <div class="alert alert-info">
<a href="#" class="alert-link"></a>  
<a href="logout.php?std=<?php echo $nam;?>"><button type="button" class="btn btn-primary btn-lg" style="float:right;">Logout</button></a>
 </div>
      <a href="report_art.php"> <center><h1><button type="button" class="btn btn-success"><h1><center>Watch Reported Article Here</center></h1></button></h1></center></a>
       <h3><button type="button" class="btn btn-success"><h3><center>User Complain Table</center></h3></button></h3>
        <table width="700" border="0" class="table table-bordered table-condensed table-hover table-responsive table-striped">
<tr>
    <th scope="col">Username</th>
    <th scope="col">Report generated</th>
    <th scope="col">Delete Button</th>
   
  </tr><?php
		$result=$obj->report_admin();
		foreach($result as $res)
		{
			
			extract($res);
			?>
              <tr>
    <td><?php echo $username; ?></td>
    <td><?php echo $rep; ?></td>
    <td class="text-right"></a>&nbsp;<a title="Delete this user" href="admin2.php?bor=<?php echo $username;?>" class="btn btn-danger glyphicon"><b>Delete User</b></a></td>
			<?php
		  
			}
 
		?>
</body>
</html>