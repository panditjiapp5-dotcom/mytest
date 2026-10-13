
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | My Website</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #1e293b;
            background: #ffffff;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            padding: 80px 8%;
            min-height: 480px;
            background: linear-gradient(135deg, #eff6ff, #ffffff);
        }

        .hero-content {
            flex: 1;
        }

        .hero-content .tag {
            display: inline-block;
            padding: 7px 15px;
            border-radius: 30px;
            background: #dbeafe;
            color: #1d4ed8;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(36px, 5vw, 56px);
            line-height: 1.15;
            margin-bottom: 20px;
            color: #0f172a;
        }

        .hero h1 span {
            color: #2563eb;
        }

        .hero p {
            color: #64748b;
            font-size: 17px;
            max-width: 520px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 13px 24px;
            border-radius: 7px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
            margin-right: 10px;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-outline {
            border: 1px solid #2563eb;
            color: #2563eb;
        }

        .btn-outline:hover {
            background: #dbeafe;
        }

        .hero-visual {
            flex: 1;
            min-height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .visual-card {
            width: 100%;
            max-width: 420px;
            padding: 35px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px #1e40af18;
            border: 1px solid #e2e8f0;
        }

        .visual-card .icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .visual-card h2 {
            font-size: 25px;
            margin-bottom: 10px;
        }

        .visual-card p {
            color: #64748b;
        }

        .mini-boxes {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .mini-box {
            flex: 1;
            padding: 15px 10px;
            text-align: center;
            border-radius: 10px;
            background: #eff6ff;
            color: #1d4ed8;
            font-size: 13px;
            font-weight: bold;
        }

        .section {
            padding: 70px 8%;
        }

        .section-heading {
            text-align: center;
            max-width: 650px;
            margin: 0 auto 40px;
        }

        .section-heading h2 {
            font-size: 34px;
            margin-bottom: 12px;
            color: #0f172a;
        }

        .section-heading p {
            color: #64748b;
        }

        .service-container {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        .service-card {
            padding: 30px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px #0f172a10;
            border-color: #bfdbfe;
        }

        .service-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            background: #dbeafe;
            border-radius: 12px;
            font-size: 27px;
            margin-bottom: 20px;
        }

        .service-card h3 {
            margin-bottom: 12px;
            font-size: 21px;
        }

        .service-card p {
            color: #64748b;
            margin-bottom: 18px;
        }

        .service-card a {
            color: #2563eb;
            font-weight: bold;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
            padding: 35px 8%;
            background: #0f172a;
            text-align: center;
        }

        .stat h2 {
            color: #60a5fa;
            font-size: 32px;
        }

        .stat p {
            color: #cbd5e1;
        }

        .cta {
            margin: 70px 8%;
            padding: 50px 25px;
            text-align: center;
            background: #eff6ff;
            border-radius: 18px;
        }

        .cta h2 {
            font-size: 32px;
            margin-bottom: 12px;
        }

        .cta p {
            color: #64748b;
            margin-bottom: 25px;
        }

        @media (max-width: 800px) {
            .hero {
                flex-direction: column;
                align-items: stretch;
                padding: 55px 6%;
            }

            .hero-visual {
                min-height: auto;
            }

            .service-container {
                grid-template-columns: 1fr;
            }

            .section {
                padding: 50px 6%;
            }

            .stats {
                padding: 30px 5%;
                gap: 10px;
            }

            .stat h2 {
                font-size: 25px;
            }

            .stat p {
                font-size: 13px;
            }

            .cta {
                margin: 45px 6%;
            }
        }

        @media (max-width: 420px) {
            .hero h1 {
                font-size: 34px;
            }

            .btn {
                padding: 11px 15px;
                font-size: 14px;
            }

            .visual-card {
                padding: 25px;
            }

            .section-heading h2,
            .cta h2 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include('layouts.header')

    {{-- Hero Section --}}
    <section class="hero" id="home">

        <div class="hero-content">
            <span class="tag">Welcome to My Website</span>

            <h1>
                Build Your <span>Digital Future</span> With Us
            </h1>

            <p>
                We create modern websites, powerful software solutions
                and digital experiences that help your business grow.
            </p>

            <a href="/services" class="btn btn-primary">
                Explore Services →
            </a>

            <a href="/contact" class="btn btn-outline">
                Contact Us
            </a>
        </div>

        <div class="hero-visual">
            <div class="visual-card">
                <div class="icon">💻</div>

                <h2>Smart Digital Solutions</h2>

                <p>
                    Creative design, reliable technology and
                    professional development for your business.
                </p>

                <div class="mini-boxes">
                    <div class="mini-box">Web Design</div>
                    <div class="mini-box">Development</div>
                    <div class="mini-box">Support</div>
                </div>
            </div>
        </div>

    </section>

    {{-- Services Section --}}
    <section class="section" id="services">

        <div class="section-heading">
            <h2>Our Services</h2>
            <p>
                We provide practical technology solutions
                to help businesses succeed online.
            </p>
        </div>

        <div class="service-container">

            <div class="service-card">
                <div class="service-icon">🌐</div>
                <h3>Web Development</h3>
                <p>
                    Responsive and user-friendly websites
                    built for desktop, tablet and mobile devices.
                </p>
                <a href="/services">Learn More →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">⚙️</div>
                <h3>Software Solutions</h3>
                <p>
                    Custom business applications, management
                    systems and software tailored to your needs.
                </p>
                <a href="/services">Learn More →</a>
            </div>

            <div class="service-card">
                <div class="service-icon">📈</div>
                <h3>Digital Marketing</h3>
                <p>
                    Improve your online visibility and connect
                    with more customers through digital channels.
                </p>
                <a href="/services">Learn More →</a>
            </div>

        </div>

    </section>

    {{-- Statistics Section --}}
    <section class="stats">

        <div class="stat">
            <h2>50+</h2>
            <p>Projects Completed</p>
        </div>

        <div class="stat">
            <h2>30+</h2>
            <p>Happy Clients</p>
        </div>

        <div class="stat">
            <h2>5+</h2>
            <p>Years of Experience</p>
        </div>

    </section>

    {{-- Call to Action --}}
    <section class="cta">

        <h2>Have a Project in Mind?</h2>

        <p>
            Let's discuss your ideas and build something great together.
        </p>

        <a href="/contact" class="btn btn-primary">
            Get in Touch →
        </a>

    </section>

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>
