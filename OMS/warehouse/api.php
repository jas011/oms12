<?php
//$order = $_GET["order"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 
    o.order_id AS 'Order ID',
    o.order_date AS 'Order Date',
    status AS 'Status'
FROM Orders o  limit 10;
";
$result = $conn->query($sql);


$orders = [];

if ($result->num_rows > 0) {
    // Fetch and add each row to the $orders array
    while($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
} else {
    $orders = ["message" => "No orders found"];
}

// Return the result as JSON
header('Content-Type: application/json');
echo json_encode($orders);
$conn->close();
?>