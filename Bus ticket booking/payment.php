<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Page</title>
  <!-- Include any additional stylesheets or scripts as needed -->
</head>
<body>

  <h2>Payment Details</h2>

  <form action="bussearch.php" method="post">
    <!-- Replace "process_payment.php" with the actual server-side processing script -->

    <label for="card_number">Card Number:</label>
    <input type="text" id="card_number" name="card_number" required>

    <label for="expiry_date">Expiry Date:</label>
    <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" required>

    <label for="card_holder_name">Cardholder Name:</label>
    <input type="text" id="card_holder_name" name="card_holder_name" required>

    <label for="amount">Amount:</label>
    <input type="text" id="amount" name="amount" required>

    <!-- Add other necessary fields such as billing address, etc. -->

    <button type="submit">Pay Now</button>
  </form>

</body>
</html>
