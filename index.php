<!DOCTYPE html>
<?php
    include ("data/data.php")
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
        <title>Mapa Backend I</title>
    </head>
    <body>
        <header>
            <div class="headerContainer">
                <img src="images/logo.png" alt="logo" width="150">
                <div class="links">
                    <a href="index.php?page=./pages/home.php">Home</a>
                    <a href="index.php?page=./pages/quemSomos.php">Quem somos</a>
                    <a href="index.php?page=./pages/contato.php">Contato</a>
                    <a href="index.php?page=./pages/localizacao.php">Localização</a>
                </div>
            </div>
        </header>

    <main>
        <?php
            if (isset($_GET["page"]) &&  !empty($_GET["page"])) {
                $page = $_GET["page"];
                include ($page);
            }
        ?>
    </main>

        

        <footer>
            <p>Desenvovido por Jhonata Martins da Costa, RA:20009002-5</p>
        </footer>
        
    </body>
</html>