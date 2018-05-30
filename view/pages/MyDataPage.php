<h1>Uw Gegevens.</h1>

<?php

foreach ($PData as $item => $value){
    echo "<h2>" . $value["UFullName"] . "</h2>";
    echo "<p>" . $value["UBirth"] . "</p>";
    echo "<p>" . $value["UCity"] . "</p>";
    echo "<p>" . $value["UStreet"] . "</p>";
    echo "<p>" . $value["UPostalCode"] . "</p>";
}

?>

<h5>Klopt er iets niet? Neem dan contact op via (+31)0183-112233</h5>
