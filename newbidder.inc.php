<?php
//require("addbidder.inc.php");
echo "<h2>Add new bidder </h2>\n";
echo "<form name=\"bidder\" action=\"index.php\" method=\"post\">\n ";
echo "<table>\n";
echo "<tr><td>Last Name: </td><td><input type=\"text\" name=\"lastname\"<td></tr>\n";
echo "<tr><td>First Name: </td><td><input type=\"text\" name=\"firstname\"<td></tr>\n";
echo "<tr><td>Address: </td><td><input type=\"text\" name=\"address\"<td></tr>\n";
echo "<tr><td>Phone: </td><td><input type=\"text\" name=\"phone\"<td></tr>\n";
echo "</table>\n";
echo "</CDATAtable><br><br>";
echo "<tr><td><input type=\"submit\" name=\"answer\""."value=\"addnewbidder\"<td></tr>\n";
echo "<tr><td><input type=\"submit\" name=\"answer\""."value=\"Cancel\"<td></tr>\n";
echo "<tr><td><input type=\"hidden\" name=\"content\""."value=\"addbidder\"<td></tr>\n";
// echo "<tr><td><input type=\"hidden\" name=\"birdderid\""."value=\"$birdderid\"<td></tr>\n";
echo "</form>";
?>

<script language="javascript">
document.newbidder.bidderid.focus();
document.newbidder.bidderid.select();
</script>
