<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$food_id = $_POST['food_id'];
$others = $_POST['others'];
saveToFile ($firstname, $lastname, $email, $phonenumber, $address, $food_id, $others);
saveToDatabase ($firstname, $lastname, $email, $phonenumber, $address, $food_id);
header('Location:success.html');
function saveToFile ($firstname, $lastname, $email, $phonenumber, $address, $food_id, $others) {
$fileHandler = fopen ('record.txt', 'a');
$string = $firstname . ',' . $lastname . ',' . $email . ',' . $phonenumber . ',' . $address . ',' . $food_id . ',' . "\n";
fwrite ($fileHandler, $string);
fclose ($fileHandler);
}
function saveToDatabase($firstname, $lastname, $email, $phonenumber, $address, $food_id, $others) {
    $serverName = "localhost";
    $database = "project";
    $username = "root";
    $password = "";
    //Open database connection
    $conn = mysqli_connect($serverName, $username,$password, $database);
    // Check that connection exists
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO orders (firstname, lastname, email, phonenumber, address, food_id, others, created_date)
    VALUES ('$firstname', '$lastname', '$email','$phonenumber', '$address','$food_id', '$others', NOW())";
    $result = mysqli_query($conn, $sql);
    //Check for errors
    if (!$result) {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    //Close the connection
    mysqli_close($conn);
    }
?>