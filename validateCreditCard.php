<!doctype html>
<html>
<head>
    <!-- 
        Exercise 02_03_01
        Author: Eli Boblett
        Date: 9.24.18 
        ValidateCreditCard.php
     -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate Credit Card</title>
    <script src="modernizr.custom.65897.js"></script>
</head>
<body>
    <?php
        $creditCard = array("", "8910-1234-5678-6543", "OOOO-9123-4567-0123");

        foreach ($creditCard as $indexNumber => $cardNumber) {
            if (empty($cardNumber)) {
                echo "<p>Credit Card Number $indexNumber is invalid because it contains an empty string</p>";
            }
            else {
                $creditCardNumber = $cardNumber;
                $creditCardNumber = str_replace("-","",$creditCardNumber);
                $creditCardNumber = str_replace(" ", "", $creditCardNumber);
                echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.</p>";
                if (!is_numeric($creditCardNumber)) {
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid because it contains a non-numeric character.</p>";
                }
            }
        }
    ?>
</body>
</html>