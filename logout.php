<?php


require_once('Public/init.php');
require_once('Public/clases/google_auth.php');
$auth= new GoogleAuth();
$auth->logout();
header('Location: Index.php');
?>