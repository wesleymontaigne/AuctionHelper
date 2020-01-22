<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

class Item{


public $itemid;
public $name;
public $description;
public $resaleprice;
public $winbidder;
public $winprice;




function __construct($itemid,$name,$description,$resaleprice,$winbidder,$winprice){


$this->itemid =$itemid;
$this->name =$name;
$this->description =$description;
$this->resaleprice =$resaleprice;
$this->winbidder =$winbidder; 
$this->winprice =$winprice; 

}// finished __construct


function __tostring(){

$output = "<h2>Item: $this->itemid<h2/>".
          "<h2>Name: $this->nome<h2/>\n";
          "<h2>Description: $this->description<h2/>\n";
          "<h2>Resale price: $this->resaleprice</h2>\n";
          "<h2>Win bid : $this->winbid at $this->winprice<h2/>\n";
          return $output;


}//to string


function saveitem(){

$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query = "INSERT INTO items VALUES (?,?,?,?,?,?)";
$stmt = $db->prepare($query);
$stmt->bind_param("issdid", $this->itemid,$this->$name,$this->$description,$this->resaleprice,$this->winbidder,$this->winprice);
$result = $stmt->execute();
$db->close();
return $result;
} // finished saveitem

function updateitem(){

$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query="UPDATE items SET name=?, description =?, resaleprice=?".
       "winbidder=?,winprice=? WHERE itemid=$this->itemid";
       $stmt = $db->prepare($query);
       $stmt->bind_param("ssdid",$this->name,$this->description,$this->resaleprice,$this->winbidder,$this->winprice);
       $result = $stmt->execute();
       $db->close();
       return $result;

}//updateitem

function removeitems(){
$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query="DELETE FROM items WHERE itemid= $this->itemid";
$result = $db->query($query);
$db->close();
return $result;
}//removeitems


static function getitems(){
$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query= "SELECT * FROM items";
$result = $db->query($query);
if(mysqli_num_rows($result) > 0 ){
$items = array();

                  while($row = $result->fetch_array(mysqli_assoc)){
                  $items = new item($row['itemid'], $row['nome'],
                  $row['description'], $row['resaleprice'],
                  $row['winbidder'],$row['winprice']);
                  array_push($items, $item);
                  $db->close();
                  return $items;

}



}else{


$db->close();
return NULL;

}
}//gettitem


static function getitemsbybidder($bidderid){
$db = new mysqli("sql206.epizy.com", "epiz_25038034","ruwI93fuWBuzrbb", "epiz_25038034_montaigne");
$query= "SELECT * FROM items WHERE winbidder = $bidderid ";
$result= $db->query($query);
if(mysqli_num_rows($result)>0){
$items = array();
while($row = $result->fetch_array(mysqli_assoc)){
$item = new item ($row['itemid'],$row['name'],
                  $row['description'],$row['resaleprice'],
                  $row['winbidder'],$row['winprice']);
                  array_push($items,$item);
}
$db->close();
return $items;

}else{

$db->close();

return NULL;


}



}// finished getitemsbybidder 



static function finditem($itemid){
$db=new mysqli("localhost","user","password","banch");
$query ="SELECT *FROM items WHERE itemid = $itemid";
$result = $db->query($query);
$row = $result->fetch_array(mysql_assoc);
if($row){
$item = new item($row['itemid'],$row['name'],$row['description'],$row['resaleprice'],$row['winbidder'],$row['winprice']);
$db->colse();
return $item;

}else{

$db->close();
return NULL;



}

}// finditem

}//finished the class


?> 
