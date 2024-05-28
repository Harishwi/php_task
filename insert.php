<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $birthdate = $_POST['birthdate'];

  $sql = "INSERT INTO user_details (firstname, lastname, email, phone_number, address, birthdate) 
          VALUES ('$firstname', '$lastname', '$email', '$phone_number', '$address', '$birthdate')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<h2>Insert User Details</h2>

<form method="post">
  First name: <input type="text" name="firstname" required><br><br>
  Last name: <input type="text" name="lastname" required><br><br>
  Email: <input type="email" name="email"><br><br>
  Phone Number: <input type="text" name="phone_number"><br><br>
  Address: <input type="text" name="address"><br><br>
  Birthdate: <input type="date" name="birthdate"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
