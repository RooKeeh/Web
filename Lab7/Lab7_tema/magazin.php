<?php
require_once "Clients.php"; ?>
<HTML>
<HEAD>
    <TITLE>Creare cos cumparaturi </TITLE>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</HEAD>
<BODY>
<div id="product-grid">
    <div class="txt-heading">
        <div class="txt-headinglabel">Products</div>
    </div>
    <?php
    $clients = new Clients();
    $query = "SELECT * FROM clienti";
    $product_array = $clients->getAllProduct($query);
    if (!empty($product_array)) {
        foreach ($product_array as $key => $value) {
            ?>
            <div class="product-item">
                <form method="post" action="Cos.php?action=add&code=<?php
                echo $product_array[$key]["produs_id"]; ?>">
                    <div class="product-image">
                        <img src="<?php echo $product_array[$key]["produs_img"]; ?>">
                    </div>
                    <div>
                        <strong><?php echo $product_array[$key]["produs_nume"];
                            ?></strong>
                    </div>
                    <div class="product-price"><?php echo
                            "$" . $product_array[$key]["produs_pret"]; ?></div>
                    <div>
                        <input type="text" name="quantity" value="1" size="2"/>
                        <input type="submit" value="Add to cart"
                               class="btnAddAction"/>
                    </div>
                </form>
            </div>
            <?php
        }
    }
    ?>
</div>
</BODY>
</HTML>