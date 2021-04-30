<?
$servername = "interlog-ng.com";
$username = "interlogng_webappadmin";
$password = "e(V5)Sn64n-W";
$database = "interlogng_webapp1";
 
//creating a new connection object using mysqli 
$conn = mysqli_connect($servername, $username, $password, $database);
 
//if there is some error connecting to the database
//with die we will stop the further execution by displaying a message causing the error 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>