<?php
require("bidder.php");
$bidder='';
$bidderid='';
$birdderid= $_GET['birdderid'];
$bidder = bidder::findbidder($birdderid);

if($bidder){
echo "<h2>Update bidder <span>$birdderid</span></h2>\n";
echo "<form name=\"bidder\" action=\"index.php\" method=\"post\">\n ";
echo "<table>\n";
echo "<tr><td>bidderid: </td> <td>$bidder->bidderid</td></tr>\n";
echo "<tr><td>Last Name: </td><td><input type=\"text\" name=\"lastname\""."value=\"$bidder->lastname\"<td></tr>\n";
echo "<tr><td>First Name: </td><td><input type=\"text\" name=\"firstname\""."value=\"$bidder->firstname\"<td></tr>\n";
echo "<tr><td>Address: </td><td><input type=\"text\" name=\"address\""."value=\"$bidder->address\"<td></tr>\n";
echo "<tr><td>Phone: </td><td><input type=\"text\" name=\"phone\""."value=\"$bidder->phone\"<td></tr>\n";
echo "</table>\n";
echo "</CDATAtable><br><br>";
echo "<tr><td><input type=\"submit\" name=\"answer\""."value=\"updatebidder\"<td></tr>\n";
echo "<tr><td><input type=\"submit\" name=\"answer\""."value=\"Cancel\"<td></tr>\n";
echo "<tr><td><input type=\"hidden\" name=\"content\""."value=\"changebidder\"<td></tr>\n";
echo "<tr><td><input type=\"hidden\" name=\"birdderid\""."value=\"$birdderid\"<td></tr>\n";
echo "</form>";


}else{

echo "Sorry, bidder $bidderid not found \n";
}
?> 
<script language="javascript">
document.bidder.lastname.focus();
document.bidder.lastname.select();
</script>
