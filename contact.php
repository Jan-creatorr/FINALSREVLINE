<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RevLine 5 - Contact Us</title>
    
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

        .contact-container {
            max-width: 600px;
            margin: 80px auto;
            padding: 40px;
            background-color: #1a1a1a; 
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .contact-container h2 {
            font-size: 48px;
            color: #fff;
            margin-bottom: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .contact-container p {
            color: #ccc;
            margin-bottom: 40px;
            font-weight: normal;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #d62828; 
            font-family: Arial, sans-serif;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #333;
            background-color: #0d0d0d;
            color: #fff;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            font-family: Arial, sans-serif;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #d62828;
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-button {
            background-color: #d62828;
            color: #fff;
            padding: 15px 40px;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 20px;
        }

        .submit-button:hover {
            background-color: #ff3333;
            transform: translateY(-2px);
        }

        .message-box {
            background-color: #3d0303;
            color: #fff;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            display: none; 
            font-family: Arial, sans-serif;
            font-weight: normal;
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 10px 20px;
            }
            .contact-container {
                margin: 40px 20px;
                padding: 30px;
            }
            .contact-container h2 {
                font-size: 36px;
            }
            .navbar nav ul {
                gap: 20px;
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
                <li><a href="merch.php">MERCH</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="contact-container">
            <h2>GET IN TOUCH</h2>
            <p>
                We'd love to hear from you! Whether you have a question about the collection, need support, or have exclusive inquiries, use the form below to send us a message.
            </p>

            <form id="contactForm" class="contact-form" onsubmit="event.preventDefault(); submitForm();">
                <div class="form-group">
                    <label for="name">Your Full Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Your Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit" class="submit-button">SEND MESSAGE</button>

                <div id="responseMessage" class="message-box">
                    Thank you! Your message has been successfully sent to the system owner. We will get back to you shortly.
                </div>
            </form>
        </div>
    </main>

    <script>
        function submitForm() {
            
            const form = document.getElementById('contactForm');
            const messageBox = document.getElementById('responseMessage');
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            form.style.display = 'none';
            messageBox.style.display = 'block';

            console.log("--- Contact Form Submission Simulated ---");
            console.log("Name:", name);
            console.log("Email:", email);
            console.log("Message:", message);
            console.log("---------------------------------------");
        }

        document.addEventListener('DOMContentLoaded', () => {
            const contactLinks = document.querySelectorAll('.navbar nav ul li a');
            contactLinks.forEach(link => {
                if (link.textContent === 'CONTACT') {
                    link.setAttribute('href', 'contact.php');
                }
            });
        });
    </script>
</body>
</html>