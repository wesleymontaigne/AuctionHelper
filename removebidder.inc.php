<?php
require("bidder.php");
if(isset($_SESSION['username'])){

$bidders=$_GET['birdderid'];
$bidders = bidder::findbidder($bidders);
if($bidders){
$result = $bidders->removebidder();
}else{
$result=NULL;

}
if($result){
echo "<h2>Bidder $bidders removed</h2>";
header('Location: http://localhost/exercises/SoftwarePHPOOP/index.php?content=listbidders');
exit;
}else{

echo "<h2>Sorry, problem romoving bidder $bidders</h2>\n"; 

}

}else{
echo "Please login first";
}


?> 
