<?php

require(ROOT . "model/AppointmentModel.php");
require(ROOT . "model/LoginModel.php");

function CreateAppointment(){
    session_start();
    $Name = $_SESSION['PName'];
    render("pages/Appointment", array(
        'PData' => GetPatientData($Name)
    ));
}