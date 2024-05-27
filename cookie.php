<?php

$expiryTime = time() + 10; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie("name", $_POST['name'], $expiryTime, "/");
    setcookie("age", $_POST['age'], $expiryTime, "/");
    setcookie("gender", $_POST['gender'], $expiryTime, "/");
    header("Location: cookie.php");
}

$name = $_COOKIE['name'] ?? 'no';
$age = $_COOKIE['age'] ?? 'no';
$gender = $_COOKIE['gender'] ?? 'no';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" ><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" required><br>
        <button type="submit">Set Cookies</button>
    </form>

    <?php if ($name != 'no' || $age != 'no' || $gender != 'no'): ?>
        <p>Name: <?php echo ($name); ?></p>
        <p>Age: <?php echo ($age); ?></p>
        <p>Gender: <?php echo ($gender); ?></p>
    <?php endif; ?>
</body>
</html>
