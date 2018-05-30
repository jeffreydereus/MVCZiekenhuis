<?php

    function addHospitalToDB($Data) {
        $db = openDatabaseConnection();

        $sql = "INSERT INTO Ziekenhuis (`Name`, `City`, `Street`, `House_Number`, `Postal_Code`) VALUES(:HName, :HCity, :HStreet, :HHNumber, :HPostalCode)";
        $query = $db->prepare($sql);
        $query->bindParam(':HName', $Data[0], PDO::PARAM_STR);
        $query->bindParam(':HCity', $Data[1], PDO::PARAM_STR);
        $query->bindParam(':HStreet', $Data[2], PDO::PARAM_STR);
        $query->bindParam(':HHNumber', $Data[3], PDO::PARAM_INT);
        $query->bindParam(':HPostalCode', $Data[4], PDO::PARAM_STR);
        $query->execute();

        $db = null;
        header('Location:' . URL .  'home/index');

        return;
    }