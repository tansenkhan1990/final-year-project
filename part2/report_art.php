<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>complain box</title>
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<?php 
include('crud.php');
if(isset($_REQUEST['id']))
{
      $obj->delete_art_user420($_REQUEST['id'],'report');	
	$obj->delete_art_user420($_REQUEST['id'],'table_train');
		$obj->delete_art_user420($_REQUEST['id'],'table_job');
   
	}
$result=$obj->report_art_see();
?>
    <table class="table">
        <thead>

        <tr>

            <th>Title</th>

            <th>Report generated</th>

            <th>Delete</th>
            
                  <th>Read this article</th>
        </tr>
        </thead>
<?php
foreach($result as $res)
{
	extract($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Twitter Bootstrap 3 Table with Emphasis Classes</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
        <tbody>
        
            <tr class="success">
                <td><?php echo $title;?></td>
                <td><?php echo $report;?></td>
<td><a href="report_art.php?id=<?php echo $id;?>" class="btn btn-danger btn-lg info" role="button">Delete this article</a></td>                <td><a href="ping_read.php?id=<?php echo $id;?>" class="btn btn-success btn-lg info" role="button">Read article</a></td>
            </tr>
		 <?php
              }
			  
		 ?>
        </tbody>
    </table>
</div>
</body>
</html>                                		