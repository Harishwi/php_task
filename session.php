<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
}

$name = $_SESSION['name'] ?? 'N/A';
$age = $_SESSION['age'] ?? 'N/A';
$gender = $_SESSION['gender'] ?? 'N/A';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" ><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required><br>
        <button type="submit">Set Session</button>
    </form>


        <p>Name: <?php echo ($name); ?></p>
        <p>Age: <?php echo ($age); ?></p>
        <p>Gender: <?php echo ($gender); ?></p>
   
</body>
</html>
