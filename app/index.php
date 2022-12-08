<?php
include "/models/crud.php";
$db = new crud();
if (isset($_GET['controller'])) {
$controller = $_GET['controller'];
} else {
$controller = "";
}
switch ($controller) {
 case 'jewellery':
require_once "controller/index.php";
break;
 default:
require_once "controller/index.php";
 break;
}
?>