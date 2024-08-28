<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo-image.png" type="image/png" />
    <title>Wellness Junction | Where Community Nurtures Wellness</title>
  
    <link rel="stylesheet" href="resource_styles.css">
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Articles on Mental Wellness</h1>

        <?php
        $articles = [
            ['id' => 1, 'title' => 'Managing Stress', 'author' => 'John Doe', 'date_published' => '2023-01-15', 'url' => 'https://www.verywellmind.com/managing-stress-tips-2795847'],
            ['id' => 2, 'title' => 'Understanding Anxiety', 'author' => 'Jane Smith', 'date_published' => '2023-02-20', 'url' => 'https://www.verywellmind.com/understanding-anxiety-2795760'],
            ['id' => 3, 'title' => 'Coping with Depression', 'author' => 'Michael Johnson', 'date_published' => '2023-03-10', 'url' => 'https://www.verywellmind.com/coping-with-depression-2795761'],
            ['id' => 4, 'title' => 'Importance of Self-care', 'author' => 'Emma Brown', 'date_published' => '2023-04-05', 'url' => 'https://www.verywellmind.com/importance-of-self-care-2795762'],
            ['id' => 5, 'title' => 'Mindfulness Meditation', 'author' => 'Chris Wilson', 'date_published' => '2023-05-12', 'url' => 'https://www.verywellmind.com/mindfulness-meditation-2795763'],
            ['id' => 6, 'title' => 'Benefits of Exercise', 'author' => 'Sarah Adams', 'date_published' => '2023-06-18', 'url' => 'https://www.verywellmind.com/benefits-of-exercise-2795764'],
            ['id' => 7, 'title' => 'Healthy Sleeping Habits', 'author' => 'David Lee', 'date_published' => '2023-07-25', 'url' => 'https://www.verywellmind.com/healthy-sleeping-habits-2795765'],
            ['id' => 8, 'title' => 'Positive Thinking', 'author' => 'Olivia Green', 'date_published' => '2023-08-30', 'url' => 'https://www.verywellmind.com/positive-thinking-2795766'],
            ['id' => 9, 'title' => 'Social Support Networks', 'author' => 'Andrew White', 'date_published' => '2023-09-14', 'url' => 'https://www.verywellmind.com/social-support-networks-2795767'],
            ['id' => 10, 'title' => 'Effective Communication', 'author' => 'Sophia King', 'date_published' => '2023-10-02', 'url' => 'https://www.verywellmind.com/effective-communication-2795768'],
            ['id' => 11, 'title' => 'Nutrition and Mental Health', 'author' => 'Daniel Martinez', 'date_published' => '2023-11-11', 'url' => 'https://www.verywellmind.com/nutrition-and-mental-health-2795769'],
            ['id' => 12, 'title' => 'Art Therapy', 'author' => 'Ella Robinson', 'date_published' => '2023-12-20', 'url' => 'https://www.verywellmind.com/what-is-art-therapy-2795755']
        ];

        $limit = 5; 
        $page = isset($_GET['page']) ? $_GET['page'] : 1; 
        $offset = ($page - 1) * $limit;

        // Sorting
        $sortField = isset($_GET['sort']) ? $_GET['sort'] : 'date_published';
        $sortOrder = isset($_GET['order']) && $_GET['order'] == 'desc' ? SORT_DESC : SORT_ASC;
        $articles = array_column($articles, null, 'id'); 
        array_multisort(array_column($articles, $sortField), $sortOrder, $articles);

        // Filtering
        // Example: Filter by author
        $authorFilter = isset($_GET['author']) ? $_GET['author'] : null;
        if ($authorFilter) {
            $articles = array_filter($articles, function ($article) use ($authorFilter) {
                return stripos($article['author'], $authorFilter) !== false;
            });
        }

        $paginatedArticles = array_slice($articles, $offset, $limit, true);

        // Display articles
        foreach ($paginatedArticles as $article) {
            echo "<div class='article'>";
            echo "<h3><a href='{$article['url']}' target='_blank'>{$article['title']}</a></h3>";
            echo "<p><strong>Author:</strong> {$article['author']}</p>";
            echo "<p><strong>Date Published:</strong> {$article['date_published']}</p>";
            echo "</div>";
        }

        // Pagination links
        echo "<ul class='pagination'>";
        for ($i = 1; $i <= ceil(count($articles) / $limit); $i++) {
            echo "<li><a href='?page=$i&sort=$sortField&order=$sortOrder&author=$authorFilter'>$i</a></li>";
        }
        echo "</ul>";

        // Sorting options
        echo "<div class='sort'>";
        echo "<label>Sort by:</label>";
        echo "<select onchange=\"window.location.href = this.value\">";
        echo "<option value='?page=$page&sort=date_published&order=asc&author=$authorFilter'>Date Published (ASC)</option>";
        echo "<option value='?page=$page&sort=date_published&order=desc&author=$authorFilter'>Date Published (DESC)</option>";
        echo "<option value='?page=$page&sort=author&order=asc&author=$authorFilter'>Author (ASC)</option>";
        echo "<option value='?page=$page&sort=author&order=desc&author=$authorFilter'>Author (DESC)</option>";
        echo "</select>";
        echo "</div>";
        ?>

    </div>
</body>
</html>
