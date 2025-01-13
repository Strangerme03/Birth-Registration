<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A government initiative for easy online birth registration.">
    <meta name="author" content="Your Government">
    <meta property="og:title" content="Online Birth Registration">
    <meta property="og:description" content="A government initiative for easy online birth registration.">
    <meta property="og:image" content="path_to_image.jpg">
    <meta property="og:url" content="http://yourwebsite.com">
    <title>Online Birth Registration</title>
    @vite('resources/js/app.js') <!-- If you are using Vite -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .hero-section {
            background-color: crimson;
            color: white;
            padding: 4rem 2rem;
            border-radius: 15px;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 800;
        }

        .hero-description {
            font-size: 1.25rem;
            font-weight: 500;
        }

        .cta-btn {
            background-color: #fff;
            color: #FF2D20;
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }

        .cta-btn:hover {
            background-color: #FF2D20;
            color: white;
        }

    </style>
</head>

<body class="bg-light">

    <!-- Navbar Component -->
    <x-navbar />

    <!-- Main Content -->
    <main class="container my-5">

        <!-- Hero Section -->
        <section class="hero-section text-center mb-5">
            <h1 class="hero-title mb-4">Government's Initiative for Easy Online Birth Registration</h1>
            <p class="hero-description mb-4">
                The government has introduced a convenient and secure online system to streamline the birth registration process. Registering a birth has never been easier – all you need is an internet connection.
            </p>
            <a href="#benefits" class="cta-btn">Learn More</a>
        </section>

        <!-- Benefits and Process -->
        <section id="benefits" class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <!-- Benefits Card -->
                <div class="card p-4">
                    <h3 class="card-title text-center text-primary mb-4">Benefits of Online Registration</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">No need to visit government offices; register from the comfort of your home.</li>
                        <li class="list-group-item">Fast processing time for birth certificates.</li>
                        <li class="list-group-item">Secure and private online system.</li>
                        <li class="list-group-item">Real-time updates on your registration status.</li>
                        <li class="list-group-item">Paperless process – submit all documents digitally.</li>
                    </ul>
                </div>
            </div>

            <div class="col">
                <!-- Process Card -->
                <div class="card p-4">
                    <h3 class="card-title text-center text-primary mb-4">How the Process Works</h3>
                    <ol class="list-group list-group-flush">
                        <li class="list-group-item">Fill out the online birth registration form with all required details.</li>
                        <li class="list-group-item">Your submission is reviewed and approved by the authorities.</li>
                        <li class="list-group-item">Once approved, you will receive a confirmation email with your unique registration token.</li>
                        <li class="list-group-item">Access and download the birth certificate with the token.</li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Tips for Citizens -->
        <section class="mt-5">
            <div class="card p-5">
                <h2 class="card-title text-center text-primary mb-4">Important Tips for a Smooth Registration</h2>
                <p class="text-center mb-4">Before you start the online registration process, here are a few tips to ensure everything goes smoothly:</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Make sure you have the required documents ready, such as the child's details and parents' information.</li>
                    <li class="list-group-item">Ensure you have a stable internet connection for smooth form submission.</li>
                    <li class="list-group-item">If you encounter any issues, support is available to assist you throughout the process.</li>
                </ul>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="mt-5 text-center">
            <h2 class="text-primary mb-4">What Citizens Are Saying</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card p-4">
                        <p class="text-muted italic">"I was able to register my child's birth in just a few minutes! The process was so easy and convenient."</p>
                        <p class="fw-bold">Amrit Paudel</p>
                        <p class="text-muted">New Parent</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card p-4">
                        <p class="text-muted italic">"The online system saved me so much time. I didn’t have to leave home and could track the status of my application in real-time."</p>
                        <p class="fw-bold">Himal Gurung</p>
                        <p class="text-muted">Happy User</p>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <x-footer/>
 </body>