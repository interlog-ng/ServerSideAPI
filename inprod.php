<?php 
 
	//database constants
	$connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");
	
	//Checking if any error occured while connecting
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
	//creating a query
	$stmt = $connect->prepare("SELECT id, customerName, locationAddr, productName, reportingDate FROM fmcg_inventory;");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($id, $customerName, $locationAddr, $productName, $reportingDate);
	
	$products = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id'] = $id; 
		$temp['customerName'] = $customerName; 
		$temp['locationAddr'] = $locationAddr; 
		$temp['productName'] = $productName; 
		$temp['reportingDate'] = $reportingDate; 
		//$temp['image'] = $image; 
		array_push($products, $temp);
	}
	
	//displaying the result in json format 
	echo json_encode($products);
	?>