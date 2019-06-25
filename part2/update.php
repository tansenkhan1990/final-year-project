<a href="index.php"><button style="color:#9F0"><b style="color:#06F">Home</b></button></a>
<?php
include('crud.php');
if(isset($_REQUEST['update']))
{
	extract($_REQUEST);

$a=count($checkbox);
$b=count($checkbox1);

foreach($obj->get_choice($_REQUEST['name'],'user_train') as $val)
{
	extract($val);
    $name1=$name;
	$email1=$email;
	$password1=$password;
	$number1=$number;
	$address1=$address;
	}
for($i=0;$i<$a;++$i)
	{$c=NULL;
 error_reporting($obj->insert($name1,$email1,$number1,$address1,$checkbox[$i],$password1,$c));
	}
	for($i=0;$i<$b;++$i)
	{$d=NULL;
 error_reporting($obj->insert($name1,$email1,$number1,$address1,$d,$password1,$checkbox1[$i]));
	}?>
	<center><h1><?php echo "Your Profile Sucessfully Updated";?> </h1></center>
<?php 
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" /><br/><br/><br/>
	<title>Add your desireable interested field</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style=" background-image:url(images/images.jpg)">



<!-- Start Formoid form-->
<link rel="stylesheet" href="signup_radio_files/formoid1/formoid-flat-green.css" type="text/css" />
<script type="text/javascript" src="signup_radio_files/formoid1/jquery.min.js"></script>
<form class="formoid-flat-green" style="background-color: #990099; font-size: 14px; font-family: 'Lato', sans-serif; color: #FFFFFF; max-width: 480px; min-width: 150px" method="post"><div class="title" style="background-color:#C90">
  <h2>Update Your Profile</h2></div>
	<div class="element-checkbox" ><label class="title">Training information you want to get<span class="required">*</span></label>		<div class="column column1"><input type="checkbox" name="checkbox[]" value="IT"/ required="required"><span>IT</span><br/><input type="checkbox" name="checkbox[]" value="Garments"/ required="required"><span>Garments</span><br/><input type="checkbox" name="checkbox[]" value="Pharmacy"/ required="required"><span>Pharmacy</span><br/><input type="checkbox" name="checkbox[]" value="Electronics"/ required="required"><span>Electronics</span><br/><input type="checkbox" name="checkbox[]" value="Real estate"/ required="required"><span>Real estate</span><br/><input type="checkbox" name="checkbox[]" value="Banking"/ required="required"><span>Banking</span><br/></div><span class="clearfix"></span>
</div>
	<div class="element-checkbox" ><label class="title">job information you want to get<span class="required">*</span></label>		<div class="column column1"><input type="checkbox" name="checkbox1[]" value="IT"/ required="required"><span>IT</span><br/><input type="checkbox" name="checkbox1[]" value="Garments"/ required="required"><span>Garments</span><br/><input type="checkbox" name="checkbox1[]" value="Pharmacy"/ required="required"><span>Pharmacy</span><br/><input type="checkbox" name="checkbox1[]" value="Electronics"/ required="required"><span>Electronics</span><br/><input type="checkbox" name="checkbox1[]" value="Real estate"/ required="required"><span>Real estate</span><br/><input type="checkbox" name="checkbox1[]" value="Banking"/ required="required"><span>Banking</span><br/></div><span class="clearfix"></span>
</div>

<div class="submit"><input type="submit" value="Update" name="update"/></div>

</form>
<script type="text/javascript" src="signup_radio_files/formoid1/formoid-flat-green.js"></script>


<!-- Stop Formoid form-->



</body>
</html>







</body>
</html>
