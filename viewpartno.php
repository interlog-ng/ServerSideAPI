<?php
function get_data()
{
   $connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");
   $query = "SELECT * FROM testIL";
   $result = mysqli_query($connect, $query);
   $employee_data = array();
   while($row = mysqli_fetch_array($result))
   {
    $item_data[] = array(
	'rackLocation' => $row["rackLocation"],
	'state' => $row["state"]
	);
   }
   
   return json_encode($item_data);
}
   //echo '<pre>';
   print_r(get_data());
   //echo '<pre>';
 //mysqli_close($connect);

?>