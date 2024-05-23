<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wisselgeld Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
    }

    #amountInput, #paidInput {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }

    #calculateButton {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    #result {
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="amountInput">Te betalen bedrag:</label>
      <input type="number" name="amount" id="amountInput" placeholder="Bedrag in euro's" required>

      <label for="paidInput">Betaald bedrag:</label>
      <input type="number" name="paid" id="paidInput" placeholder="Bedrag in euro's" required>

      <button type="submit" id="calculateButton">Bereken wisselgeld</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = isset($_POST["amount"]) ? floatval($_POST["amount"]) : 0;
        $paid = isset($_POST["paid"]) ? floatval($_POST["paid"]) : 0;

        if ($amount <= 0 || $paid <= 0) {
            echo "<p>Voer geldige bedragen in.</p>";
        } else {
            $change = $paid - $amount;
            echo "<p id='result'>Wisselgeld: " . number_format($change, 2) . " euro</p>";
        }
    }
    ?>
  </div>
</body>
</html>
