<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>order_id</th><th>food_id</th><th>firstname</th><th>lastname</th><th>email</th><th>phonenumber</th><th>address</th><th>others</th><th>order_status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["order_id"]."</td><td>".$row["food_id"]."<td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>"." ".$row["email"]."</td><td>".$row["phonenumber"]."</td><td>".$row["address"]."</td><td>".$row["others"]."</td><td>".$row["order_status"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
</head>
<body>
        <p><?php echo "<table>" ?></p> 

</body>
</html>

