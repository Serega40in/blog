<?php 
require_once("database.php"); 
require_once("models/articles.php"); 

$link = db_connect();
$article = articles_all($link); 

include("views/articles.php"); 
?>
<?php include_once("../analyticstracking.php") ?>