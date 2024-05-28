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
    $sql = "DELETE FROM user_details WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
header("Location: read.php");
exit;
?>
