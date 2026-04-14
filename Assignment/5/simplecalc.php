<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator using Switch</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <label>Enter First Number:</label>
        <input type="number" name="num1" required><br><br>

        <label>Enter Second Number:</label>
        <input type="number" name="num2" required><br><br>

        <label>Select Operation:</label>
        <select name="operator">
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (*)</option>
            <option value="div">Division (/)</option>
        </select><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op   = $_POST['operator'];

        switch($op){
            case "add":
                $result = $num1 + $num2;
                echo "<h3>Result: $num1 + $num2 = $result</h3>";
                break;

            case "sub":
                $result = $num1 - $num2;
                echo "<h3>Result: $num1 - $num2 = $result</h3>";
                break;

            case "mul":
                $result = $num1 * $num2;
                echo "<h3>Result: $num1 × $num2 = $result</h3>";
                break;

            case "div":
                if($num2 != 0){
                    $result = $num1 / $num2;
                    echo "<h3>Result: $num1 ÷ $num2 = $result</h3>";
                } else {
                    echo "<h3>Error: Division by zero is not allowed.</h3>";
                }
                break;

            default:
                echo "<h3>Invalid operation selected.</h3>";
        }
    }
    ?>
</body>
</html>
