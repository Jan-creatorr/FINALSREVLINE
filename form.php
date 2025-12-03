<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Get the car name from the URL parameter, default to 'Selected Car' -->
    <?php 
        $carName = isset($_GET['car']) ? htmlspecialchars($_GET['car']) : 'Selected Car';
    ?>
    <title>RevLine 5 - Purchase Inquiry for <?php echo $carName; ?></title>
    
    <style>
        /* ===== GENERAL STYLES (FROM car_detail.css) ===== */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial Black', sans-serif;
            background-color: #000;
            color: #fff;
            min-height: 100vh;
        }

        /* ===== NAVBAR STYLES (FROM car_detail.css - FIXED) ===== */
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
            display: flex; /* CRITICAL FIX: Ensures horizontal layout */
            gap: 40px;
            margin: 0;
            padding: 0;
        }

        .navbar nav ul li {
            display: inline; /* NEW: Ensures list items are inline/horizontal */
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
        
        /* Ensure the form doesn't take up the full viewport height unnecessarily */
        main {
            padding: 20px; /* Add padding around the form */
        }
        
        /* ===== FORM SPECIFIC STYLES ===== */
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #1a1a1a; /* Dark background for form card */
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(214, 40, 40, 0.3);
        }

        .form-container h2 {
            text-align: center;
            color: #d62828;
            margin-bottom: 30px;
            font-size: 32px;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #ccc;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #000;
            color: #fff;
            font-size: 16px;
            box-sizing: border-box; /* Important for padding/width calculation */
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #d62828;
            box-shadow: 0 0 5px rgba(214, 40, 40, 0.5);
        }

        .form-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        /* Reusing button styles from previous pages */
        .submit-button {
            background-color: #d62828;
            color: #fff;
            border: none;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
            text-transform: uppercase;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #ff3333;
            transform: translateY(-2px);
        }

        .back-link {
            background-color: #000;
            color: #fff;
            border: 2px solid #d62828;
            padding: 10px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
            text-transform: uppercase;
            text-decoration: none;
            line-height: 24px; /* Align text vertically */
        }

        .back-link:hover {
            background-color: #1a1a1a;
            transform: translateY(-2px);
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

    <main>
        <div class="form-container">
            <h2>Purchase Inquiry: <?php echo $carName; ?></h2>
            <form action="submittedform.php" method="POST">
                
                <input type="hidden" name="car_inquired" value="<?php echo $carName; ?>">

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="contact_method">Preferred Contact Method</label>
                    <select id="contact_method" name="contact_method">
                        <option value="email">Email</option>
                        <option value="phone">Phone</option>
                        <option value="any">Any</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Additional Questions/Notes</label>
                    <textarea id="message" name="message" rows="4"></textarea>
                </div>

                <div class="form-buttons">
                    <a href="javascript:history.back()" class="back-link">Back</a>
                    <button type="submit" class="submit-button">Submit Inquiry</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>