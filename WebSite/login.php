<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
</head>
<body>
    <h2>Sign In</h2>
    <form action="login.php" method="post">
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Sign In">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $valid_username = "user123"; 
    $valid_password = "pass123"; 

    if ($username === $valid_username && $password === $valid_password) {
        header("Location: success.php");
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>


</body>
</html>
