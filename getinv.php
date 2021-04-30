<?php
header("Content-type:application/json");

$connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");

$userID = $_POST['userID'];

$query = mysqli_query($connect, "SELECT * FROM fmcg_inventory WHERE userID='$userID' " );

$response = array();

try{
    
  while($row = mysqli_fetch_assoc($query)){
	
	array_push($response,
	array(
		'id'    =>$row['id'],
		'userID' =>$row['userID'],
		'productName' =>$row['productName'],
		'customerName'  =>$row['customerName'],
		'locationAddr' =>$row['locationAddr'],
		'reportingDate'  =>$row['reportingDate'])
	);
  }
	echo json_encode($response);


}
catch(Exception $ex) {
echo json_encode($ex);
    
}
//echo json_encode($response);

?>