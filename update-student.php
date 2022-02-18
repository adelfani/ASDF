<?php
include "connectdb.php";

$voornaam = $_POST ['voornaam'];
$achternaam = $_POST['achternaam'];
$id = $_POST ['id'];
$email = $_POST ['email'];
$telefoonnummer = $_POST ['telefoonnummer'];
$straatnaam = $_POST ['straatnaam'];
$huisnummer = $_POST ['huisnummer'];
$huisnummer_toevoeging = $_POST ['huisnummer_toevoeging'];
$woonplaats = $_POST ['woonplaats'];
$postcode = $_POST ['postcode'];





//E-mail validation:

$regex = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/';
$email = (preg_match($regex, $email))?$email:die("Invalid email");
filter_var($email, FILTER_VALIDATE_EMAIL);


$sql ="UPDATE student SET voornaam = :voornaam, achternaam = :achternaam, email = :email, telefoonnummer = :telefoonnummer, straatnaam = :straatnaam, huisnummer = :huisnummer, huisnummer_toevoeging = :huisnummer_toevoeging, woonplaats = :woonplaats, postcode = :postcode WHERE id = :id";





$sth= $db->prepare($sql);
$sth->execute([
    ':voornaam'=> $voornaam,
    ':achternaam'=> $achternaam,
    ':id'=> $id,
    ':email'=> $email,
    ':telefoonnummer'=> $telefoonnummer,
    ':straatnaam'=> $straatnaam,
    ':huisnummer'=> $huisnummer,
    ':huisnummer_toevoeging'=> $huisnummer_toevoeging,
    ':woonplaats'=> $woonplaats,
    ':postcode'=> $postcode
]);

header("location:index.php");