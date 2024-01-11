<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grazie</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1 class="color">la registrazione è avvenuta con successo</h1>
  <h3 class="col-white">La tua email è: <?php echo $_SESSION['email']; ?></h3>
</body>

</html>