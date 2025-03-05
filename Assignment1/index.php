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
    <h1 class="text-center">Upcoming Music Festivals</h1>
    
    <?php
    include('reusables/connection.php');
    $query = "SELECT * FROM festivals ORDER BY date ASC";
    $festivals = mysqli_query($connect, $query);
    ?>

    <div class="row">
        <?php while ($festival = mysqli_fetch_assoc($festivals)) { ?>
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <img src="<?= htmlspecialchars($festival['img_url']); ?>" class="card-img-top" alt="Image of <?= htmlspecialchars($festival['name']); ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?= htmlspecialchars($festival['name']); ?></h4>
                        <h6 class="text-muted"><?= date('F j, Y', strtotime($festival['date'])); ?></h6>
                        <p><strong>Genre:</strong> <?= htmlspecialchars($festival['genre']); ?></p>
                        <p><strong>Location:</strong> <?= htmlspecialchars($festival['location']); ?></p>
                        <p><?= htmlspecialchars($festival['description']); ?></p>
                        <a href="performers.php?festival_id=<?= $festival['festival_id']; ?>" class="btn btn-primary">View Performers</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>

<?php include('reusables/footer.php'); ?>
</body>
</html>