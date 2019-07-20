<?php 
  include 'inc/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color: <?php echo getRandomColor(); ?>">
  <div class="container">
    <div id="quote-box">
     <?php 
      printQuote($quotes);
     ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
  <script>
    // 20-30s seemed way too long, went with 7.5s
    setTimeout(() => {
      window.location.reload(true);
    }, 7500);
  </script>
</body>
</html>