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
    <title>Calculator-PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
</head>
<body>
    <div>
        <h1>Calculator-PHP</h1>
        <hr>
    </div>
    <div class="container">
        <form action="8-calc.php" method="GET" class="form">
            <div>
                <label for="num1">Number 1</label>
                <input type="number" name="num1" placeholder="0" class="form-control">
            </div>

            <div>
                <label for="num2">Number 2</label>
                <input type="number" name="num2" placeholder="0" class="form-control">
            </div>

            <div>
                <label for="op">Operator</label>
                <input type="text" name="op" placeholder="+" class="form-control">
            </div>

            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Calc" class="btn btn-primary btn-lg">
            </div>
            <br>
        </form>
    <div class="alert alert-primary" role="alert" style="text-align:center; font-size: 20px;">
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

    <!-- <script src="/bootstrap/bootstrap.min.js"></script> -->

</body>
</html>