
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #333;
        }

        .contact {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
        }

        .contact h1 {
            color: #2563eb;
            text-align: center;
        }

        .contact input,
        .contact textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact button {
            background: #2563eb;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    @include('layouts.header')

    <section class="contact">
        <h1>Contact Us</h1>

        <p>Have a question? Send us a message.</p>

        <form action="#" method="POST">
            <input type="text" name="name"
                   placeholder="Enter your name" required>

            <input type="email" name="email"
                   placeholder="Enter your email" required>

            <textarea name="message" rows="5"
                      placeholder="Enter your message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    @include('layouts.footer')

</body>
</html>
