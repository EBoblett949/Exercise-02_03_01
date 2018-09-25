<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_03_01
        Author: Eli Boblett
        Date: 9.24.18 
        ascii.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ascii Letters</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h1>Ascii Letters</h1>
    <?php
        $letter1 = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
        $letter2 = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
        $num1 = 65;
        $num2 = 97;
        $i = 0;
        $i2 = 0;

        echo "<h2>Capital Letters</h2>";

        while ($i < 26) {
            echo "$letter1[$i] is $num1<br>";
            $letter1++;
            $num1++;
            $i++;
        }

        echo "<br>";
        echo "<h2>Lowercase Letters</h2>";


        while ($i2 < 26) {
            echo "$letter2[$i2] is $num2<br>";
            $letter2++;
            $num2++;
            $i2++;
        }
    ?>
</body>
</html>