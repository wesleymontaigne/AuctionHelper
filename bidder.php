<?php
//the bidder.php COde for the Bidder Call Objct

//for show all the erros in this page just
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

class bidder{

public $bidderid;
public $lastname;
public $address;
public $phone;



function __construct($bidderid,$lname,$fname,$address,$phone){
$this->bidderid=$bidderid;
$this->lastname=$lname;
$this->firstname=$fname;
$this->address=$address;
$this->phone=$phone;

}//this function


function __tostring(){

$output="<h2>Bidder Number: $this->bidderid</h2> \n".
        "<h2>$this->lastname, $this->firstname</h2>\n".
        "<h2>$this->address</h2>\n".
        "<h2>$this->phone</h2>\n";
        return $output;

}//this to string


function savebidder(){


$db = new mysqli("sql206.epizy.com","epiz_25038034", "ruwI93fuWBuzrbb","epiz_25038034_montaigne");
$query = "INSERT INTO bidders VALUES(?,?,?,?,?)";
$stmt= $db->prepare($query);
$stmt->bind_param("issss",$this->bidderid,$this->lastname,$this->firstname,$this->address,$this->phone);
$result = $stmt->execute();
$db->close();
return $result;

}//this savebidder


function updatebidder(){

$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query = "UPDATE bidders SET bidderid = ?,address=?, phone=?".
          "WHERE bidderid = $this->bidderid";
          $stmt = $db->prepare($query);
          $stmt->bind_param("issss",$this->bidderid,$this->lastname,$this->firstname,$this->address,$this->phone);
          $result = $stmt->execute();
          $db->close();
          return $result;
}// bidder UPDATE

function removebidder(){

$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query = "DeLETE FROM bidders WHERE bidderid = $this->bidderid";
$result = $db->query($query);
$db->close();
return $result;
} // removibidder


static function getbidders(){

$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query = "SELECT * FROM bidders";
$result= $db->query($query);
if(mysqli_num_rows($result)>0){
$bidders = array();
while($row = $result->mysqli_fetch_array(mysqli_assoc)){
$bidder = new bidder($row['bidderid'],$row['lastname'],$row['firstname'],$row['address'],$row['phone']);
array_push($bidders,$bidder);
unset($bidder);

}
$db->close();
return $bidders;

}else{

$db->close();
return NULL;

}


}// getbidders

static function findbidder($bidderid){
$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query = "SELECT * FROM bidders WHERE bidderid = $bidderid";
$result = $db->query($query);

$row = $result->fetch_array(mysqli_assoc);
if($row){
$bidder = new bidder($row['bidderid'],$row['lastname'],$row['firstname'],$row['address'],$row['phone']);
$db->close();
return $bidder;
}else{

$db->close();
return NULL;

}




}//final findbidder function



}//final class



?> 
