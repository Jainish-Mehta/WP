<html>
    <head>
        <title>Simple Calculator</title>
    </head>
    <body>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="Enter First Number"><br>
            <input type="number" name="num2" placeholder="Enter Second Number"><br>
            <select name="operator"><br>
                <option value="add">Addition (+)</option>
                <option value="sub">Subtraction (-)</option>
                <option value="mul">Multiplication (*)</option>
                <option value="div">Division (/)</option>
            </select><br>
            <input type="submit" name="calculate" value="Calculate">
        </form>
    </body>
</html>
<?php
if(isset($_POST['calculate'])){
    $num1= $_POST['num1'];
    $num2= $_POST['num2'];
    $op  = $_POST['operator'];

    switch($op){
        case 'add':
            $res= $num1 + $num2;
            echo "Result: $num1 + $num2 = $res";
            break;
        case 'sub':
            $res= $num1 - $num2;
            echo "Result: $num1 - $num2 = $res";
            break;
        case 'mul':
            $res= $num1 * $num2;
            echo "Result: $num1 * $num2 = $res";
            break;
        case 'div':
            if($num2 != 0){
                $res= $num1 / $num2;
                echo "Result: $num1 / $num2 = $res";
            } else {
                echo "Error: Division by zero is not allowed.";
            }
            break;

        default:
            echo "Invalid operation selected.";
    }
}
?>