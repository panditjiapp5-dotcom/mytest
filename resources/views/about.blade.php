
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #333;
        }

        .about {
            max-width: 1000px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            line-height: 1.8;
        }

        .about h1 {
            color: #2563eb;
            text-align: center;
        }

        .about h2 {
            color: #1e293b;
        }
    </style>
</head>
<body>

    @include('layouts.header')

    <section class="about">
        <h1>About Us</h1>

        <p>
            Welcome to My Website. We are passionate about
            providing quality web development and IT solutions.
        </p>

        <h2>Who We Are</h2>
        <p>
            We are a team focused on creating modern,
            user-friendly and responsive websites.
        </p>

        <h2>Our Mission</h2>
        <p>
            Our mission is to provide reliable digital solutions
            that help businesses grow and improve their online presence.
        </p>

        <h2>Our Vision</h2>
        <p>
            Our vision is to build useful, innovative and
            high-quality digital experiences for everyone.
        </p>
    </section>

    @include('layouts.footer')

</body>
</html>
