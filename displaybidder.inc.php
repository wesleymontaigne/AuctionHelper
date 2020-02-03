<?php
require("bidder.php");
require_once __DIR__ .'/items.php';
if(!isset($_REQUEST['birdderid']) OR (!IS_NUMERIC($_REQUEST['birdderid']))){

echo "<h2>You not select a valid bidderid to view </h2>\n";
echo "<a href=\"index.php?content=listbidders\"> List Bidders</a>";
}else{

echo $bidderid = $_REQUEST['birdderid'];
$bidder  = bidder::findbidder($bidderid);

if($bidder){

echo $bidder;
echo "<br><br>\n";
//List items won

$items= Item::getitemsbybidder($bidderid);
if($items){


echo "<b>Items Won:</b> <br>\n";
echo "<table>\n";
echo "<tr><td><b>Item<b></td><td><b>Name</b></td>"."<td><b>description</b></td><td><b>Amount</b></td></tr>";
$itemtotal=0;

foreach($items as $item){

printf("<tr><td>%s</td></tr>",$item->itemid);
printf("<tr><td>%s</td></tr>",$item->name);
printf("<tr><td>%s</td></tr>",$item->description);
printf("<tr><td>%s</td></tr>",$item->winprice);
$itemtotal=$itemtotal+$item->winprice;
}
echo "<tr></td></td><td>Total</td>";
printf("<td><b>%.2f</b></td></tr>\n",$itemtotal);
echo "</table>\n";

}else{
echo "<h2>Theres no items won at this time</h2>";

}


}else{
echo 'Bidder ID not found '; 
}


}

?> 
