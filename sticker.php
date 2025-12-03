<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RevLine 5 - RevLine 5 KEYCHAIN</title>
    
    <style>
        /* Embed styles for a single, self-contained file */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial Black', sans-serif;
            background-color: #000;
            color: #fff;
            min-height: 100vh;
        }

        /* ===== NAVBAR (Consistent) ===== */
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

        .navbar nav ul li a:hover {
            text-decoration: underline;
        }

        /* ===== MAIN CONTENT LAYOUT ===== */
        .main-content {
            display: flex;
            align-items: center; 
            padding: 80px 100px;
            text-align: left; /* Aligned text to the left for better reading */
            gap: 50px;
        }

        .product-image-container {
            width: 300px;
            height: 300px;
            background-color: #1a1a1a;
            border-radius: 10px;
            margin-bottom: 40px;
            border: 2px solid #333;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 20px rgba(214, 40, 40, 0.1);
            flex-shrink: 0; /* Prevents shrinking on smaller screens */
        }

        .product-image-container img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
        }

        .product-details {
            flex-grow: 1;
            max-width: 700px;
        }

        .product-details h2 {
            font-size: 48px;
            color: #fff;
            margin-top: 0;
            margin-bottom: 20px;
            letter-spacing: 2px;
        }

        .product-details p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .price {
            font-size: 28px;
            font-weight: bold;
            color: #d62828;
            margin-bottom: 40px;
        }

        /* BUTTONS */
        .action-buttons {
            display: flex;
            gap: 20px;
            justify-content: flex-start; /* Aligned buttons to the left */
        }

        .action-buttons a {
            text-decoration: none;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
            text-transform: uppercase;
            text-align: center;
            min-width: 180px;
        }

        /* Buy Button Style */
        .purchase-button {
            background-color: #d62828;
            color: #fff;
            border: 2px solid #d62828;
        }

        .purchase-button:hover {
            background-color: #ff3333;
            transform: translateY(-2px);
        }

        /* Back Button Style */
        .back-button {
            background-color: #d62828;
            color: #fff;
            border: 2px solid #d62828;
        }

        .back-button:hover {
            background-color: #ff3333;
            transform: translateY(-2px);
        }

        /* ===== RESPONSIVENESS ===== */
        @media (max-width: 1024px) {
            .main-content {
                flex-direction: column;
                padding: 50px 40px;
                text-align: center;
                gap: 20px;
            }
            .product-image-container {
                margin-bottom: 20px;
            }
            .action-buttons {
                justify-content: center;
            }
        }
        @media (max-width: 600px) {
            .product-image-container {
                width: 200px;
                height: 200px;
            }
            .product-details h2 {
                font-size: 36px;
            }
            .action-buttons {
                flex-direction: column;
            }
            .action-buttons a {
                min-width: 100%;
            }
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

    <main class="main-content">
        <div class="product-image-container">
            <img src="assets/revlinesticker.jpg" alt="RevLine 5 KEYCHAIN">
        </div>

        <div class="product-details">
            <h2>REVLINE 5 STICKER</h2>
            <p>
Show off your passion for cars with the bold and stylish Revline 5 Sticker. Made with high-quality, durable material, it's perfect for your laptop, car, helmet, or any surface you want to make stand out. Sleek, eye-catching, and long-lasting this sticker is a must-have for every Revline fan.            </p>
            <div class="price">Price: 10$</div>

            <div class="action-buttons">
                <a href="form.php" class="purchase-button">BUY</a>
                
                <a href="merch.php" class="back-button">BACK TO SHOP</a>
            </div>
        </div>
    </main>
</body>
</html>