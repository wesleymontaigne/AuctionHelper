<?php
session_start();
include("bidder.php");
include("items.php");
?> 
<!DOCTYPE html>
<html>
<head>
<title>AuctionHelper</tile>
<link rel="stylesheet" type="txt/css" href="ah_styles.css">
</head>
<body>
<header>
<?php include("header.inc.php")?>
</header>
<section id="container">
<nav>
<?php include("nav.inc.php");?>
</nav>
<main>
<?php
if(isset($_request['content'])){

include($_request['content'].".inc.php");

}else{

include("main.inc.php");

}
?>
</main>

<aside>
<?php include("aside.inc.php");?>
</aside>
</section>
<footer>
<?php include("footer.inc.php");?>
</footer>
</body>
</html>
