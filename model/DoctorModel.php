<?php

    function LoginDoc($data){
        $db = openDatabaseConnection();
        $sql = "SELECT FirstName, Password FROM Doktoren WHERE LastName = :Uname";
        $query = $db->prepare($sql);
        $query->bindParam(":Uname", $data[0], PDO::PARAM_STR);
        $query->execute();
        $db = null;

        $fetch = $query->fetchAll();
        if (password_verify($data[1], $fetch[0]['Password'])){ //Verify a password
            session_start();
            $_SESSION["type"] = 'Doctor';
            $_SESSION["LName"] = $data[0];
            $_SESSION["FName"] = $fetch[0]['FirstName'];
            header('Location:' . URL . "Doctor/ingelogd/");
        } else {
            header('Location:' . URL . "Home/index");
        }
    }

function SaveUserToDb($data){ //Register a Patient
    $PassHash = password_hash($data[2], PASSWORD_DEFAULT); //Hash the password
    $db = openDatabaseConnection();
    $sql = "INSERT INTO Doktoren (`FirstName`, `LastName`, `Password`) VALUES(:DFName, :DLName, :UPassword)";
    $query = $db->prepare($sql);
    $query->bindParam(':DFName', $data[0], PDO::PARAM_STR);
    $query->bindParam(':DLName', $data[1], PDO::PARAM_STR);
    $query->bindParam(':UPassword', $PassHash, PDO::PARAM_STR);
    $query->execute();

    $db = null;
    header('Location:' . URL .  'home/index');
}