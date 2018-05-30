    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php

    if (URL_DOMAIN == BaseURL) {
        echo '<title>Worktool</title>';
    } else {
        echo '<title>Ziekenhuis web</title>';
    }
    ?>
	<link rel="stylesheet" href="<?= URL ?>css/style.css">
</head>
<body>
<?php
session_start();

?>
<aside>
	<nav>
        <ul>
            <?php

            if ($_SESSION['type'] === 'patient') {
                echo '<a href=' . URL . 'Home/index><li>Home</li></a>';
                echo '<a href=' . URL . 'Hospital/CreateHospitalPage><li>Voeg ziekenhuis toe</li></a>';
                echo '<a href=' . URL . 'Hospital/MyData/' . $_SESSION["PName"] .'><li>Mijn gegevens</li></a>';
                echo '<a href=' . URL . 'Appointment/CreateAppointment><li>Maak een afspraak</li></a>';
                echo '<a href=' . URL . 'Login/Logout><li>Log uit</li></a>';
            } elseif ($_SESSION['type'] === 'Doctor'){
                echo '<a href=' . URL . 'Login/Logout><li>Log uit</li></a>';
            } elseif (URL_DOMAIN == BaseURL){
                echo '';
            } else {
                echo '<a href=' . URL . 'Home/index><li>Home</li></a>';
                echo '<a href=' . URL . 'Login/Login><li>Login</li></a>';
                echo '<a href=' . URL . 'Login/Register><li>Registreer</li></a>';
                echo '<a href=' . URL . 'Hospital/CreateHospitalPage><li>Voeg ziekenhuis toe</li></a>';
            }
            ?>

        </ul>
	</nav>
</aside>
