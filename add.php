<?php
include 'db-conn.php'; 

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

$sql = "INSERT INTO SAGER (OPRETDATO, MEDARBEJDER, SAGSNAVN1, SAGSNAVN2, SAGSNAVN3, SAGSNAVN4, JOURNALPLAN, SAGSAFDELING, SAGSGRUPPE, UNDERNR, SAGSTYPE, SAGSID, KLASSIFIKATION, AFDELING, STATUS, SAGSANSVARLIG, ADRESSE)  VALUES (STR_TO_DATE('$opretdato', '%m/%d/%Y'), '$medarbejder', '$sagsnavn1', '$sagsnavn2', '$sagsnavn3', '$sagsnavn4', '$journalplan', '$sagsafdeling', '$sagsgruppe', '$undernr', '$sagstype', '$sagsid', '$klassifikation', '$afdeling', '$status', '$sagsansvarlig', '$adresse')";


$result = mysqli_query($conn, $sql);
header("Location: index.php");
					

			

/*echo "Your case has now been added";
echo "<br>";
echo "<a href='index.php'>Go to your front page</a>";*/
	
?>