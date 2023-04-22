  <?php
    // Make sure the user submitted all of the data required
    if(isset($_POST['amount']) && is_numeric($_POST['amount']) && isset($_POST['currency'])) { 

      // Use curl to perform the currency conversion using Blockchain.info's currency conversion API
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "https://blockchain.com/tobtc?currency=" . $_POST['currency'] . "&value=" . $_POST['amount']);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $conversion = curl_exec($ch);

      // Use curl to get current prices and 15 minute averages for all currencies from Blockchain.info's exchange rates API
      curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/ticker");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $prices = json_decode(curl_exec($ch), true);
      curl_close($ch);
  ?>
  <h1>Conversion Results</h1>
  <p><?php echo $_POST['amount']; ?> <?php echo $_POST['currency']; ?> is <?php echo $conversion; ?> BTC.</p>
  <h2>Historical Prices</h2>
  <p><strong>Last price:</strong> <?php echo $prices[$_POST['currency']]['last']; ?><?php echo $prices[$_POST['currency']]['symbol']; ?></p>
  <p><strong>Buy price:</strong> <?php echo $prices[$_POST['currency']]['buy']; ?><?php echo $prices[$_POST['currency']]['symbol']; ?></p>
  <p><strong>Sell price:</strong> <?php echo $prices[$_POST['currency']]['sell']; ?><?php echo $prices[$_POST['currency']]['symbol']; ?></p>
  <p><strong>15 minute average price:</strong> <?php echo $prices[$_POST['currency']]['15m']; ?><?php echo $prices[$_POST['currency']]['symbol']; ?></p>
  <?php } else { ?>
  <p>Please fill out the form completely. <a href="converter.php">Go back.</a></p>
  <?php } ?>

<html>
  <head>
    <title>Bitcoin Currency Converter</title>
  </head>
  <body>
      <form action="converter.php" method="post">
      <h1>Bitcoin Currency Converter</h1>
      <p>
        <label for="amount">Bitcoin Amount</label>
        <input type="text" name="amount" id="amount">
      </p>
      <p>
        <label for="currency">Currency</label>
        <select name="currency" id="currency">
          <option value="USD">USD</option>
          <option value="EUR">EUR</option>
          <option value="CNY">CNY</option>
          <option value="JPY">JPY</option>
          <option value="SGD">SGD</option>
          <option value="HKD">HKD</option>
          <option value="CAD">CAD</option>
          <option value="AUD">AUD</option>
          <option value="NZD">NZD</option>
          <option value="GBP">GBP</option>
          <option value="DKK">DKK</option>
          <option value="SEK">SEK</option>
          <option value="BRL">BRL</option>
          <option value="CHF">CHF</option>
          <option value="RUB">RUB</option>
          <option value="SLL">SLL</option>
        </select>
      </p>
      <p>
        <input type="submit" name="submit" value="Submit">
      </p>
      </form>
  </body>
</html>

