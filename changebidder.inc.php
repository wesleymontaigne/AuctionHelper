<?php
require("bidder.php");
if(isset($_SESSION['username'])){
$birdderid='';
$birdderid =$_POST['birdderid'];
$answer = $_POST['answer'];

if($answer=="updatebidder"){$bidder = bidder::findbidder($birdderid);
$bidder->bidderid=$_POST['birdderid'];
$bidder->lastname=$_POST['lastname'];
$bidder->firstname=$_POST['firstname'];
$bidder->address=$_POST['address'];
$bidder->phone=$_POST['phone'];
$result = $bidder->updatebidder();

if($result){

echo "<h2>Bidder $birdderid updated</h2>\n";



}else{
echo "<h2>Problem update bidder $birdderid </h2>\n";



}



}else{

echo "please login first";


}

}else{
echo "Não chegou nada";

}

?> 
