<?php
include('crud.php');
if(isset($_REQUEST['login']))
{
	extract($_REQUEST);
	if($obj->admin($name,$password))
	{
		session_start();
	$_SESSION['username']=$name;
	header('location:admin2.php');
	}
	else{
		
		echo "invalid username or password";
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data</title>
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>


<link href="css/style-desktop.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body style=" background-image:url(images/images.jpg)">

<header class="5grid-layout" id="header" name="header">
<center><font size="+2" ><img src="images/icon.png" width="192" height="63" longdesc="images/icon.png">Training and Career related Information for Bangladesh</font></center>
				 
			<nav style="padding-left:inherit; padding-right:inherit; margin-left:inherit; margin-right:inherit; nav-up:auto" class="mobileUI-site-nav">
               	<a href="../part1/index.html" class="active">Home</a>
                <a href="../part1/twocolumn1.html">SERVICES</a> 
                <a href="../part1/onecolumn.html">ABOUT US</a>
                <a href="form.php" class="active">LOGIN</a>
             	<a href="admin.php" class="active">ADMIN</a>
              </nav>		
</header>
<br/><br/><br/>
<div style="width:500px; margin-left:auto; margin-right:auto">

<form action="admin.php" method="post">
<h1><button type="button" class="btn btn-success"><h1><center>ADMIN PANEL</center></h1></button></h1>
<table class="table table-bordered table-hover table-striped table-condensed" >

  <tr>
    <th scope="row" style=" background-image:url(images/images.jpg)">Name</th>
    <td style=" background-image:url(images/images.jpg)"><input type="text" name="name" class="form-control input-sm"  /></td>
  </tr>
  <tr>
   
    <th scope="row" style=" background-image:url(images/images.jpg)">password</th>
    <td style=" background-image:url(images/images.jpg)"><input type="password" name="password" class="form-control input-sm"></td>
  </tr>
  <tr>
    <th scope="row" style=" background-image:url(images/images.jpg)">&nbsp;</th>
    <td style=" background-image:url(images/images.jpg)">
    
    <input type="submit" name="login" value="login" class="btn btn-danger btn btn-lg" /></td>
  </tr>
</table>
</form>
</div>
</body>
</html>