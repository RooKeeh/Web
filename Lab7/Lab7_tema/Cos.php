<?php
require_once "Clients.php";
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: Index.html');
    exit;
}
$member_id = $_SESSION['loggedin'];
$clients = new Clients();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["cantitate"])) {

                $productResult = $clients->getProdusById($_GET["produs_id"]);

                $cartResult = $clients->getCosByProdus($productResult[0]["produs_id"], $member_id);

                if (!empty($cartResult)) {
                    $newQuantity = $cartResult[0]["cantitate"] +
                        $_POST["cantitate"];
                    $clients->updateCosCantitate($newQuantity,
                        $cartResult[0]["produs_id"]);
                } else {
                    $clients->addToCos($cartResult ,$productResult[0]["produs_id"], $member_id, $_POST["cantitate"]);
                }
            }
            break;
        case "remove":
            $clients->deleteCosItem($_GET["produs_id"]);
            break;
        case "empty":
            $clients->emptyCos($member_id);
            break;
    }
}
?>
<HTML>
<HEAD>
    <TITLE>creare cos permament in PHP</TITLE>
    <link href="style.css" type="text/css" rel="stylesheet"/>
</HEAD>
<BODY>
<div id="shopping-cart">
    <div class="txt-heading">
        20
        <div class="txt-heading-label">Cos Cumparaturi</div>
        <a
                id="btnEmpty" href="Cos.php?action=empty"><img src="empty-cart.png"
                                                               alt="empty-cart" title="Empty Cart"/></a>
    </div>
    <?php
    $cartItem = $clients->getProdusCosItem($member_id);
    if (!empty($cartItem)) {
        $item_total = 0;
        ?>
        <table cellpadding="10" cellspacing="1">
            <tbody>
            <tr>
                <th style="text-align: left;"><strong>Nume</strong></th>
                <th style="text-align: left;"><strong>ID</strong></th>
                <th style="text-align:
right;"><strong>Cantitate</strong></th>
                <th style="text-align:
right;"><strong>Pret</strong></th>
                <th style="text-align:
center;"><strong>Actiune</strong></th>
            </tr>
            <?php
            foreach ($cartItem as $item) {
                ?>
                <tr>
                    <td
                            style="text-align: left; border-bottom: #F0F0F0 1px
solid;"><strong><?php echo $item["produs_nume"]; ?></strong></td>
                    <td
                            style="text-align: left; border-bottom: #F0F0F0 1px
solid;"><?php echo $item["produs_id"]; ?></td>
                    <td
                            style="text-align: right; border-bottom: #F0F0F0 1px
solid;"><?php echo $item["cantitate"]; ?></td>
                    <td
                            style="text-align: right; border-bottom: #F0F0F0 1px
solid;"><?php echo "$" . $item["produs_pret"]; ?></td>
                    <td
                            style="text-align: center; border-bottom: #F0F0F0 1px
solid;"><a
                                href="Cos.php?action=remove&id=<?php echo
                                $item["cos_id"]; ?>"
                                class="btnRemoveAction"><img src="icon-delete.png"
                                                             alt="icon-delete" title="Remove Item"/></a></td>
                </tr>
                <?php
                $item_total += ($item["produs_pret"] * $item["cantitate"]);
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
<div><a href="magazin.php">Alegeti alt produs</a></div>
<div><a href="logout.php">Abandonati sesiunea de
        cumparare</a></div>
<?php //require_once "product-list.php"; ?>

</BODY>
</HTML>