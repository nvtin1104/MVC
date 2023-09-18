<?php
// echo 'home';
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';
// if(empty($_SERVER['PATH_INFO'])){
//     $url = $_SERVER['PATH_INFO'];
// }
// else {
//     $url ='/';
// }
session_start();
require_once 'bootstrap.php';
$app = new App();
// echo $url;
?>
