<header class="5grid-layout" id="header" name="header">

	<center>
		<font size="+2" ><img src="images/icon.png" width="192" height="63" longdesc="images/icon.png">
			Training and Career related Information for Bangladesh
		</font>
	</center>
				 
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
if(isset($_REQUEST['submit']))
{extract($_REQUEST);
	if($obj->get_user($name,'user_info'))
	{ ?><center><h1 style="color:#F00"><?php echo "Already someone use this username";?></h1></center>
	
       <?php
		}
		else{
		$obj->insert2($name,$password,'user_info');
	$a=count($checkbox);
	$b=count($checkbox1);
		for($i=0;$i<$a;++$i)
	{$c=NULL;
 error_reporting($obj->insert($name,$email,$number,$address,$checkbox[$i],$password,$c));
	}
	for($i=0;$i<$b;++$i)
	{$d=NULL;
 error_reporting($obj->insert($name,$email,$number,$address,$d,$password,$checkbox1[$i]));
	}?>
	 <center><h1><?php echo "Your Account Successfully Created";?></h1></center>
     <?php
		}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>My form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style-desktop.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body class="blurBg-false" style=" background-image:url(images/images.jpg)">

</br>
<link rel="stylesheet" href="signup_files/formoid1/formoid-default-skyblue.css" type="text/css" />
<script type="text/javascript" src="signup_files/formoid1/jquery.min.js"></script>
<form class="formoid-default-skyblue" style="background-color: #FFFFFF; font-size: 14px; font-family: 'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif; color: #33CC00; max-width: 480px; min-width: 150px" action="signup_project.php" method="post"><div class="title">
  <h4><center>Signup form for your account may be<br> permanently delete for your bad article so carefully share your information</center></h4></div>
  
	<div class="element-input" ><label class="title">Username<span class="required">*</span></label><input class="large" type="text" name="name" required/></div>
	<div class="element-email" ><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required/></div>
    <div class="element-input" ><label class="title">Password<span class="required">*</span></label><input class="large" type="password" name="password" required/></div>
 <div class="element-input" ><label class="title">Cell Number<span class="required">*</span></label><input class="large" type="text" name="number" required/></div>

	<div class="element-textarea" ><label class="title">Address<span class="required">*</span></label><textarea class="medium" name="address" cols="20" rows="5" required></textarea></div>
	
		<div class="element-checkbox" ><label class="title">Training Information You Want To See<span class="required">*</span></label>	
       	  <div class="column column1"><input type="checkbox" name="checkbox[]" value="IT"/ required="required">
            <span>IT</span><br/><input type="checkbox"
         name="checkbox[]" value="Garments"/ required="required" ><span>Garments</span><br/><input type="checkbox" name="checkbox[]"
          value="Pharmacy"/ required="required" ><span>Pharmacy</span><br/><input type="checkbox" name="checkbox[]" 
          value="Electronics"/ required="required" ><span>Electronics</span><br/><input type="checkbox" name="checkbox[]" 
          value="Real estate"/ required="required" ><span>Real estate</span><br/>
		<input type="checkbox" name="checkbox[]" 
          value="Banking"/ required="required"><span>Banking</span></div><span class="clearfix"></span>
</div>

	<div class="element-checkbox" ><label class="title">Job Information You Want To See<span class="required">*</span></label>		<div class="column column1"><input type="checkbox" name="checkbox1[]" value="IT"/required="required" ><span>IT</span><br/><input type="checkbox" name="checkbox1[]" value="Electronics"/ required="required" ><span>Electronics</span><br/><input type="checkbox" name="checkbox1[]" value="Garments"/ required="required" ><span>Garments</span><br/><input type="checkbox" name="checkbox1[]" value="pharmacy"/ required="required" ><span>pharmacy</span><br/><span class="clearfix"></span>
    <input type="checkbox" name="checkbox1[]" value="banking"/ required="required" ><span>banking</span><br/>
    <input type="checkbox" name="checkbox1[]" value="Real Estate"/ required="required" ><span>Real Estate</span><br/></div><span class="clearfix"></span>
</div>

<div class="submit"><input type="submit" value="Submit" name="submit"/></div>
</form>
<script type="text/javascript" src="signup_files/formoid1/formoid-default-skyblue.js"></script>



</body>
</html>
