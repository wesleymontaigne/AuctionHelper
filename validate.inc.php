<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$userid=$_POST['userid'];
$password=$_POST['password'];

$query = "SELECT name FROM auction WHERE userid= ? AND password=?";
$db= new mysqli("localhost","wesley","Aa14020410","AuctionHelper");
$stmt = $db->prepare($query);
$stmt->bind_param("ii",$userid,$password);
$stmt->execute();
$stmt->bind_result($name);
$stmt->fetch();
if(isset($name)){

$_SESSION["username"] = "$name";
echo "<h2>Welcome to AuctionHelper</h2>\n";
echo "<p>$name</p>\n";
//include("main.inc.php");


header("Location:index.php");
}else{

echo "<h2>Sorry, login incorret</h2>\n";
echo "<h2><a href=\"index.php\">please try again<a/> </h2>\n";
}

?> 
