<?php

require(ROOT . "model/StudentModel.php");
require(ROOT . "model/HospitalModel.php");


function index()
{

    if(URL_DOMAIN == BaseURL){
        render("Doctor/index");
    }else {
        render("home/index", array(
            "hospitals" => getAllHospitals()
        ));
    }
}
