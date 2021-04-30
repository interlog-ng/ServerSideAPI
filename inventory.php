<?php date_default_timezone_set("Africa/Lagos");?>

<?php

   #servername/host username password dbname
   $connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");
   
   
   $userID = $_POST['userID'];
   $randomNumber = $_POST['randomNumber'];
   $customerName = $_POST['customerName'];
   $locationAddr = $_POST['locationAddr'];
  // $marketName = $_POST['marketName'];
   $productName = $_POST['productName'];
   $reportingDate = $_POST['reportingDate'];
   
   $measmt = $_POST['measmt'];
   $noCartons = $_POST['noCartons'];
   $qtyCartons = $_POST['qtyCartons'];
   $totalAllCartons = $_POST['totalAllCartons'];
   $noRolls = $_POST['noRolls'];
   $qtyRolls = $_POST['qtyRolls'];
   $totalAllRolls = $_POST['totalAllRolls'];
   $extraPieces = $_POST['extraPieces'];
   $extraPP = $_POST['extraPP'];
   $allTotal = $_POST['allTotal'];
   
   $cartonPrice = $_POST['cartonPrice'];
   $rollPrice = $_POST['rollPrice'];
   $piecePrice = $_POST['piecePrice'];
   $totalCartonPc = $_POST['totalCartonPc'];
   $totalRollPc = $_POST['totalRollPc'];
   $totalPiecePc = $_POST['totalPiecePc'];
   $totalAmount = $_POST['totalAmount'];
	   
  $sql = "INSERT IGNORE INTO `fmcg_inventory` (`userID`, `randomNumber`, `customerName`, `locationAddr`, `productName`, `reportingDate`, `measmt`, `noCartons`, `qtyCartons`, `totalAllCartons`, `noRolls`,
           `qtyRolls`, `totalAllRolls`, `extraPieces`,`extraPP`, `allTotal`, `cartonPrice`, `rollPrice`,`piecePrice`, `totalCartonPc`, `totalRollPc`,`totalPiecePc`, `totalAmount`) VALUES ('$userID', '$randomNumber', '$customerName', '$locationAddr','$productName', '$reportingDate', '$measmt', '$noCartons', 
'$qtyCartons', '$totalAllCartons', '$noRolls', '$qtyRolls', '$totalAllRolls', '$extraPieces', '$extraPP', '$allTotal', '$cartonPrice', '$rollPrice', '$piecePrice', '$totalCartonPc', '$totalRollPc', '$totalPiecePc', '$totalAmount')";

if($connect->query($sql) === TRUE) { 
	echo "insert successful";
} else {
	echo "Error: " . $sql . "<br>" . $connect->error;
}
   


$connect->close();


?>