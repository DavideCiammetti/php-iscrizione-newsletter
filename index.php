<?php
    require_once __DIR__. '/functions.php';

    session_start();
    if (!empty($_GET['email'])) {
        $mail = $_GET['email'];

        if(checkEmail($mail) === true){

            $_SESSION['email'] = $mail;
            header('Location: pass.php');
            die;
        }else if(checkEmail($mail) === false){
            $_SESSION['email'] = $mail;
            header('Location: wrongMail.php');
            die;
        }
    }
?>
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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main class="p-5">
            <h1 class="color">New Mail</h1>
            <form class="g-3" action="index.php" method="GET">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label color">Email</label>
                    <input type="text" class="form-control" id="inputEmail4" name="email">
                </div>
                <div class="col-12 pt-2">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </main>
    </body>
    </html>