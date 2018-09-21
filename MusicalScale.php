<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_03_01
        Author: Eli Boblett
        Date: 9.19.18 
        MusicalScale.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musical Scale</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Musical Scale</h2>
    <?php
        $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti", "do");
        $outputString = "The notes of the musical scale are: ";
        foreach ($musicalScale as $curNote) {
            $outputString .= " " . $curNote;
        }
        echo "<p>$outputString</p>";
    ?>
    
    <h2>Formatted Text</h2>
    <?php
        $displayVariable = 9.876;
        echo "<pre>\n";
        echo "Unformatted text line 1. \r\n";
        echo "Unformatted text line 2. \r\n";
        echo "\$displayVariable = $displayVariable";
        echo "</pre>\n";
    ?>
</body>
</html>