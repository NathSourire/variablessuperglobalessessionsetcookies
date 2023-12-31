<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    setcookie('firstname', $_POST['firstname'],time() + 365*24*3600); 
    setcookie('password', $_POST['password'],time() + 365*24*3600); 
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 4</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 4</h1>
            <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>
        </div>
    </header>
    <main class="">
        <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
            <form class="row justify-content-center" method="post" action="test.php">
                <div class="col-6">
                    <div class="row">
                        <?php 
                            echo 'Votre nom d\'utilisateur est : ' .$_COOKIE['firstname']. ' /  Votre mot de passe est : ' .$_COOKIE['password']; 
                        ?>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>