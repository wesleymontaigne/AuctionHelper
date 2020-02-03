<?php
require("bidder.php");

echo "<script> language=\"javascript\">\n";
echo "function listbox_dblclick(){\n";
echo "document.bidders.displaybidder.click()}\n";
echo "</script>";

echo "<script> language=\"javascript\">\n";
echo "function button_click(target){\n";

echo "if(target==0)bidders.action=\"index.php?content=displaybidder\"\n";
echo "if(target==1) bidders.action=\"index.php?content=removibidder\"\n";
echo "if(target==3) bidders.action=\"index.php?content=updatebidder\"\n";
echo "}\n";
echo "</script>\n";
echo "<h2></h2>\n";
echo "<form name=\"bidders method=\"post\">\n";
echo "<select id=\"mySelect\" onclick=\"selectbirddeid()\" ondblclick=\"listbox_dblclick()\" name\"bidderid\" size=\"20\">\n";

// concatenat with :: to get the function in another file
$bidders= bidder::getbidders();

foreach($bidders as $bidder){
$bidderid =$bidder->bidderid;
$name = $bidderid. "-".$bidder->lastname.",".$bidder->firstname;
echo "<option   value=\"$bidderid\">$name</option>\n";
}

echo "</select><br><br>\n";

echo "<input type=\"button\" onclick=\"redirect(0)\" value=\"view \"> \n";
echo "<input type=\"button\" onclick=\"redirect(1)\" value=\"deletebidder\"> \n";
echo "<input type=\"button\" onclick=\"redirect(2)\" value=\"updatebidder\"> \n";
echo "</form>";
?> 

<script>


function selectbirddeid(){
var birdderid = document.getElementById("mySelect").value;
console.log(birdderid);
}

function redirect(numero){

if(numero==0){
var birdderid0 = document.getElementById("mySelect").value;
window.location.replace("index.php?content=displaybidder&&birdderid="+birdderid0);

}else if(numero==1){

var birdderid1 = document.getElementById("mySelect").value;
window.location.replace("index.php?content=removebidder&&birdderid="+birdderid1);


}else if(numero==2){
var birdderid2 = document.getElementById("mySelect").value;
window.location.replace("index.php?content=updatebidder&&birdderid="+birdderid2);

}


}



</script>

