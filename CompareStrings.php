<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_03_01
        Author: Eli Boblett
        Date: 9.24.18 
        CompareStrings.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Strings</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
    // these are the variables that are going to be compared 
        $fristString = "Geek2Geek";
        $secondString = "Geezer2Geek";

        // this compares the two strings and says the amount of different letters and the number of characters that are the same
        if (!empty($fristString) && !empty($secondString)) {
            if ($fristString == $secondString) {
                echo "<p>Both strings are the same.</p>";
            }
            else {
                echo "<p>Both strings have " . similar_text($fristString, $secondString) . " character(s) in common.</p>";
                echo "<p>You must change " . levenshtein($fristString, $secondString) . " character(s) to make the strings the same.</p>";
            }
        }
        // this says if one of the strings is missing
        else {
            echo "<p>Either the \$fristString variable or the \$secondString variable does not contain a value so the two strings cannot be compared.";
        }
    ?>
</body>
</html>