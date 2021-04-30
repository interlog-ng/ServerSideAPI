<?php
header("Content-type:application/json");

$connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");

$query = mysqli_query($connect, "SELECT * FROM test_view");

$response = array();

while($row = mysqli_fetch_assoc($query)){
	
	array_push($response,
	array(
		'id'    =>$row['id'],
		'email' =>$row['email'],
		'name'  =>$row['name'],
		'school' =>$row['school'])
	);
}

echo json_encode($response);

?>