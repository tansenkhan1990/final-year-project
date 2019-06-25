
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
<?php
include('crud.php');
if(isset($_REQUEST['login']))
{
	extract($_REQUEST);
	if($obj->login($name,$password))
	{
		session_start();
	$_SESSION['username']=$name;
		header('location:index.php');
	}
	else{
		?>
		<h1 style="color:#F33"><center><?php echo "Invalid Username or Password";?>
        <?php
		}
		
	}
?>

<div style="width:500px; margin-left:auto; margin-right:auto">

<form action="form.php" method="post">
<h1> <button type="button" class="btn btn-success">
  <h1>TCIB Login</h1></button></h1>
<table class="table table-bordered table-hover table-striped table-condensed" >

  <tr >
    <th scope="row" style=" background-image:url(images/images.jpg)" >Username</th>
    <td style=" background-image:url(images/images.jpg)"><input type="text" name="name" class="form-control input-sm"  /></td>
  </tr>
  <tr>
   
    <th scope="row">Password</th>
    <td><input type="password" name="password" class="form-control input-sm"></td>
  </tr>
  <tr>
    <th scope="row" style=" background-image:url(images/images.jpg)" >&nbsp;</th>
    <td style="background-image: url(images/images.jpg); font-size: 14pt;">
    
    <input type="submit" name="login" value="login" class="btn btn-danger btn btn-lg" /></td>
  </tr>
</table>
</form>
<a href="signup_project.php" class="btn btn-primary btn-lg info" role="button">
<h3>Create a new account</h3></a>
</div>
</body>
</html>