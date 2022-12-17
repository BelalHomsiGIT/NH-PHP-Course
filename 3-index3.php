<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
        $myString = "Belal Homsi";
        echo $myString . "<br>"; // Belal Homsi
        echo strtolower($myString) . "<br>"; // belal homsi
        echo strtoupper($myString) . "<br>"; // BELAL HOMSI
        echo strlen($myString) . "<br>"; // 11
        echo $myString[0] . "<br>"; // B
        echo $myString[6] . "<br>"; // H
        $myString[strlen($myString)] = "T";
        echo $myString . "<br>"; // Belal HomsiT
        echo $myString[strlen($myString) - 1] . "<br>"; // T
        $myNewString = str_replace("Belal", "Jana", $myString);
        echo $myNewString . "<br>"; // Jana HomsiT
        $myNewString_T = substr($myNewString, 0 , strlen($myNewString) - 1);
        echo $myNewString_T; // Jana Homsi
        
        echo "<br>";
        $myNum = 4;
        $myNum--; 
        echo $myNum . "<br>"; // 3
        $myNum++;
        echo $myNum . "<br>"; // 4
        echo pow($myNum, 3) . "<br>"; // 64
        echo sqrt($myNum) . "<br>"; // 2
        $myNum += 10;
        echo $myNum . "<br>"; // 14       

    ?>
</body>
</html>