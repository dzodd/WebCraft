<?php
if(isset($_GET['manage'])){
$tam = $_GET['manage'];
}else{
$tam='';
}
if ($tam=='product') {
include("main/product.php");
}elseif ($tam=='cart') {
include("main/cart.php");
}elseif ($tam=='news') {
include("main/news.php");
}elseif ($tam=='about') {
include("main/about.php");
}elseif ($tam=='login') {
include("main/login.php");
}elseif ($tam=='contact') {
include("main/contact.php");
}elseif ($tam=='register') {
include("main/register.php");
}elseif ($tam=='my-account') {
include("main/my-account.php");
}elseif ($tam=='product-detail') {
include("main/product-detail.php");
}elseif ($tam=='addtocart') {
include("main/addtocart.php");
}elseif ($tam=='checkout') {
include("main/checkout.php");
}elseif ($tam=='detailnews') {
include("main/detailnews.php");
}elseif ($tam=='search') {
include("main/search.php");
}elseif ($tam=='payment') {
include("main/payment.php");
}else{
include("main/index.php");
}
?>