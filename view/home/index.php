
<div class="container">
    <?php

    foreach($hospitals as $item => $value){
        echo "<h1>".$value["Name"]."</h1>";
        echo "<h2>Locatie: " . $value["City"] . "</h2>";
        echo "<p>Straat: " . $value["Street"] . "</p>";
        echo "<p>Huisnummer: " . $value["House_Number"] . "</p>";
        echo "<p>Postcode: " . $value["Postal_Code"] . "</p>";
    }
    ?>
</div>
