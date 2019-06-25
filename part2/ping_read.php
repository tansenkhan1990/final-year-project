<?php
include('crud.php');
if(isset($_REQUEST['id']))
{
	$result=$obj->ping_read($_REQUEST['id']);
	foreach($result as $res)
	{extract($res);
		}
	?>
    <h1><?php echo $title;?></h1><br/>
    <p><?php echo $content;?></p><br/>
    <h3>submitted by<br/><?php echo $username;?></h3><br/>
<?php
}
?>