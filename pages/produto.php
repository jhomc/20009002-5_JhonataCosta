<?php
    include ("./data/data.php")
?>
<div class="productContainer">
    <?php
    if (isset($_GET["id"]) &&  !empty($_GET["id"])) {
        $id = $_GET["id"];
    } else {
        return 0;
    }

        foreach ($products as $value) {
            if ($value["id"] == $id) {
    ?>
                <div class="productContent">  
                    <img src=<?=$value["image"];?> width="450" height="300"/>
                    <h1><?=$value["name"];?></h1>
                    <p class="productDescription"><?=$value["description"];?></p>
                    <span>R$ <?=$value["price"];?>/un</span>
                    <button>Comprar</button>
                </div>
        <?php
        }
    }
    ?>
</div>