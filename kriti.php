<!DOCTYPE html>
<html>
<head>
    <title>PHP Web Calculator</title>
</head>
<body>
    <h2>Calculatooor</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required="required">
        <input type="number" name="num2" placeholder="Enter second number" required="required">
        <br>
        <input type="submit" name="operator" value="Add">
        <input type="submit" name="operator" value="Sub">
        <input type="submit" name="operator" value="Mul">
        <input type="submit" name="operator" value="Div">
    </form>

    <?php
    if(isset($_POST['operator'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operand = $_POST['operator'];

        if($operand=="Add")
        	$result=$num1+$num2;
        else if($operand=="Sub")
        	$result=$num1-$num2;
        else if($operand=="Mul")
        	$result=$num1*$num2;
        else if($operand=="Div")
        	$result=$num1/$num2;
    }
    ?>
    Result: <input type='text' value="<?php echo $result; ?>">
</body>
</html>

