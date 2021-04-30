<?php
header("Content-type:application/json");

$connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");

$query = mysqli_query($connect, "SELECT * FROM notes");

$response = array();

while($row = mysqli_fetch_assoc($query)){
	
	array_push($response,
	array(
		'id'    =>$row['id'],
		'title' =>$row['title'],
		'note'  =>$row['note'],
		'color' =>$row['color'],
		'date'  =>$row['date'])
	);
}

echo json_encode($response);

?>