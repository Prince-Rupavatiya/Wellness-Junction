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
            <h1>Upcoming Events and Workshops</h1>
            <p>Explore our upcoming events and workshops designed to enrich your knowledge and skills.</p>
        </div>
    </header>

    <main>
        <section class="events">
            <div class="container">
                <h2>Upcoming Events</h2>
                <?php
                $events = [
                    [
                        'title' => 'Mindfulness and Stress Management',
                        'date' => 'July 15, 2024',
                        'description' => 'Join us for an insightful session on mindfulness and stress management techniques.'
                    ],
                    [
                        'title' => 'Mental Health Research Symposium',
                        'date' => 'August 5, 2024',
                        'description' => 'Discover the latest trends in mental health research and treatment approaches.'
                    ]
                ];

                foreach ($events as $event) {
                    echo '<div class="event">';
                    echo '<h3>' . $event['title'] . '</h3>';
                    echo '<p class="date">Date: ' . $event['date'] . '</p>';
                    echo '<p class="description">' . $event['description'] . '</p>';
                    echo '<a href="#" class="btn">Register</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>

        <section class="workshops">
            <div class="container">
                <h2>Upcoming Workshops</h2>
                <?php
                $workshops = [
                    [
                        'title' => 'Mindful Communication Workshop',
                        'date' => 'July 20, 2024',
                        'description' => 'Learn practical techniques for improving communication and building healthier relationships.'
                    ],
                    [
                        'title' => 'Mental Health in the Workplace',
                        'date' => 'August 10, 2024',
                        'description' => 'Explore strategies for promoting mental well-being in the workplace and fostering a positive culture.'
                    ]
                ];

                foreach ($workshops as $workshop) {
                    echo '<div class="workshop">';
                    echo '<h3>' . $workshop['title'] . '</h3>';
                    echo '<p class="date">Date: ' . $workshop['date'] . '</p>';
                    echo '<p class="description">' . $workshop['description'] . '</p>';
                    echo '<a href="#" class="btn">Register</a>';
                    echo '</div>';
                }
                ?>
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
