<?php

if(!isset($_SESSION["username"])){

?>
<h2>Please login in</h2><br>
<form name="login" action="index.php" method="post">
<label>User ID<label/>
<input type="text" name="userid" size="10">
<br>
<br>
<label>Password</label>
<input type="password" name="password" size="10">
<br>
<br>
<input type="hidden" name="content" value="validate">
<input type="submit" value="login">
</form>
<?php 
}else{


echo "<h2>Welcome to AuctionHelper</h2>\n";
echo "<br><br>";
echo "<p>This program tracks bidder and auction item information</p>\n";
echo "please use this link in the navagation windown\n";
echo "<p>Please DO NOT use the browser navegation buttons! </p>\n";

}
?>
<script language="javascript">
document.login.userid.focus();
document.login.userid.select();
</script>
