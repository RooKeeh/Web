<?php
require_once "DBController.php";

class ShoppingCart extends DBController
{
    function getAllProducts()
    {
        $query = "SELECT * FROM produse";

        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getMemberCosItem($ID)
    {
        $query = "SELECT produse.*, cos.ID_Produs as 
cos_id, cos.cantitate FROM produse, cos WHERE produse.ID = cos.ID_Produs AND cos.ID = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $ID
            )
        );

        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function getProductByCode($ID)
    {
        $query = "SELECT * FROM produse WHERE ID=?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $ID
            )
        );

        $productResult = $this->getDBResult($query, $params);
        return $productResult;
    }

    function getCosItemByProdus($ID_Produs, $ID)
    {
        $query = "SELECT * FROM cos WHERE ID_Produs = ? AND ID = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $ID_Produs
            ),
            array(
                "param_type" => "i",
                "param_value" => $ID
            )
        );

        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function addToCos($ID_Produs, $ID_Client, $cantitate, $ID)
    {
        $query = "INSERT INTO cos (ID_Produs, ID_Client, cantitate, ID) VALUES (?, ?, ?, ?)";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $ID_Produs
            ),
            array(
                "param_type" => "i",
                "param_value" => $ID_Client
            ),
            array(
                "param_type" => "i",
                "param_value" => $cantitate
            ),
            array(
                "param_type" => "i",
                "param_value" => $ID
            )
        );

        $this->updateDB($query, $params);
    }

    function updateCosQuantity($cantitate, $ID)
    {
        $query = "UPDATE cos SET cantitate = ? WHERE ID_Produs= ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cantitate
            ),
            array(
                "param_type" => "i",
                "param_value" => $ID
            )
        );
        $this->updateDB($query, $params);
    }

    function deleteCosItem($ID)
    {
        $query = "DELETE FROM cos WHERE ID=?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $ID
            )
        );

        $this->updateDB($query, $params);
    }

    function emptyCos($member_id)
    {
        $query = "DELETE FROM cos WHERE ID = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );

        $this->updateDB($query, $params);
    }
}