<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RevLine 5 - Inquiry Submitted</title>
    
    <style>
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial Black', sans-serif;
            background-color: #000;
            color: #fff;
            min-height: 100vh;
        }

        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #d62828;
            padding: 10px 40px;
        }

        .navbar h1 {
            color: #fff;
            font-size: 28px;
            margin: 0;
            letter-spacing: 1px;
        }

        .navbar nav ul {
            list-style: none;
            display: flex;
            gap: 40px;
            margin: 0;
            padding: 0;
        }

        .navbar nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            transition: 0.3s;
        }

        .navbar nav ul li a:hover,
        .navbar nav ul li a.active {
            text-decoration: underline;
        }

        
        .thank-you-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 80vh; 
            padding: 20px;
        }
        
        .thank-you-container h2 {
            font-size: 48px;
            color: #d62828;
            margin-bottom: 20px;
        }

        .thank-you-container p {
            font-size: 20px;
            max-width: 600px;
            margin-bottom: 40px;
        }
        
        
        .home-button {
            text-decoration: none;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
            text-transform: uppercase;
            background-color: #000;
            color: #fff;
            border: 2px solid #d62828;
            box-shadow: 0 0 10px rgba(214, 40, 40, 0.5); 
        }

        .home-button:hover {
            background-color: #1a1a1a;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(214, 40, 40, 0.7);
        }
    </style>
</head>
<body>
    <header class="navbar">
        <h1>RevLine 5</h1>
        <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <main class="thank-you-container">
        <h2>INQUIRY SUBMITTED!</h2>
        <p>
            Thank you for your interest in a RevLine 5 exclusive car. 
            A specialist will contact you shortly via your preferred method to confirm the details.
        </p>
        <a href="home.php" class="home-button">BACK TO CARS</a>
    </main>
</body>
</html>