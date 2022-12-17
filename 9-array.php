<?php
    $arr1 = ["Belal", "Homsi", "oooof"];
    echo $arr1[0] . "<br>";
    echo $arr1[1] . "<br>";
    echo $arr1[2] . "<br>";
    echo $arr1[3] . "<br>";
    $arr1[3] = "New";
    echo $arr1[3] . "<br>";
    
    $arr2 = array(1,2,5,7,9);
    echo count($arr2) . "<br>";

    //Associative Array, key & value
    $arr3 = array(
        "belal" => 90,
        "sami" => "75",
        "jana" => "99"
    );
    echo $arr3["belal"];
    ?>

    <!-- example -->
    <form action="9-array.php" method="GET">
        <input type="text" name="sname"><br>
        <input type="submit"><br>
    </form>
    <?php
        $grade = $_GET["sname"];
        //
        echo $arr3[$grade];

    ?>