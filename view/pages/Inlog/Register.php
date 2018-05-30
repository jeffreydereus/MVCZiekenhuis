<h1>Registreer</h1>

<form method="post" action="<?=URL?>Login/RegisterToDB">
    <p>Naam: <input type="text" name="PName"></p>
    <p>Gebruikersnaam: <input type="text" name="UName"></p>
    <p>Geboortedatum: <input type="date" name="PBirth"></p>
    <p>Woonplaats: <input type="text" name="PCity"></p>
    <p>Straat & huisnummer: <input type="text" name="PStreet"></p>
    <p>Postcode: <input type="text" name="PPostalCode"></p>
    <p>Wachtwoord: <input type="password" name="PPassword"> </p>
    <input type="submit" name="submit">
</form>