<?php
require(ROOT . "model/DoctorModel.php");

    function login(){
        $data = array($_POST["UName"], $_POST["Upass"]);
        LoginDoc($data);
    }

    function Register(){
        render("Doctor/Register");
    }

    function RegisterToDB(){
        $data = array($_POST["DFName"], $_POST["DLName"], $_POST["DPassword"]);
        SaveUserToDb($data);
    }

    function ingelogd(){
        render("Doctor/ingelogd");
    }