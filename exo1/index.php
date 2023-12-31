<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 1</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 1</h1>
            <p>Faire une page HTML permettant de donner à l'utilisateur :
                son User Agent
                son adresse ip
                le nom du serveur</p>
        </div>
    </header>
    <main>
        <div class="row">
            <div class="">
                <?php
                echo 'Votre navigateur est :<br />' . ($_SERVER["HTTP_USER_AGENT"]). '<br>';
                echo 'Votre adresse ip est : '. ($_SERVER['REMOTE_ADDR']). '<br>';
                echo 'Le nom du serveur est : '. ($_SERVER['SERVER_NAME']). '<br>';
                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>