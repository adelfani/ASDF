<?php

include "connectdb.php";

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$email = $_POST ['email'];
$telefoonnummer = $_POST['telefoonnummer'];
$straatnaam = $_POST['straatnaam'];
$huisnummer = $_POST['huisnummer'];
$huisnummer_toevoeging = $_POST['huisnummer_toevoeging'];
$woonplaats = $_POST['woonplaats'];
$postcode = $_POST['postcode'];


//dit is voor een geldig postcode//

function PostcodeCheck($postcode)
{
    $remove = str_replace(" ", "", $postcode);
    $upper = strtoupper($remove);

    if (preg_match("/^\W*[1-9]{1}[0-9]{3}\W*[a-zA-Z]{2}\W*$/", $upper)) {
        return $upper;
    } else {
        return false;
    }
}


if (PostcodeCheck($postcode) !== false) {
    echo "Geldige postcode: " . PostcodeCheck($postcode);
} else {
    echo "Ongeldige postcode.";
}



//E-mail validation:
$regex = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/';
$email = (preg_match($regex, $email))?$email:die("Invalid email");
filter_var($email, FILTER_VALIDATE_EMAIL);









$sql= "INSERT INTO  student (voornaam, achternaam, email, telefoonnummer, straatnaam, huisnummer, huisnummer_toevoeging, woonplaats, postcode) VALUE(?,?,?,?,?,?,?,?,?)";
$sth= $db->prepare($sql);
$sth->execute([$voornaam, $achternaam, $email, $telefoonnummer, $straatnaam, $huisnummer, $huisnummer_toevoeging, $woonplaats, $postcode]);

header("location: index.php");
