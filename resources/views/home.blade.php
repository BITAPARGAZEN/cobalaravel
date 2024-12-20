<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .about, .services, .contact {
            margin-bottom: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
        /* Custom styles from additional code */
        header {
            background-color: #007bff;
            font-size: 2rem;
            font-weight: bold;
        }
        nav {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        nav a {
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
        }
        nav a:hover {
            background-color: #0056b3;
            color: #e6f2ff;
        }
        @media (max-width: 600px) {
            header {
                font-size: 1.5rem;
            }
            nav a {
                margin: 0 8px;
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        MY COMPANY PROFILE
    </header>

    <nav>
        <h1>
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="http://127.0.0.1:8000/profile">Profile</a>
            <a href="http://127.0.0.1:8000/about">About</a>
            <a href="http://127.0.0.1:8000/contact">Contact</a>
        </h1>
    </nav>
    
    <div class="container">
        <section id="about" class="about">
            <h2>About Us</h2>
            <p>Welcome to Gadget Hub, where technology meets innovation. We specialize in offering the latest and greatest gadgets to meet all your tech needs. With a passion for quality and customer satisfaction, we are here to make technology accessible for everyone.</p>
        </section>
        <section id="services" class="services">
            <h2>Our Services</h2>
            <ul>
                <li>Retail of the latest smartphones, tablets, and accessories</li>
                <li>Expert advice on choosing the right gadgets for your needs</li>
                <li>After-sales support and warranty services</li>
            </ul>
        </section>
        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <p>Have questions or need assistance? Reach out to us!</p>
            <p>Email: support@gadgethub.com</p>
            <p>Phone: +6285384848666</p>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Bita Parga Zen.</p>
    </footer>
</body>
</html>
