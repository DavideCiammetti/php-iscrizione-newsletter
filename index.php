<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- bootstrap -->
        <title>PHP Iscrizione Newsletter</title>
    </head>
    <body>
        <h1>new</h1>

        <form class="row g-3" action="index.php" method="POST">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="mail">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
        <?php
            $email = $_POST['mail'];
        ?>
            <!-- inclusione functions.php file contenente la logica -->
            <?php 
                include __DIR__. '/functions.php';
            ?>
    </body>
    </html>