<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week2</title>
</head>
<body>
    
    
    <?php 
        echo '<h1>PHP and Creating Output</h1>';
        echo '<p>The PHP echo command can be used to create output.</p>';
        echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';
        echo '
            <ul>
            <li>Use HTML special characters</li>
            <li>Alternate between single and double quotes</li>
            <li>Use a backslash to escape quotes</li>
            </ul>
            ';
        echo '<h2>More HTML to Convert</h2>';
        echo '<p>PHP says "Hello World!"</p>';
        echo '<p>Can you display a sentence with \' and \"?</p>';
        echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMBaY1Df296DYOujZQptPMTNBsHaRoTcmYww&s">'; 
        ?>
        <img src="<?php echo 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJBoiJAy-7GS6RXi0YJYkZC1EL8KWDAHQ7qA&s' ?>" alt="<?php echo "Alt text"?>">

        <?php
        $name = "Jinal";
        $lastname = "Patel";

        echo "Hello " . $name;

        $person['first'] = 'Jinal';
        $person['last'] = 'Patel';
        $person['email'] = 'n01714049@humber.ca';
        $person['web'] = 'https://google.com';

        echo "FirstName: " . $person['first'];
        echo "LastName: "  . $person['last'];
        echo ' Email: <a href="mailto:' . $person['email'] . '">' . $person['email'] . '</a><br>';
        echo 'Website: <a href="' . $person['web'] . '" target="_blank">' . $person['web'] . '</a><br>';
        ?>
</body>
</html>