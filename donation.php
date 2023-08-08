<?php
// Connect to database
define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'login');
  

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert donation record
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$amount = $_POST["amount"];
$currency = $_POST["currency"];

$sql = "INSERT INTO donations (name, email, phone, amount, currency)
        VALUES ('$name', '$email', '$phone', $amount, '$currency')";

if ($conn->query($sql) === TRUE) {
  echo "Thank you for your donation!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
