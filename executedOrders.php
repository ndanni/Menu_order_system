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
    echo "<h2 class= 'text-center'>Orders</h2>";
    echo '<table class="table">
    <thead>
      <tr>
        <th scope="col">order_id</th>
        <th scope="col">food_id</th>
        <th scope="col">firstname</th>
        <th scope="col">lastname</th>
        <th scope="col">email</th>
        <th scope="col">phonenumber</th>
        <th scope="col">address</th>
        <th scope="col">order_status</th>
        <th scope="ResolvedOrder"</th>
      </tr>
    </thead>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["order_id"]."</td><td>".$row["food_id"]."<td>".$row["firstname"]."</td><td>".$row["lastname"]."</td>
    <td>"." ".$row["email"]."</td><td>".$row["phonenumber"]."</td><td>".$row["address"]."</td><td>";
    if($row['order_status'] == 0){
        echo "Pending";
    }
    else {
        echo '<td><a class="btn btn-primary" href="#" role="button">Link</a></td>';
    }"</td></tr>";
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
    <title>Dane's meals</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
  <tbody>
  <p><?php echo "<table>" ?>
  </tbody>
</table>
<a href="logout.php" class="btn btn-info" role="button">Logout</a>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/pooper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
