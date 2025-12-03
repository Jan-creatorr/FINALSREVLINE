<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RevLine 5 - Merchandise</title>
    
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

        .navbar nav ul li a:hover {
            text-decoration: underline;
        }

        .merch-header {
            background-color: #3d0303; 
            padding: 80px 20px;
            text-align: center;
        }
        
        .merch-header h2 {
            font-size: 70px;
            color: #fff;
            margin: 0;
            letter-spacing: 5px;
            text-transform: uppercase;
        }

        .merch-header h2 .highlight {
            color: #d62828; 
        }
        
        .listing-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .merch-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 40px;
            margin-bottom: 20px;
            background-color: #333333; 
            border-bottom: 3px solid #1a1a1a;
        }
        
        .merch-item:nth-child(even) {
            background-color: #444444; 
        }

        .merch-item-left {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .merch-name {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        
        .merch-img-container {
            width: 100px;
            height: 100px;
            background-color: #1a1a1a; 
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            border: 1px solid #555;
        }

        .merch-img-container img {
            width: 80%;
            height: 80%;
            object-fit: contain;
        }

        .view-button {
            text-decoration: none;
            padding: 12px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s;
            text-transform: uppercase;
            
            background-color: #b05c5c; 
            color: #fff;
            border: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        }

        .view-button:hover {
            background-color: #d62828; 
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.6);
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 10px 20px;
            }
            .merch-header h2 {
                font-size: 40px;
            }
            .merch-item {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
            }
            .merch-item-left {
                margin-bottom: 15px;
            }
            .view-button {
                width: 100%;
                text-align: center;
                margin-top: 10px;
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

    <div class="merch-header">
        <h2>M<span class="highlight">E</span>RCH</h2>
    </div>

    <main class="listing-container">
        <?php
        $merchandise = [
            [
                'name' => 'RevLine 5 KEYCHAIN',
                'image' => 'assets/revlinekeychain.jpg',
                'description_file' => 'keychain.php'
            ],
            [
                'name' => 'RevLine 5 STICKER',
                'image' => 'assets/revlinesticker.jpg',
                'description_file' => 'sticker.php'
            ],
            [
                'name' => 'RevLine 5 T-SHIRT (Black)',
                'image' => 'assets/revlinetshirt.jpg',
                'description_file' => 'tshirt.php'
            ],
            [
                'name' => 'RevLine 5 HAT (Red)',
                'image' => 'assets/revlinehat.jpg',
                'description_file' => 'hat.php'
            ],
            
        ];

        foreach ($merchandise as $item) {
            $itemNameEncoded = urlencode($item['name']);

            echo '<div class="merch-item">';
            echo '  <div class="merch-item-left">';
            echo '      <div class="merch-img-container">';
            echo '          <img src="' . $item['image'] . '" alt="' . $item['name'] . '" />';
            echo '      </div>';
            echo '      <div class="merch-name">' . $item['name'] . '</div>';
            echo '  </div>';
            echo '  <a href="' . $item['description_file'] . '?product=' . $itemNameEncoded . '" class="view-button">View</a>';
            echo '</div>';
        }
        ?>
    </main>
</body>
</html>