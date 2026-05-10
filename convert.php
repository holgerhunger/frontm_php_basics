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
if (isset($_POST['amount']) && isset($_POST['crypto'])) {
    $amount = $_POST['amount'];
    $crypto = $_POST['crypto'];
    echo "<p>You want to convert $amount $crypto</p>";
} else {
    echo "Please enter a valid amount and cryptocurrency";
}
?>
</body>
</html>