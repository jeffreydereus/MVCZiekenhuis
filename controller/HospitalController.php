<?php

require(ROOT . "model/HospitalModel.php");
require(ROOT . "model/LoginModel.php");

    function CreateHospitalPage(){
            render("pages/index");
    }

    function SaveHospitalToDB(){
        $Data = array($_POST["HospitalName"], $_POST["HospitalLocation"], $_POST["HospitalStreet"], $_POST["HospitalHouseNumber"], $_POST["HospitalPostalCode"]);
        addHospitalToDB($Data);
    }

    function MyData($param1){
        render("pages/MydataPage", array(
           'PData' => GetPatientData($param1)
        ));
    }

