<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - RevLine 5</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <header class="navbar">
        <h1>RevLine 5</h1>
    </header>

    <main>
        <div class="content">
            <div class="left-image">
                <img src="assets/wheel.png" alt="Wheel Image">
            </div>

            <div class="form-container">
                <div class="form-header">
                    <img src="assets/gauge.png" alt="Gauge Icon" class="gauge-icon">
                    <h2>Sign Up</h2>
                </div>

                <form method="post">
                    <input type="email" name="email" placeholder="Enter Email:" required>
                    <input type="text" name="username" placeholder="Enter Username:" required>
                    <input type="password" name="password" placeholder="Enter Password:" required>
                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
