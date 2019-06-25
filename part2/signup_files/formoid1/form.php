<?php

define('EMAIL_FOR_REPORTS', 'tansenkhan97@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-default-skyblue.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-default-skyblue.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-default-skyblue" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>My form</h2></div>
	<div class="element-input"  <?frmd_add_class("input")?>><label class="title">name<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-email"  <?frmd_add_class("email")?>><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-number"  <?frmd_add_class("number")?>><label class="title">Number<span class="required">*</span></label><input class="large" type="text" min="11" max="13" name="number" required="required" value=""/></div>
	<div class="element-textarea"  <?frmd_add_class("textarea")?>><label class="title">address<span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required="required"></textarea></div>
	<div class="element-checkbox"  <?frmd_add_class("checkbox")?>><label class="title">job information you want to see<span class="required">*</span></label>		<div class="column column1"><input type="checkbox" name="checkbox[]" value="php"/ required="required"><span>php</span><br/><input type="checkbox" name="checkbox[]" value="linux"/ required="required"><span>linux</span><br/><input type="checkbox" name="checkbox[]" value="java"/ required="required"><span>java</span><br/><input type="checkbox" name="checkbox[]" value="database"/ required="required"><span>database</span><br/></div><span class="clearfix"></span>
</div>
	<div class="element-checkbox"  <?frmd_add_class("checkbox1")?>><label class="title">training information you want to see</label>		<div class="column column1"><input type="checkbox" name="checkbox1[]" value="php"/ ><span>php</span><br/><input type="checkbox" name="checkbox1[]" value="linux"/ ><span>linux</span><br/><input type="checkbox" name="checkbox1[]" value="java"/ ><span>java</span><br/><input type="checkbox" name="checkbox1[]" value="database"/ ><span>database</span><br/></div><span class="clearfix"></span>
</div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-default-skyblue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>