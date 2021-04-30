<?php

   #servername/host username password dbname
   $connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");
   
   
   //$userID = $_POST['userID'];
   //$randomNumber = $_POST['randomNumber'];
   $customerName = $_POST['customerName'];
   $locationAddr = $_POST['locationAddr'];
   $productName = $_POST['productName'];
   $commDate = $_POST['commDate'];
   $reportingDate = $_POST['reportingDate'];
   
   $vesselName = $_POST['vesselName'];
   $openingBal = $_POST['openingBal'];
   $takeOn = $_POST['takeOn'];
   $releaz1 = $_POST['releaz1'];
   $releaz2 = $_POST['releaz2'];
   $releaz3 = $_POST['releaz3'];
   $closingBal = $_POST['closingBal'];
   $bankRelease = $_POST['bankRelease'];
   $bankBalance = $_POST['bankBalance'];
     
  $sql = "INSERT IGNORE INTO `wc_inventory` (`customerName`, `locationAddr`, `productName`, `commDate`, `reportingDate`, `vesselName`, `openingBal`, `takeOn`, `releaz1`, `releaz2`,
           `releaz3`, `closingBal`, `bankRelease`, `bankBalance`) VALUES ('$customerName', '$locationAddr','$productName', '$commDate', '$reportingDate', '$vesselName', '$openingBal', 
'$takeOn', '$releaz1', '$releaz2', '$releaz3', '$closingBal', '$bankRelease', '$bankBalance')";

if($connect->query($sql) === TRUE) { 
	echo "insert successful";
} else {
	echo "Error: " . $sql . "<br>" . $connect->error;
}
   
$connect->close();


?>