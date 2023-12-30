<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method</title>
</head>
<body>
    <form method="get" action="GET.php" id = "form">
        <label>Name</label>
        <input type="text" name="name" required><br>
        <label>password</label>
        <input type="password" name="pass" required><br>
        <label>Email</label>
        <input type="Email" name="mail" required><br>
        <input type="radio" name="radio" required>
        <label>MALE</label>
        <input type="radio" name="radio" required>
        <label>FEMALE</label><br>

        <button type="submit" name="Submit">Register</button>
    </form>

    <?php
    if ($_GET){
    echo print_r($_GET);
    }
    elseif ($_POST){
        echo print_r($_POST);
    }
    ?>
    
</body>
</html>