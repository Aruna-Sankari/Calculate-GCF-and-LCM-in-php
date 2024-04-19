<?php
function GCF($a, $b)
{
    if ($b == 0) {
        return $a;
    } else {
        return GCF($b, $a % $b);
    }
}
function LCM($a, $b)
{
    return ($a * $b) / GCF($a, $b);
}
?>
<html>

<head>
    <title>GCF and LCM</title>
</head>

<body>
    <h2><u>GCF and LCM</u></h2>
    <?php
    if (!isset($_POST['sub'])) {
        ?>
        <form method="post" action="GCF and LCM.php">
            <h3>Enter Two Integers:</h3><br><br>
            <label>Number 1:</label>
            <input type="text" name="num1" size="3"><br><br>
            <label>Number 2:</label>
            <input type="text" name="num2" size="3"><br><br>
            <input type="submit" name="sub" value="Submit">
        </form>
        <?php
    } else {
        $num_1 = (int) $_POST['num1']; // It get the value of number 1 and it stores the value in this variable($num_1)
        $num_2 = (int) $_POST['num2']; // It get the value of number 2 and it stores the value in this variable($num_2)
        echo "The Number is $num_1,$num_2";
        echo "<br><br>";
        echo "GCF of ($num_1,$num_2) is:" . GCF($num_1, $num_2); // Function Call of GCF
        echo "<br><br>";
        echo "LCM of ($num_1,$num_2) is:" . LCM($num_1, $num_2);  // Function Call of LCM
    }
    ?>

</body>

</html>