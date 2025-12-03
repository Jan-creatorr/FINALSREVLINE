<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RevLine 5 - Exclusive Cars</title>
    <link rel="stylesheet" href="cars.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">RevLine 5</div>
            <nav>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>EXCLUSIVE SELECTION</h1>
        </div>
    </section>

    <section class="car-listing">
        <div class="container">
            <?php
            $cars = [
                [
                    'image' => 'assets/fordraptor.jpg', 
                    'name' => 'Ford Raptor Ranger',
                    'link' => 'fordraptor.php'
                ],
                [
                    'image' => 'assets/fordmustang.jpg', 
                    'name' => 'Ford Mustang GT',
                    'link' => 'mustang.php'
                ],
                [
                    'image' => 'assets/audir8v10.jpg', 
                    'name' => 'Audi R8 V10',
                    'link' => 'audi.php'
                ],
                [
                    'image' => 'assets/bmwm4.jpg', 
                    'name' => 'BMW M4 Competition',
                    'link' => 'bmw_m4.php'
                ],
                [
                    'image' => 'assets/mercedes.jpg', 
                    'name' => 'Mercedes AMG G63',
                    'link' => 'mercedes_g63.php'
                ],
                [
                    'image' => 'assets/porsche911.jpg', 
                    'name' => 'Porsche 911 Turbo S',
                    'link' => 'porsche_911.php'
                ],
                [
                    'image' => 'assets/corvette.jpg', 
                    'name' => 'Chevrolet Corvette C8',
                    'link' => 'corvette_c8.php'
                ],
                [
                    'image' => 'assets/nissangtr.jpg', 
                    'name' => 'Nissan GT-R Nismo',
                    'link' => 'gtr_nismo.php'
                ],
                [
                    'image' => 'assets/lexus.jpg', 
                    'name' => 'Lexus LFA',
                    'link' => 'lexus_lfa.php'
                ],
                [
                    'image' => 'assets/bugatti.jpg', 
                    'name' => 'Bugatti Chiron',
                    'link' => 'bugatti_chiron.php'
                ],
            ];

            foreach ($cars as $car) {
                $image_src = strpos($car['image'], 'http') === 0 ? $car['image'] : (file_exists($car['image']) ? $car['image'] : 'https://placehold.co/400x200/4D4D4D/FFFFFF?text=Image+Missing');

                echo '<div class="car-item">';
                echo '<img src="' . $image_src . '" alt="' . $car['name'] . '" onerror="this.onerror=null; this.src=\'https://placehold.co/400x200/4D4D4D/FFFFFF?text=Image+Not+Found\';">';
                echo '<div class="car-details">';
                echo '<h2>' . $car['name'] . '</h2>';
                echo '<a href="' . $car['link'] . '" class="view-button">View Details</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>
</body>
</html>