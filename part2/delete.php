<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<?php
include('crud.php');
if(isset($_REQUEST['bor']))
			{
			
			$obj->admin_delete('table_job',$_REQUEST['bor']);
			$obj->admin_delete('table_train',$_REQUEST['bor']);
			$obj->admin_delete('report',$_REQUEST['bor']);
			$obj->admin_delete2('user_info',$_REQUEST['bor']);
             $obj->admin_delete2('user_train',$_REQUEST['bor']);			
			echo "this user successfully delete";
			?>
            <li><a href="admin2.php">back to admin panel</a></li>
            <?php
			}
				?>
                
            
            