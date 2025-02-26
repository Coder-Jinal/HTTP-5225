<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
include('reusables/nav.php');
?>

<div class="container-fluid">
  <div class=container>

    <div class="row">
      <div class="col">
        <h1 class="display-5">All Schools</h1>
      </div>
    </div>

    <div class="row">

    <?php 
    include('reusables/connect.php');
    ?>

    <?php
    $query = 'SELECT * FROM schools';
    $schools = mysqli_query($connect,$query);
    if ($schools) {
      // Fetch all rows as an associative array
      $schools_data = mysqli_fetch_all($schools, MYSQLI_ASSOC);


  } else {
      echo 'Query failed: ' . mysqli_error($connect);
  }


    foreach($schools_data as $school){
      echo '<div class="col-md-4"> 
      <div class="card mb-4" style="">
      <div class="card-body">
        <h5 class="card-title"> '.$school['board'] . '</h5>
        <span class="badge bg-primary">'.$school['school_type'].'</span>
        <span class="badge bg-success">'.$school['language'].'</span>
      </div>
      </div>
      </div>';
    }
    ?>

    </div>

  </div>
</div>
</body>
</html>