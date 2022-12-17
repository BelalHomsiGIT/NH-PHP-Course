<?php
    $title = "Test PHP";
    $myName = "Belal Homsi";
    $myAge = 50;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " - Home Page" ?></title>
</head>
<body>
    <h1>Test for PHP</h1>
    <?php 
        echo"<h2>Hellow PHP</h2>";
        echo "<h3> My Name is: $myName , My Age is: $myAge</h3>";
    ?>
</body>
</html>