<?php

   #servername/host username password dbname
   $connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");
   
   
   $userID = $_POST['userID'];
   $randomNumber = $_POST['randomNumber'];
   $itemName = $_POST['itemName'];
   $quantity = $_POST['quantity'];
   $rackLocation = $_POST['rackLocation'];
	   
  $sql = "INSERT IGNORE INTO all_consumables (`userID`, `randomNumber`, `itemName`, `quantity`, `rackLocation`) VALUES ('$userID', '$randomNumber', '$itemName', '$quantity', '$rackLocation')";

if($connect->query($sql) === TRUE) { 
	echo "insert successful";
} else {
	echo "Error: " . $sql . "<br>" . $connect->error;
}
   
$connect->close();


?>