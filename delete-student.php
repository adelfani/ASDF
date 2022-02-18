<?php

include "connectdb.php";


$id=$_GET['id'];


$sql= "DELETE FROM student WHERE id = :id";

$sth= $db->prepare($sql);

$sth->execute(
    [':id' => $id]
);









header("location: index.php");