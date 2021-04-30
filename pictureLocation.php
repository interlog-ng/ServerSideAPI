<?php

   #servername/host username password dbname
   $connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");
   
   $userID = $_POST['userID'];
   $image = $_POST['image'];
   $locationName = $_POST['locationName'];
   $currntDate = $_POST['currntDate'];
   $currntDate2 = $_POST['currntDate2'];
   $currntTime = $_POST['currntTime'];
   $gpsLocatn = $_POST['gpsLocatn'];
   $gpsAddrss = $_POST['gpsAddrss'];
   $randomNumber = $_POST['randomNumber'];
   
   $upload_path = "uploads/$locationName.jpg";
	   
  $sql = "INSERT IGNORE INTO `picture_location` (`userID`, `picture`, `locationName`, `currntDate`, `currntDate2`, `currntTime`, `gpsLocatn`, `gpsAddrss`, `randomNumber`) VALUES ('$userID', '$upload_path', '$locationName', '$currntDate','$currntDate2','$currntTime', '$gpsLocatn', '$gpsAddrss', '$randomNumber')";

if($connect->query($sql) === TRUE) { 
file_put_contents($upload_path,base64_decode($image));
	echo "insert successful";
} else {
	echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();


?>