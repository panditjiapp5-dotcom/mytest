
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #333;
        }

        .services {
            padding: 40px 20px;
            text-align: center;
        }

        .services h1 {
            color: #2563eb;
            margin-bottom: 30px;
        }

        .service-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .service-card {
            background: white;
            padding: 25px;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 3px 10px #00000012;
        }

        .service-card h2 {
            color: #1d4ed8;
        }

        .service-card p {
            line-height: 1.6;
        }
    </style>
</head>
<body>

    @include('layouts.header')

    <section class="services">
        <h1>Our Services</h1>
        <p>We provide professional digital services for businesses.</p>

        <div class="service-container">

            <div class="service-card">
                <h2>Web Development</h2>
                <p>
                    We create modern, responsive and user-friendly websites
                    using the latest web technologies.
                </p>
            </div>

            <div class="service-card">
                <h2>Software Development</h2>
                <p>
                    We develop customized software solutions
                    according to business requirements.
                </p>
            </div>

            <div class="service-card">
                <h2>Digital Marketing</h2>
                <p>
                    We help businesses improve their online presence
                    and reach more customers.
                </p>
            </div>

        </div>
    </section>

    @include('layouts.footer')

</body>
</html>
