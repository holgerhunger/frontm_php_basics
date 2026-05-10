<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>Conversion Results</h1>
<?php
require_once 'classes/CryptoConverter.php';
if (isset($_POST['amount']) && isset($_POST['crypto'])) {
    $amount = $_POST['amount'];
    $crypto = $_POST['crypto'];

    $converter = new CryptoConverter($crypto);
    $convertedAmount = $converter->convert($amount);

    echo "<p>You want to convert $amount $crypto</p>";
    echo "<h3>You have USD $convertedAmount</h3>";
} else {
    echo "Please enter a valid amount and cryptocurrency";
}
?>
</body>
</html>