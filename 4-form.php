
<form action="4-form.php" method="GET">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
<?php
    echo $_GET["fname"];
?>

<form action="4-form.php" method="POST">
    First Name: <input type="text" name="f_name">
    Last Name: <input type="text" name="l_name">
    <input type="submit">
</form>
<?php
    echo $_POST["f_name"];
    echo $_POST["l_name"];
?>