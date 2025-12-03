<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RevLine 5 - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <h1>RevLine 5</h1>
            <div class="gauge">
                <img src="assets/gauge.png" alt="Gauge Icon">
            </div>
        </div>
    </header>

    <main>
        <div class="login-container">
            <h2>Log In</h2>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Enter Username:" required>
                <input type="password" name="password" placeholder="Enter Password:" required>
                <a href="forgot_password.php" class="forgot">Forgot Password</a>
                <button type="submit">Log in</button>
                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
            </form>
        </div>

        <div class="background-text">
            <h1><span class="rev">Rev</span><span class="line">Line</span> 5</h1>
        </div>
    </main>
</body>
</html>
