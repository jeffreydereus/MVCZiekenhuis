<?php

require(ROOT . "model/LoginModel.php");


 function Register(){
     render("pages/Inlog/Register");
 }

 function RegisterToDB(){
     $data = array($_POST["PName"], $_POST["UName"], $_POST["PBirth"],$_POST["PCity"],$_POST["PStreet"],$_POST["PPostalCode"], $_POST["PPassword"]);
         SaveUserToDb($data);
 }

 function Login(){
     render("pages/Inlog/Login");
 }

 function LoginSession(){
    $data = array($_POST['UName'], $_POST['Upass']);
    LoginSessionCreate($data);
 }

 function ingelogd(){
     render("pages/Inlog/ingelogd");
 }

function Logout(){
     session_start();
    destroysession();
}


