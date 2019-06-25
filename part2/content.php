<div class="8u">
<?php
if(isset($_REQUEST['name'],$_REQUEST['table']))
{$name1=$_REQUEST['name'];
$table1=$_REQUEST['table'];
$result3=$obj->get_all_art($table1,$name1);
foreach($result3 as $result2)
{extract($result2);
?>

                      <h3><?php echo $title;?></h3>
                      
                      <p><?php 
			   $a=explode(" ",$content);
			   $b=array_slice($a,0,30);
			   echo implode(" ",$b);
			   
			 echo "<li><a href='index.php?art_id=$id&table4=$table1'>read more......</a></li>";
}
}
                        
            else if(isset($_REQUEST['art_id'],$_REQUEST['table4']))
              {
			  foreach($obj->article($_REQUEST['art_id'],$_REQUEST['table4']) as $valu)
			  {
				  extract($valu);
			  
			  ?>
              <h1><?php echo $title;?></h1>
              <p><?php echo $content;?></p>
              <br/><h4>Office location:<?php echo $location;?></h4>
                <h3>Submitted by:<?php echo $username;?></h3>
                <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
               <center><?php echo  "<li><a href='footer.php?mac=$username&title=$title&content=$content&id=$id'><h4> <button>Report this artical and back to home
				</button></h4></a></li>"; ?>
             <?php

			  }
			  }
                  
			  else{
			  ?><p>

Welcome to traing and career related information for bangladesh, a free responsive HTML5 website template designed by It features a pretty simple combination of color which gives the template an elegant look, making it a great design for a corporate/portfolio type of website. And like all of our templates, it is built on HTML5 and CSS3, has full responsive support for desktops, tablets, and mobile devices, and is 100% free to use personally or commercially under thBe sure to check out for more awesome free HTML5 templates and follow us onfor updates and new releases! Enjoy!

In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus.

                      </p>
                      <?php
			  }
			  ?>
					</div>