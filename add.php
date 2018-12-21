<?php
require_once 'db-conn.php'; 

$journalplan = $_POST['journalplan'];
$sagstype = $_POST['sagstype'];
$sagsid = $_POST['sagsid'];
$sagsgruppe = $_POST['sagsgruppe'];
$opretdato = $_POST['opretdato'];
$undernr = $_POST['undernr'];
$klassifikation = $_POST['klassifikation'];
$sagsnavn1 = $_POST['sagsnavn1'];
$sagsnavn2 = $_POST['sagsnavn2'];
$sagsnavn3 = $_POST['sagsnavn3'];
$sagsnavn4 = $_POST['sagsnavn4'];
$medarbejder = $_POST['medarbejder'];
$sagsafdeling = $_POST['sagsafdeling'];
$afdeling = $_POST['afdeling'];
$status = $_POST['status'];
$sagsansvarlig = $_POST['sagsansvarlig'];
$adresse = $_POST['adresse'];


$sql = "INSERT INTO SAGER (JOURNALPLAN, SAGSTYPE, SAGSID, SAGSGRUPPE, UNDERNR, KLASSIFIKATION, SAGSNAVN1, SAGSNAVN2, SAGSNAVN3, SAGSNAVN4, MEDARBEJDER, SAGSAFDELING, AFDELING, STATUS, SAGSANSVARLIG, ADRESSE) VALUES ('$journalplan', '$sagstype', '$sagsid', '$sagsgruppe', '$undernr', '$klassifikation', '$sagsnavn1', '$sagsnavn2', '$sagsnavn3', '$sagsnavn4', '$medarbejder', '$sagsafdeling', '$afdeling', '$status', '$sagsansvarlig', '$adresse');";

$result = mysqli_query($conn, $sql);
	
?>