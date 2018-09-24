<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_03_01
        Author: Eli Boblett
        Date: 9.21.18 
        Presidents2.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presidents 2</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Presidents 2</h2>
    <?php
        $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
        $thisPresident = strtok($presidents, ";");

        while ($thisPresident != NULL) {
            echo "$thisPresident<br>";
            $thisPresident = strtok(";");
        }
    ?>
</body>
</html>