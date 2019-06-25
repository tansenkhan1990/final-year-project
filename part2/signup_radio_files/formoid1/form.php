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
	<div class="element-input"  <?frmd_add_class("input")?>><label class="title">Input Text</label><input class="large" type="text" name="input" /></div>
	<div class="element-radio"  <?frmd_add_class("radio")?>><label class="title">select your desire training information</label>		<div class="column column1"><input type="radio" name="radio" value="options 1" /><span>options 1</span><br/></div><span class="clearfix"></span>
</div>
	<div class="element-radio"  <?frmd_add_class("radio1")?>><label class="title"></label>		<div class="column column1"><input type="radio" name="radio1" value="options 2" /><span>options 2</span><br/></div><span class="clearfix"></span>
</div>
	<div class="element-radio"  <?frmd_add_class("radio2")?>><label class="title"></label>		<div class="column column1"><input type="radio" name="radio2" value="options 3" /><span>options 3</span><br/></div><span class="clearfix"></span>
</div>
	<div class="element-radio"  <?frmd_add_class("radio3")?>><label class="title"></label>		<div class="column column1"><input type="radio" name="radio3" value="options 4" /><span>options 4</span><br/></div><span class="clearfix"></span>
</div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-default-skyblue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>