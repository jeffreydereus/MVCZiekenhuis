<?php

function SaveUserToDb($data){ //Register a Patient
    $PassHash = password_hash($data[6], PASSWORD_DEFAULT); //Hash the password
    $db = openDatabaseConnection();
    $sql = "INSERT INTO Users (`UFullName`, `UserName`, `UBirth`, `UCity`, `UStreet`, `UPostalCode`, `UPassword`) VALUES(:UFullName, :UserName, :UBirth, :UCity, :UStreet, :UPostalCode, :UPassword)";
    $query = $db->prepare($sql);
    $query->bindParam(':UFullName', $data[0], PDO::PARAM_STR);
    $query->bindParam(':UserName', $data[1], PDO::PARAM_STR);
    $query->bindParam(':UBirth', $data[2], PDO::PARAM_STR);
    $query->bindParam(':UCity', $data[3], PDO::PARAM_STR);
    $query->bindParam(':UStreet', $data[4], PDO::PARAM_STR);
    $query->bindParam(':UPostalCode', $data[5], PDO::PARAM_STR);
    $query->bindParam(':UPassword', $PassHash, PDO::PARAM_STR);
    $query->execute();

    $db = null;
    header('Location:' . URL .  'home/index');
}

function LoginSessionCreate($data){ //Login a user
    $db = openDatabaseConnection();
    $sql = "SELECT UserName, Upassword FROM Users WHERE UserName = :Uname";
    $query = $db->prepare($sql);
    $query->bindParam(":Uname", $data[0], PDO::PARAM_STR);
    $query->execute();
    $db = null;

    $fetch = $query->fetchAll();
    if (password_verify($data[1], $fetch[0]['Upassword'])){ //Verify a password
        session_start();
        $_SESSION["type"] = 'patient';
        $_SESSION["PName"] = $data[0];
        header('Location:' . URL . "Login/ingelogd/");
    } else {
        header('Location:' . URL . "Home/index");
    }
}

function GetPatientData($Name){
    session_start();
    $db = openDatabaseConnection();
    $sql = "SELECT `UFullName`, `UBirth`, `UCity`, `UStreet`, `UPostalCode` FROM Users WHERE UserName = :Uname";
    $query = $db->prepare($sql);
    $query->bindParam(":Uname", $Name, PDO::PARAM_STR);
    $query->execute();
    $db = null;
    return $query->fetchAll();

}

function destroysession(){ //destroy login session
    session_start();
    session_unset();
    session_destroy();
    header('Location:' . URL . "Home/index");
}