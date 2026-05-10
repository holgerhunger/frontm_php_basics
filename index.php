<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crypto Masters</title>
</head>
<body>
<h1>Crypto Masters</h1>
<form action="convert.php" method="post">
    <label for="amount">Amount</label>
    <input id="amount" name="amount">
    <br>
    <label for="crypto">Cryptocurrency</label>
    <select id="crypto" name="crypto">
        <option value="BTC">Bitcoin</option>
        <option value="ETH">Ethereum</option>
    </select>
    <br>
    <button type="submit">Convert</button>
</form>
</body>
</html>
