<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .colors{
            width: 100%;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;            
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        // Connection String
        $connect = mysqli_connect('localhost', 'root', '', 'csv_db 13');

        if(!$connect){
            die("connection failed:" . mysqli_connect_error());
        }
        
        $query='SELECT * FROM colors';
        $colors= mysqli_query($connect,$query);
        // echo '<pre>'. print_r($colors). '</pre>';
        foreach ($colors as $color)
        {
            echo '<div class="colors" style="background-color: ' . $color['Hex'] . ';">' . $color['Name'] . '</div>';
        }

    ?>
</body>
</html>
