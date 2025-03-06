<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Festivals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<?php include('reusables/navbar.php'); ?>

<div class="container mt-5">
    <?php
    include('reusables/connection.php');

    if (!isset($_GET['festival_id']) || empty($_GET['festival_id'])) {
        echo "<h2 class='text-center text-danger'>Invalid Festival Selection</h2>";
        exit;
    }

    $festival_id = intval($_GET['festival_id']);

    // Get festival details
    $festivalQuery = "SELECT name FROM festivals WHERE festival_id = '$festival_id'";
    $festivalResult = mysqli_query($connect, $festivalQuery);
    $festival = mysqli_fetch_assoc($festivalResult);

    if (!$festival) {
        echo "<h2 class='text-center text-danger'>Festival Not Found</h2>";
        exit;
    }

    echo "<h1 class='text-center'>Performers at " . htmlspecialchars($festival['name']) . "</h1>";

    // Get performers
    $performerQuery = "SELECT * FROM performers WHERE festival_id = '$festival_id'";
    $performers = mysqli_query($connect, $performerQuery);
    ?>

<div class="performer-list">
    <?php while ($performer = mysqli_fetch_assoc($performers)) { ?>
        <div class="performer-card">
            <h4 class="performer-name"><?= htmlspecialchars($performer['name']); ?></h4>
            <p class="performer-details"><strong>Birth Date:</strong> <?= htmlspecialchars($performer['birthdate']); ?></p>
            <p class="performer-details"><strong>Country:</strong> <?= htmlspecialchars($performer['country']); ?></p>
            <p class="performer-details"><strong>Debut Year:</strong> <?= htmlspecialchars($performer['debute_year']); ?></p>
            <p class="performer-details"><strong>Age:</strong> <?= htmlspecialchars($performer['age']); ?></p>
        </div>
    <?php } ?>
</div>


</div>

<?php include('reusables/footer.php'); ?>
</body>
</html>