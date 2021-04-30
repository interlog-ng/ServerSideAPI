<?php
$connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$id = $_POST['id'];
	$itemName = $_POST['itemName'];
	$quantity = $_POST['quantity'];
	$rackLocation = $_POST['rackLocation'];
	
	$query = "UPDATE `all_consumables` SET itemName='$itemName', quantity='$quantity', rackLocation='$rackLocation' WHERE id='$id' ";
	
	if (mysqli_query($connect, $query)) {
		
		$response['success'] = true;
		$response['message'] = "Successfully";
		
	}else{
		
		$response['success'] = false;
		$response['message'] = "Failure!";
	}
}else{
	
		$response['success'] = false;
		$response['message'] = "Error!";
}

echo json_encode($response);
?>