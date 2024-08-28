<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo-image.png" type="image/png" />
    <title>Wellness Junction | Where Community Nurtures Wellness</title>    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Support and Counseling Services</h1>
            <p>Explore our support and counseling services provided by experienced professionals.</p>
        </div>
    </header>

    <main>
        <section class="services">
            <div class="container">
                <h2>Our Services</h2>
                <?php
                // Example PHP data for services
                $services = [
                    [
                        'title' => 'Individual Counseling',
                        'description' => 'Receive personalized counseling sessions tailored to your needs.'
                    ],
                    [
                        'title' => 'Group Therapy Sessions',
                        'description' => 'Participate in group therapy sessions to connect with others facing similar challenges.'
                    ],
                    [
                        'title' => 'Online Counseling',
                        'description' => 'Access counseling services remotely from the comfort of your home.'
                    ],
                    [
                        'title' => 'Family Counseling',
                        'description' => 'Engage in counseling sessions designed to strengthen family relationships.'
                    ]
                ];

                // Loop through services and display them
                foreach ($services as $service) {
                    echo '<div class="service">';
                    echo '<h3>' . $service['title'] . '</h3>';
                    echo '<p>' . $service['description'] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>

        <section class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <form action="contact_process.php" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Wellness Junction. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
