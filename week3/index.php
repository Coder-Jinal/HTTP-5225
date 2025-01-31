<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>

    <h1>Challenge 1</h1>
    <?php 
    $feedingTime=ceil(rand(1,24));
     echo '<h1>'. $feedingTime .'</h1>';
    if($feedingTime>=5 && $feedingTime<=9){
        echo '<h2>Breakfast: "Bananas, Apples, and Oats"</h2>';
    }
    else if($feedingTime>=12 && $feedingTime<=14){
        echo '<h2>Lunch: "Fish, Chicken, and Vegetables"</h2>';
    }
    else if($feedingTime>=19 && $feedingTime<=21){
        echo '<h2>Dinner: "Steak, Carrots, and Broccoli"</h2>';
    }
    else{
        echo '<h2>No time to feed</h2>';
    }
    ?>

    <h1>Challenge 2</h1>
    <?php 
    $magicNumber=ceil(rand(1,100));
    echo '<h1>'. $magicNumber .'</h1>';
    if($magicNumber%5==0){
        echo '<h2>"Buzz"</h2>';
    }
    else if($magicNumber%3==0){
        echo '<h2>"Fizz"</h2>';
    }
    else if($magicNumber%3===0 && $magicNumber%5==0){
        echo '<h2>"FizzBuzz"</h2>';
    }
    
    
    ?>
</body>
</html>