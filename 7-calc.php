<?php
if(isset($_GET["num1"]) && isset($_GET["num2"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width:50%; 
            margin:auto;
            text-align:center;
            padding:10px;
            /* border: 1px solid red; */
        }
        form{
            padding:20px;
            border: 1px solid green;
        }
        label{
            width: 25%;
        }
        input[type=number],[type=text]{
            box-sizing:border-box;
            width:75%;
            height:40px;
            padding:15px;
            font-size:18px;
            border: 1px solid blue;
            border-radius:5px;
        }
        input:focus{
            background-color:lightblue;
            /* border: 1px solid white; */
        }
        input[type=submit]{
            width: 90%;
            height: 45px;
            font-size:18px;
        }
        .result{
            width:80%;
            margin: auto;
            margin-top: 10px;
            height: 25px;
            background-color: yellowgreen;
            font-size:22px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Calculator-PHP</h1>
        <hr>
    </div>
    <div>
        <form action="7-calc.php" method="GET">
            <label for="num1">Number 1</label>
            <input type="number" name="num1" placeholder="0">
            <br><br>
            <label for="num2">Number 2</label>
            <input type="number" name="num2" placeholder="0">
            <br><br>
            <label for="op">Operator</label>
            <input type="text" name="op" placeholder="+">
            <br><br>
            <input type="submit" value="Calc">
        </form>
    <div class="result">
        <?php
            if(!empty($_GET["num1"]) && !empty($_GET["num2"])){
                if($_GET["op"] === "+"){
                    echo $_GET["num1"] + $_GET["num2"];
                }elseif($_GET["op"] === "-"){
                    echo $_GET["num1"] - $_GET["num2"];
                }elseif($_GET["op"] === "*"){
                    echo $_GET["num1"] * $_GET["num2"];
                }elseif($_GET["op"] === "/"){
                    echo $_GET["num1"] / $_GET["num2"];
                }else{
                    echo "Invalid Operator !";
                }
            }else{
                echo "Result";
            }
        ?>
    </div>
    </div>
</body>
</html>