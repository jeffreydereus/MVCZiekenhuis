<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 5/29/2018
 * Time: 8:49 AM
 */
var_dump($PData);
?>
<h1>Uw afspraken:</h1>



<h1>Maak hier een afspraak.</h1>
<H2>Uw naam: <?=$PData[0]['UFullName']?></H2>

<form method="post" action="<?=URL?>#">

    <input type="submit" name="submit">
</form>