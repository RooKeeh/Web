<?php
require_once "ShoppingCart.php";?>
<HTML>
<HEAD>
    <TITLE>Magazin</TITLE>
    <link href="styles.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<a href="Index.html" class="login-btn">Login</a>
<div class="shop-name">Apple Store</div>
<div class="product-grid">
    <?php
    $shoppingCart = new ShoppingCart();
    $query = "SELECT * FROM produse";
    $product_array = $shoppingCart->getAllProducts($query);
    if (!empty($product_array)) {
        foreach ($product_array as $key => $value) {
            ?>
            <div class="product-item">
                <form method="post" action="Index.html?action=add&code=<?php echo $product_array[$key]["ID"]; ?>">
                    <div>
                        <strong><?php echo $product_array[$key]["Denumire"];
                            ?></strong>
                    </div>
                    <div class="product-price"><?php echo
                            "$".$product_array[$key]["Pret"]; ?></div>
                    <div class="product-image">
                        <img src="<?php echo $product_array[$key]["Imagine"]; ?>" width="25%">
                    </div>
                    <div class="description">
                        <?php echo $product_array[$key]["Descriere"]; ?>
                    </div>
                    <div>
                        <input type="text" name="cantitate" value="1" size="2" />
                        <input type="submit" value="ADD to cos"
                               class="btnAddAction" />
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