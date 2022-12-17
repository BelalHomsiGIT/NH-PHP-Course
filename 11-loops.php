<?php
    for($i=1; $i<=10; $i++){
        echo "$i <br>";
    }
    echo "<br>";
    //
    $arr1 = [5,6,7,12,"samer"];

    for($idx=0; $idx<count($arr1); $idx++){
        echo $arr1[$idx] . "<br>";
    }
    echo "<br>";
    //
    
    foreach($arr1 as $x){
        echo $x . "<br>";
    }
    echo "<br>";
    //
    $f=1;
    $s=0;
    while($f<=5){
        $s += $f;
        $f++;
    }
    echo $s;
?>
