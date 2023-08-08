<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Optional: add server-side validation using PHP

  // Connect to the MySQL database
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'login');
  

  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert the contact form data into the database
  $sql = "INSERT INTO contact_forms (name, email, message)
          VALUES ('$name', '$email', '$message')";

  if (mysqli_query($conn, $sql)) {
    echo "Thank you for contacting us!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

?>
