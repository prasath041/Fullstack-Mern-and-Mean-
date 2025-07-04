<!DOCTYPE html>
<html>
<head>
    <title>PHP Operators with User Input</title>
</head>
<body>
    <h2>Enter Values to Test PHP Operators</h2>
    <form method="post">
        A: <input type="number" name="a" required><br><br>
        B: <input type="number" name="b" required><br><br>
        String C: <input type="text" name="c" required><br><br>
        String D: <input type="text" name="d" required><br><br>
        <input type="submit" value="Run">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = (int)$_POST["a"];
        $b = (int)$_POST["b"];
        $c = $_POST["c"];
        $d = $_POST["d"];

        echo "<h3>Results:</h3>";

        // 1. Arithmetic Operators
        echo "<b>Arithmetic Operators:</b><br>";
        echo "Addition: " . ($a + $b) . "<br>";
        echo "Subtraction: " . ($a - $b) . "<br>";
        echo "Multiplication: " . ($a * $b) . "<br>";
        echo "Division: " . ($a / $b) . "<br>";
        echo "Modulus: " . ($a % $b) . "<br>";
        echo "Exponentiation: " . ($a ** $b) . "<br><br>";

        // 2. Assignment Operators
        echo "<b>Assignment Operators:</b><br>";
        $a += $b;
        echo "After += : $a<br>";
        $a -= $b;
        echo "After -= : $a<br><br>";

        // 3. Comparison Operators
        echo "<b>Comparison Operators:</b><br>";
        echo "Equal (==): " . ($a == $b ? "true" : "false") . "<br>";
        echo "Not Equal (!=): " . ($a != $b ? "true" : "false") . "<br>";
        echo "Greater Than: " . ($a > $b ? "true" : "false") . "<br><br>";

        // 4. Increment/Decrement
        echo "<b>Increment/Decrement:</b><br>";
        echo "Pre-increment: " . (++$b) . "<br>";
        echo "Post-increment: " . ($b++) . "<br>";
        echo "Now b = $b<br><br>";

        // 5. Logical Operators
        echo "<b>Logical Operators:</b><br>";
        $x = true;
        $y = false;
        echo "x AND y: " . ($x && $y ? "true" : "false") . "<br>";
        echo "x OR y: " . ($x || $y ? "true" : "false") . "<br>";
        echo "NOT x: " . (!$x ? "true" : "false") . "<br><br>";

        // 6. String Operators
        echo "<b>String Operators:</b><br>";
        $greeting = $c . $d;
        echo "Concatenation: $greeting<br>";
        $c .= $d;
        echo "After .= : $c<br><br>";

        // 7. Array Operators
        echo "<b>Array Operators:</b><br>";
        $arr1 = ["a" => 1, "b" => 2];
        $arr2 = ["b" => 3, "c" => 4];
        $union = $arr1 + $arr2;
        echo "Union (arr1 + arr2):<br>";
        print_r($union);
        echo "<br>Are arrays equal? " . ($arr1 == $arr2 ? "Yes" : "No") . "<br><br>";

        // 8. Ternary Operator
        echo "<b>Ternary Operator:</b><br>";
        $result = ($a > $b) ? "A is bigger" : "B is bigger";
        echo "$result<br><br>";

        // 9. Null Coalescing Operator
        echo "<b>Null Coalescing:</b><br>";
        $name = $_POST['name'] ?? "Guest";
        echo "Hello, $name<br>";
    }
    ?>
</body>
</html>
