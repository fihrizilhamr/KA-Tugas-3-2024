<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Joke</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Selected Joke</h1>
        <?php
            if (isset($_GET['joke_text']) && isset($_GET['created_at'])) {
                $joke_text = htmlspecialchars($_GET['joke_text']);
                $created_at = htmlspecialchars($_GET['created_at']);

                echo "<div class='joke-item-stylized'>";
                echo "<p class='joke-text'>$joke_text</p>";
                echo "<p class='joke-date'>Saved on: $created_at</p>";
                echo "</div>";
            } else {
                echo "<p class='no-jokes'>Invalid joke!</p>";
            }
        ?>
    </div>
</body>
</html>
