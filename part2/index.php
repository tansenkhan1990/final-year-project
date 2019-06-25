<link rel="stylesheet" href="mbcsmbtl58.css" type="text/css" />
<style type="text/css">
body,td,th {
	color: #000;
}
</style>
<?php
include('crud.php');
 session_start();
if(isset($_SESSION['username']))
{
	$a=$_SESSION['username'];
	
	
	}
	
?>

<!-- Navigation menus created with the free version of Easy CSS Menu downloaded from www.easycssmenu.com
     You are free to use this menu code for personal, non-commercial use only. Any other use is a serious violation of copyright laws.
     You are required to retain this comment block in your website code in an unchanged fashion.
     The above limitations do not apply on menus created with the paid version of the software. -->
 <div style="background-image:url(images/images.jpg)">
<div style="background-color:#3F6">     
     
<ul id="mbtl58ebul_table" class="mbtl58ebul_menulist css_menu" style="width: 589px; height: 27px;">
  <li class="topitem spaced_li"><div class="buttonbg gradient_button gradient27" style="width: 64px;"><a href="index.php" class="active">Home</a></div></li>
  <li class="topitem spaced_li"><div class="buttonbg gradient_button gradient27"><div class="arrow"><a class="button_2">Job Information </a></div></div>
  <ul class="gradient_menu gradient126">
  <?php
  $value=$obj->get_choice($a,'user_train');
  foreach($value as $val)
  {extract($val);
  if($job1==NULL)
  {continue;
	 }
	  else{
   $table_j="table_job";
  echo "<li ><a href='index.php?name=$job1&table=$table_j'>$job1</a></li>";
   }
  }
 ?>
  </ul></li>
  <li class="topitem spaced_li"><div class="buttonbg gradient_button gradient27" style="width: 151px;"><div class="arrow"><a class="button_3">Training Information</a></div></div>
  <ul class="gradient_menu gradient126">
  <?php
  $result=$obj->get_choice($a,'user_train');
  foreach($result as $res)
  {extract($res);
  $table_t="table_train";
  if($train1==NULL)
  {continue;
	  }
	  else{
  ?>
  <?php echo "<li ><a href='index.php?name=$train1&table=$table_t'>$train1</a></li>";?></a></li>
<?php
  }
  }
?>
  </ul></li>
  <li class="topitem spaced_li"><div class="buttonbg gradient_button gradient27" style="width: 105px;">
  <a href="submit.php?name=<?php echo $a;?>">Submit Article</a></div></li>
  <li class="topitem"><div class="buttonbg gradient_button gradient27" style="width: 104px;">
  <a href="update.php?name=<?php echo $a;?>">Update Profile</a></div></li>
</ul><br>
</div>

<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability and compatibility with very old web browsers. -->
<script type="text/javascript" src="mbjsmbtl58.js"></script><?php
include('header.php');
?>

<div id="banner-wrapper" style="background-image:url(images/images.jpg)"> 
        <!-- Banner -->
        <div class="5grid-layout">
                <div class="row">
                        <div class="12u">
                                <div class="row">
                                        <div id="banner">
                                                <div class="imgwrap"> <a href="#"><img src="pics01.jpg" alt=""></a></div>
                                        </div>
                                        <div class="shadow"><a href="#"><img src="css/images/banner-shadow-bg.png" height="25" alt=""></a></div>
                                </div>
                        </div>
                </div>
        </div>
</div>
<div id="wrapper">
        <div id="main-wrapper">
          <div class="12u" id="main-content" style="background-image:url(images/images.jpg)">
                  <div class="5grid-layout">
                    <div class="row">
                                  <?php
                    include('content.php');
                                        ?>
                                        <?php
                                        include('sidebar.php');
                    ?>
                    </div>
            </div>
          </div>
          <div id="footer-wrapper" style="background-image:url(images/images.jpg)">
            
          </div>
                <div class="divider2"></div>
                <div id="marketing-wrapper">
                        <?
            include('footer.php');
                        ?>
                </div>
        </div>
</div>
</div>
</body>
</html>
