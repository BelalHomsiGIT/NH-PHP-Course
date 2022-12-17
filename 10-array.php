    <?php
        //Associative Array, key & value
        $arr3 = array(
            "belal" => [90, "A"],
            "sami" => [75, "C"],
            "jana" => [99, "A+"]
        );
        echo $arr3["belal"][0];
        echo $arr3["belal"][1];
    ?>

    <!-- example -->
    <form action="10-array.php" method="GET">
        <input type="text" name="sname"><br>
        <input type="submit"><br>
    </form>
    <?php
        $grade = $_GET["sname"];
        //
        echo "Score: " . $arr3[$grade][0];
        echo "<br>";
        echo "Grade: " . $arr3[$grade][1];

    ?>