<?php
    include ("./data/data.php")
?>

<main class="mainContainer">
    <?php
        foreach ($products as $value) {
    ?>
            <div class="productContent">  
                <a href="index.php?page=./pages/produto.php&id=<?=$value["id"];?>">
                    <img src=<?=$value["image"];?> width="300" height="200"/>
                    <p class="productName"><?=$value["name"];?></p>
                </a>
            </div>
        <?php
    }
    ?>
</main>