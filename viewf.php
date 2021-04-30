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
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<form method="post" action="exportco.php">
     <input type="submit" name="export" class="btn btn-success" value="Download" />
    </form>
 <table>
 <tr>
  <th>Team Lead</th> 
  <th>Item Desc</th> 
  <th>Part No</th>
  <th>Quantity</th>
  <th>Entry Date</th> 
 </tr>
 <?php
$conn = mysqli_connect("interlog-ng.com","interlogng_webappadmin","e(V5)Sn64n-W","interlogng_webapp1");

  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT all_consumables.*, users.username, users.id FROM all_consumables LEFT JOIN `users` ON all_consumables.userID = users.id WHERE userID = 26 ORDER BY userID";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {  
    echo "<tr><td>" . $row["username"]. "</td><td>" . $row["itemName"] . "</td><td>" . $row["rackLocation"] . "</td><td>"
. $row["quantity"]. "</td><td>" . $row["entryDate"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>