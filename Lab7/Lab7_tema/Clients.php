<?php
require_once "DBController.php";

class Clients extends DBController
{
    function getAllProduct()
    {
        $query = "SELECT * FROM produse";

        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getProdusCosItem($clientID)
    {
        $query = "SELECT cos.*, produse.*  as
cos_id, produse.produs_id FROM produse, cos WHERE
 cos.produs_id = produse.produs_id AND cos.cos_id = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $clientID
            )
        );

        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function getProdusById($produs_id)
    {
        $query = "SELECT * FROM produse WHERE produs_id=?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $produs_id
            )
        );

        $productResult = $this->getDBResult($query, $params);
        return $productResult;
    }

    function getCosByProdus($produs_id, $cos_id)
    {
        $query = "SELECT * FROM cos WHERE produs_id = ? AND cos_id = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $produs_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $cos_id
            )
        );

        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function addToCos($cos_id, $produs_id, $clientID, $cantitate)
    {
        $query = "INSERT INTO cos (cos_id, produs_id, clientID, cantitate) VALUES (?, ?, ?, ?)";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cos_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $produs_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $clientID
            ),
            array(
                "param_type" => "i",
                "param_value" => $cantitate
            )
        );

        $this->updateDB($query, $params);
    }

    function updateCosCantitate($cantitate, $cos_id)
    {
        $query = "UPDATE cos SET cantitate = ? WHERE cos_id= ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cantitate
            ),
            array(
                "param_type" => "i",
                "param_value" => $cos_id
            )
        );
        $this->updateDB($query, $params);
    }

    function deleteCosItem($cos_id)
    {
        $query = "DELETE FROM cos WHERE cos_id = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cos_id
            )
        );

        $this->updateDB($query, $params);
    }

    function emptyCos($cos_id)
    {
        $query = "DELETE FROM cos WHERE cos_id = ?";

        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cos_id
            )
        );

        $this->updateDB($query, $params);
    }
}