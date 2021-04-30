<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: 1;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 18px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
   position: sticky;
	  top: 0px;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Staff name</th> 
  <th>Customer's name</th> 
  <th>Location</th>
  <th>Reporting Date</th> 
  <th>Item</th> 
  <th>Size</th> 
  <th>Nos of Carts</th> 
  <th>Qty in Cart</th>
  <th>Total Qty Cart</th> 
  <th>Nos of Rolls</th> 
  <th>Qty in Rolls</th>
  <th>Total Qty in Rolls</th> 
  <th>Extra Pieces</th>
  <th>Sum Total</th> 
  <th>Carton Price</th> 
  <th>Roll Price</th> 
  <th>Piece Price</th> 
  <th>Value-Cartons</th>
  <th>Value-Rolls</th> 
  <th>Value-Pieces</th>
  <th>Total Amount</th> 
  <th>Entry Date</th> 
 </tr>
 <?php
$conn = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");

  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "

SELECT fmcg_inventory.*, users.username, users.id FROM fmcg_inventory LEFT JOIN `users` ON fmcg_inventory.userID = users.id ORDER BY userID";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {  
    echo "<tr><td>" . $row["username"]. "</td><td>" . $row["customerName"] . "</td><td>"
. $row["locationAddr"]. "</td><td>" . $row["reportingDate"]. "</td><td>" . $row["productName"]. "</td><td>" . $row["measmt"]. "</td><td>" . $row["noCartons"]. "</td><td>" . $row["qtyCartons"]. "</td>
<td>" . $row["totalAllCartons"]. "</td><td>" . $row["noRolls"]. "</td><td>" . $row["qtyRolls"]. "</td><td>" . $row["totalAllRolls"]. "</td><td>" . $row["extraPieces"]. "</td><td>" . $row["allTotal"]. "</td><td>" . $row["cartonPrice"]. "</td><td>" . $row["rollPrice"]. "</td><td>" . $row["piecePrice"]. "</td><td>" . $row["totalCartonPc"]. "</td><td>" . $row["totalRollPc"]. "</td><td>" . $row["totalPiecePc"]. "</td><td>" . $row["totalAmount"]. "</td><td>" . $row["entryDate"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>