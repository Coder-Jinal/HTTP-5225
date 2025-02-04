<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Connection String
        $connect = mysqli_connect('localhost', 'root', '', 'csv_db 13');

        if(!$connect){
            die("connection failed:" . mysqli_connect_error());
        }
        
        $query = "SELECT Name FROM colors";
        $colors = mysqli_query($connect, $query);
        echo '<pre>' . print_r($colors) .'</pre>';

    ?>
</body>
</html>