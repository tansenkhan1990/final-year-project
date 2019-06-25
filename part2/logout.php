<?php
include('crud.php');
if(isset($_REQUEST['std']))
{   session_start();
	$obj->logout();
	header('location:admin.php');
	
	}
	if(isset($_REQUEST['asd']))
	{ session_start();
			$obj->logout();
	header('location:form.php');
		
		}
?>