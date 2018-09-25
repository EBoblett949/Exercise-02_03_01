<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_03_01
        Author: Eli Boblett
        Date: 9.24.18 
        ValidateLocalAddress.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Local Address</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
    // variable for the different emails
        $email = array("jsmith123@example.org", "john.smith.mail@example.org", "john.smith@example.org", "john.smith@example", "jsmith123@mail.example.org");

        // loop that checks the array for a match to the regex if it matches it says its valid and if it doesn't it says its not valid 
        foreach ($email as $emailAddresses) {
            echo "The email address &ldquo;" . $emailAddresses . "&rdquo;";
            if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddresses) == 1) {
                echo "is a valid eamil address.<br>";
            }
            else {
                echo "is not a valid email address.<br>";
            }
        }
    ?>
</body>
</html>