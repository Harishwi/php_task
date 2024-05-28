<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM user_details WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
}

if (isset($_POST["update"])) {
  $id = $_POST['id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $birthdate = $_POST['birthdate'];

  $sql = "UPDATE user_details SET firstname='$firstname', lastname='$lastname', email='$email', phone_number='$phone_number', address='$address', birthdate='$birthdate' WHERE id=$id";

  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<body>

<h2>Edit User Details</h2>

<form method="post">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  First name: <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" required><br><br>
  Last name: <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" required><br><br>
  Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
  Phone Number: <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>"><br><br>
  Address: <input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>
  Birthdate: <input type="date" name="birthdate" value="<?php echo $row['birthdate']; ?>"><br><br>
  <input type="submit" name="update" value="Update">
</form>

</body>
</html>
