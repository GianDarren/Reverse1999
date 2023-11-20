<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <form action="../controllers/auth.php" method="POST">
        <h2>Reverse:1999</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <br>
        <br>
        <div class="goregis">
        Haven't made an account ? <a id="italic" href="./register.php">Register now!</a>
        </div>
    </form>

</body>
</html>