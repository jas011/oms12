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
    p.name AS 'Drug',
    o.status AS 'Status',
    o.order_date AS 'Order Date',
   
    c.address AS 'Destination',
    o.total_amount AS 'Total',
    o.status AS 'Payment'
FROM Orders o
JOIN Customers c ON o.customer_id = c.customer_id
JOIN Order_Items oi ON o.order_id = oi.order_id
JOIN Products p ON oi.product_id = p.product_id;
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