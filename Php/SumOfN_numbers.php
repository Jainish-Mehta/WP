<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
    </form>
    <?php
    $Sum = 0;
    for ($i = 0; $i <= 20; $i++) {

        if ($i % 2 == 0) {
            $Sum += $i;
        }
    }
    echo "<p>Sum of first 10 even numbers is: $Sum</p>";
    ?>
</body>

</html>