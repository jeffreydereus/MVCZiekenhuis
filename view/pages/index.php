<h1>Voeg een ziekenhuis toe.</h1>

<div class="container">
    <form action="<?=URL?>Hospital/SaveHospitalToDB" method="post">
        <p>Naam: <input type="text" name="HospitalName"></p>
        <p>Locatie: <input type="text" name="HospitalLocation"></p>
        <p>Straat: <input type="text" name="HospitalStreet"></p>
        <p>Huisnummer: <input type="number" name="HospitalHouseNumber"></p>
        <p>Postcode: <input type="text" name="HospitalPostalCode"></p>
        <input type="submit" name="submit">
    </form>
</div>