<?php
header("Content-type:application/json");

$connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");

$userID = $_POST['userID'];

$query = mysqli_query($connect, "SELECT * FROM all_consumables WHERE userID='$userID' ORDER BY entryDate DESC " );

$response = array();

try{
    
  while($row = mysqli_fetch_assoc($query)){
	
	array_push($response,
	array(
		'id'    =>$row['id'],
		'userID' =>$row['userID'],
		'itemName' =>$row['itemName'],
		'quantity'  =>$row['quantity'],
		'rackLocation' =>$row['rackLocation'],
		'entryDate' =>$row['entryDate'])
	);
  }
	echo json_encode($response);


}
catch(Exception $ex) {
echo json_encode($ex);
    
}
//echo json_encode($response);

?>