<?php
require_once "ShoppingCart.php";
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: magazin_logout.php');
    exit;
}
$member_id = $_SESSION['loggedin'];
$shoppingCart = new ShoppingCart();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["cantitate"])) {
                $productResult = $shoppingCart->getProductByCode($_GET["code"]);

                $cartResult = $shoppingCart->getCosItemByProdus($productResult[0]["ID"], $member_id);

                if (!empty($cartResult)) {
                    $newQuantity = $cartResult[0]["cantitate"] +
                        $_POST["cantitate"];
                    $shoppingCart->updateCosQuantity($newQuantity,
                        $cartResult[0]["ID_Produs"]);
                } else {
                    $shoppingCart->addToCos($productResult[0]["ID"], NULL,
                        $_POST["cantitate"], $member_id);
                }
            }
            break;
        case "remove":
            $shoppingCart->deleteCosItem($_GET["id"]);
            break;
        case "empty":
            $shoppingCart->emptyCos($member_id);
            break;
    }
}
?>
<HTML>
<HEAD>
    <TITLE>Cos Cumparaturi</TITLE>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</HEAD>
<BODY>
<div id="shopping-cart">
    <div class="txt-heading">
        <div class="txt-heading-label">Cos Cumparaturi</div>
        <a id="btnEmpty" href="Cos.php?action=empty">
            <img src="empty-cart.png"
                 alt="Goleste Cosul" title="Empty Cart">
        </a>
    </div>
    <?php
    $cartItem = $shoppingCart->getMemberCosItem($member_id);
    if (!empty($cartItem)) {
        $item_total = 0;
        ?>
        <table cellpadding="10" cellspacing="1">
            <tbody>
            <tr>
                <th style="text-align: left;"><strong>Denumire</strong></th>
                <th style="text-align: left;"><strong>ID Client</strong></th>
                <th style="text-align: right;"><strong>Cantitate</strong></th>
                <th style="text-align: right;"><strong>Pret</strong></th>
                <th style="text-align: center;"><strong>Actiune</strong></th>
            </tr>
            <?php
            foreach ($cartItem as $item) {
                ?>
                <tr>
                    <td
                            style="text-align: left; border-bottom: #F0F0F0 1px solid;">
                        <strong><?php echo $item["Denumire"]; ?></strong></td>
                    <td
                            style="text-align: left; border-bottom: #F0F0F0 1px solid;"><?php echo $item["ID"]; ?></td>
                    <td
                            style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo $item["cantitate"]; ?></td>
                    <td
                            style="text-align: right; border-bottom: #F0F0F0 1px solid;"><?php echo "$" . $item["Pret"]; ?></td>
                    <td
                            style="text-align: center; border-bottom: #F0F0F0 1px solid;">
                        <a
                                href="Cos.php?action=remove&id=<?php echo
                                $item["cos_id"]; ?>"
                                class="btnRemoveAction"><img src="icon-delete.png"
                                                             alt="Delete" title="Remove Item"/>
                        </a></td>
                </tr>
                <?php
                $item_total += ($item["Pret"] * $item["cantitate"]);
            }
            ?>
            <tr>
                <td colspan="3"
                    align=right><strong>Total:</strong></td>
                <td align=right><?php echo "$" . $item_total; ?></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <?php
    }
    ?>
</div>
<div><a href="magazin_logout.php">Alegeti alt produs</a></div>
<div><a href="logout.php">Abandonati sesiunea de cumparare</a></div>
<div><a href="trimite_comanda.php">Trimite Comanda</a></div>
<?php //require_once "product-list.php"; ?>
</BODY>
</HTML>