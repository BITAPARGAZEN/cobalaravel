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

        /* Gaya untuk gambar foto profil */
        .profile-photo {
            display: block;
            margin: 30px auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Gaya untuk deskripsi profil */
        .profile-description {
            text-align: center;
            margin: 20px;
            padding: 10px;
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
        PROFILE
    </header>

    <nav>
        <h1>
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="http://127.0.0.1:8000/profile">Profile</a>
            <a href="http://127.0.0.1:8000/about">About</a>
            <a href="http://127.0.0.1:8000/contact">Contact</a>
        </h1>
    </nav>

    <div style="text-align: center;">
        <img src="path_to_your_photo.jpg" alt="Profile Photo" class="profile-photo">
    </div>


    <div class="profile-description">
        <p>
            Hi! I am Bita Parga Zen, a passionate professional in Web Programming. With over 3 years of experience, I specialize in Laravel Expert. I am dedicated to goals project and always striving to professional web. I enjoy working on challenging projects and collaborating with talented teams to create meaningful results.
        </p>
        <p>
            I believe in continuous learning and am always excited to explore new ideas, tools, and technologies. In my free time, I like coding. Feel free to connect with me or check out my work on youtube bita parga zen, your can see in <a href="https://www.youtube.com/@bitapargazen/videos">Here </a> 
            or you can see on my linkedin in <a href="https://www.linkedin.com/in/bitapargazen/">Here</a>.
        </p>
    </div>
</body>
</html>
