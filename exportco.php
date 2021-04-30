<?php  
//export.php  
$connect = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT all_consumables.*, users.username, users.id FROM all_consumables LEFT JOIN `users` ON all_consumables.userID = users.id ORDER BY entryDate";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Team Lead</th>  
                         <th>Product Name</th>  
                         <th>Quantity</th>  
					     <th>Rack Location</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  				 <td>'.$row["username"].'</td>
                         <td>'.$row["itemName"].'</td>  
                         <td>'.$row["quantity"].'</td>  
                         <td>'.$row["rackLocation"].'</td> 						 
						 
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>