<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Company Profile</title>
    <style>
        /* Mengatur gaya untuk seluruh body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
        }

        /* Gaya untuk header */
        header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 2rem;
            font-weight: bold;
        }

        /* Gaya untuk navigasi */
        nav {
            background-color: #007bff;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        nav a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s, background-color 0.3s;
            padding: 10px 15px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #0056b3;
            color: #e6f2ff;
        }

        /* Gaya responsif */
        @media (max-width: 600px) {
            header {
                font-size: 1.5rem;
            }

            nav h1 {
                font-size: 1.2rem;
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
        CONTACT
    </header>

    <nav>
        <h1>
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="http://127.0.0.1:8000/profile">Profile</a>
            <a href="http://127.0.0.1:8000/about">About</a>
            <a href="http://127.0.0.1:8000/contact">Contact</a>
        </h1>
    </nav>
</body>
</html>
