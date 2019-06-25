<a href="index.php"><button style="color:#9F0"><b style="color:#06F">Home</b></button></a>
<?php
include('crud.php');
if(isset($_REQUEST['submit']))
{
	extract($_REQUEST);
	$username=$_REQUEST['name'];
	if($radio1=='Job')
	{
		$obj->insert3('table_job',$username,$select,$Title,$Content,$Location);
		?><h1><center><?php echo "Successfully Inserted";?></center></h1>
		<?php
        }
		else{
			$obj->insert3('table_train',$username,$select,$Title,$Content,$Location);
		?><h1><center><?php echo "Successfully Inserted";?></center></h1>
        <?php
			}
	}
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
	<title>Share your information </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style=" background-image:url(images/images.jpg)" >



<!-- Start Formoid form-->
<link rel="stylesheet" href="signup_radio_files/formoid1/formoid-flat-green.css" type="text/css" />
<script type="text/javascript" src="signup_radio_files/formoid1/jquery.min.js"></script>
<form class="formoid-flat-green" style="background-color: #990099; font-size: 14px; font-family: 'Lato', sans-serif; color: #FFFFFF; max-width: 480px; min-width: 150px" method="post"><div class="title">
  <h2>Share Your Information </h2></div>
	<div class="element-radio" ><label class="title">Select your article category<span class="required">*</span></label>		<div class="column column1"><input type="radio" name="radio1" value="Training" required/><span>Training</span><br/><input type="radio" name="radio1" value="Job" required/><span>Job</span><br/></div><span class="clearfix"></span>
</div>
	<div class="element-input" ><label class="title">Title<span class="required">*</span></label><input class="large" type="text" name="Title"  style="background-color:#333" required/></div>
	<div class="element-select" ><label class="title">Select your article field<span class="required">*</span></label><div class="large"><span><select name="select" required="required">

		<option value="IT">IT</option><br/>
		<option value="Garments">Garments</option><br/>
		<option value="Pharmacy">Pharmacy</option><br/>
		<option value="Electronics">Electronics</option><br/>
		<option value="Real estate">Real estate</option><br/>
		<option value="Banking">Banking</option><br/></select><i></i></span></div></div>
	<div class="element-textarea" ><label class="title">Content</label><textarea class="medium" name="Content" cols="20" rows="5" style="
    background-color:#333" ></textarea></div>
	<div class="element-input" ><label class="title">Location</label><input class="large" type="text" name="Location" style="
    background-color:#333" /></div>

<div class="submit"><input type="submit" value="Submit" name="submit"/></div></form>
<script type="text/javascript" src="signup_radio_files/formoid1/formoid-flat-green.js"></script>

</body>
</html>
