<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- visualizzo mail errata o meno a schermo -->
        <p><?php echo $email.'<br>';?></p>
        <!-- valido la mail se contiene o meno il punto o la @ -->
        <?php if (strpos($email, '@') !== false && strpos($email, '.') !== false) { ?>
                <p><?php echo "L'indirizzo email è valido, contiene il simbolo '@' e '.'"; ?></p> <br>
            <!-- se la mail è errata -->
        <?php } else { ?>
            <div class="alert alert-warning" role="alert">
                indirizzo email errato, inseriscilo correttamente
            </div>
        <?php } ?>
</body>
</html>