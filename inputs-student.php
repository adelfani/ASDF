<?php
$voornaam = "";
if (!empty($student["voornaam"])) {
    $voornaam = $student ["voornaam"];
}
?>


<?php
$achternaam = "";
if (!empty($student["achternaam"])) {
    $achternaam = $student ["achternaam"];
}
?>


<?php
$postcode = "";
if (!empty($student["postcode"])) {
    $postcode = $student ["postcode"];
}
?>



<?php
$woonplaats = "";
if (!empty($student["woonplaats"])) {
    $woonplaats = $student ["woonplaats"];
}
?>



<?php
$huisnummer_toevoeging = "";
if (!empty($student["huisnummer_toevoeging"])) {
    $huisnummer_toevoeging = $student ["huisnummer_toevoeging"];
}
?>


<?php
$huisnummer = "";
if (!empty($student["huisnummer"])) {
    $huisnummer = $student ["huisnummer"];
}
?>


<?php
$straatnaam = "";
if (!empty($student["straatnaam"])) {
    $straatnaam = $student ["straatnaam"];
}
?>


<?php
$telefoonnummer = "";
if (!empty($student["telefoonnummer"])) {
    $telefoonnummer = $student ["telefoonnummer"];
}
?>

<?php
$email = "";
if (!empty($student["email"])) {
    $email = $student ["email"];
}
?>



<form>
    <input type="submit" value="submit">

    <label>Email</label>
    <input type="text" placeholder="email" name="email" value="<?php echo $email;?>">

    <label>telefoonnummer</label>
    <input type="text" placeholder="telefoonnummer" name="telefoonnummer" required value="<?php echo $telefoonnummer;?>">

    <label>straatnaam</label>
    <input type="text" placeholder="straatnaam" name="straatnaam" required value="<?php echo $straatnaam;?>">

    <label>huisnummer</label>
    <input type="text" placeholder="huisnummer" name="huisnummer" required  value="<?php echo $huisnummer;?>">

    <label>huisnummer_toevoeging</label>
    <input type="text" placeholder="huisnummer_toevoeging" name="huisnummer_toevoeging" value="<?php echo $huisnummer_toevoeging;?>">

    <label>woonplaats</label>
    <input type="text" placeholder="woonplaats" name="woonplaats" required value="<?php echo $woonplaats;?>">

    <label>postcode</label>
    <input type="text" placeholder="postcode" name="postcode" required value="<?php echo $postcode;?>">

    <label>voornaam</label>
    <input type="text" placeholder="voornaam" name="voornaam" required value="<?php echo $voornaam;?>">


    <label>achternaam</label>
    <input type="text" placeholder="achternaam" name="achternaam" required value="<?php echo $achternaam;?>">

</form>

