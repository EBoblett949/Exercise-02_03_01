<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_03_01
        Author: Eli Boblett
        Date: 9.21.18 
        PasswordFields.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Fields</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
<h2>Password Fields</h2>
    <?php
       $record = "jdoe:8w4dso3a39Yk2:1463:24:John Doe:/home/jdoe:/bin/bash:extra 1:extra 2"; 
       $passwordFields = array("login name", "optional encrypted password", "numerical user ID", "numerical group ID", "username or comment field", "user home directory", "optional user command interpreter");

       $extraFields = 0;
       $fields = explode(":", $record);
        foreach ($fields as $fieldIndex => $fieldValue) {
            if ($fieldIndex < count($passwordFields)) {
                echo "<p>The {$passwordFields[$fieldIndex]} is <em>$fieldValue</em></p>\n";
            }
            else {
                ++$extraFields;
                echo "<p>Extra field # $extraFields is <em>$extraFields</em></p>\n";
            }
        }
    ?>
</body>
</html>