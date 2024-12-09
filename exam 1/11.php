<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
</head>
<body style="background-color: <?= $_COOKIE['bgcolor'] ?? 'white'; ?>;">
    <form method="POST" action="">
        <label for="color">Select Background Color:</label>
        <select name="color" id="color">
            <option value="white">White</option>
            <option value="lightblue">Light Blue</option>
            <option value="lightgreen">Light Green</option>
            <option value="yellow">Yellow</option>
        </select>
        <button type="submit" name="submit">Change Color</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $color = htmlspecialchars($_POST['color']);
    setcookie('bgcolor', $color, time() + 3600); // 1 hour
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

