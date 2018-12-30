<!doctype html>
<html lang="da">
<head>
<!--Bootstrap CSS-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!--Main SCSS-->
<link rel="stylesheet" href="scss/main.css">
 
<!--Bootstrap JS-->
<script src="bootstrap/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<title>FICS Portal</title>
</head>

<body>
<div class="container col-10 p-0 border background">
<!--Main Navigation-->
	<nav class="nav border-bottom">
	  <a class="nav-link" href="index.php"><img class="refresh img-fluid" alt="fics logo" src="img/FICS-logo.png"></a>
	  <a class="nav-link" href="opretsag.php">Ny</a>
	  <a class="nav-link" href="soeg.php">Søg</a>
	  <a class="nav-link" href="#"><img class="refresh img-fluid" src="img/refresh.png" alt="refresh icon"></a>
	  <a class="nav-link" href="#">Moduler</a>
	  <a class="nav-link" href="#">Funktioner</a>
	  <a class="nav-link" href="#">Vis</a>
	  <a class="nav-link" href="#">Hjælp</a>
	</nav>
	
<div class="row">
<!--Side navigation-->
	<div class="col-2 pr-0 border-right">
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   			<p class="portal">Portalmenu</p>
   			<p class="opgaver">Opgaver</p>
 			
  			<a class="nav-link sidemenu active" href="#" role="tab" >Mine</a>
  
		  	<a class="nav-link sidemenu" href="#" role="tab">Seneste søgning</a>
		  
		  	<a class="nav-link sidemenu" href="#" role="tab">Mine favoritter</a>
		</div>

		</div>
							
<!--Secondary Navigation-->	
<div class="col-10 pl-0">
	<nav class="nav nav-pills nav-justified border-bottom">
	  <a class="nav-link active" href="#">Opgaver</a>
	  <a class="nav-link box" href="#">Sager</a>
	  <a class="nav-link box" href="#">Dokumenter</a>
	  <a class="nav-link box" href="#">Kontakter</a>
	</nav>
	
<!--Mine opgaver-->	
	<div class="clearfix pl-3 pr-3 pt-1 pb-1 border-bottom">
		<p class="float-left m-0">Mine opgaver</p>
		<img class="float-right vindue" src="img/vindue.png" alt="vindue">
	</div>
	<div class="div-box opgave">			
	<?php		
		require_once 'db-conn.php'; 

		$sql = "SELECT * FROM EGNE_OPGAVER";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table>
			<tr>
			<th>*</th>
			<th>Godkendt</th>
			<th>Type</th>
			<th>Medarbejder</th>
			<th>Aktivitetsdato</th>
			<th>Forventet retur</th>
			<th>Emne</th>
			<th>Beskrivelse</th>
			</tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>" . 
					"<td>" . $row["ID"]. "</td>" .
					"<td><input type ='checkbox'>" ."</td>" .
					"<td>" . $row["TYPE"]. "</td>" .
					"<td>" . $row["MEDARBEJDER"]. " </td>" .
					"<td>" . $row["AKVTIVITETSDATO"]. "</td>".
					"<td>" . $row["FORVENTET_RETUR"]. "</td>".
					"<td>" . $row["EMNE"]. "</td>".
					"<td>" . $row["BESKRIVELSE"]. "</td>".
					"</tr>";
			}
			echo "</table>";

			} else {
			echo "0 results";
		}
	?>
	</div>
	
<!--Sager-->	
	<div class="clearfix pl-3 pr-3 pt-1 pb-1 border-bottom border-top">
		<p class="float-left m-0">Sager</p>
		<img class="float-right vindue" src="img/vindue.png" alt="vindue">
	</div>
	<div class="div-box">
		<?php		
		require_once 'db-conn.php'; 

		$sql = "SELECT * FROM SAGER";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table>
			<tr>
			<th>*</th>
			<th>Afslut dato</th>
			<th>Medarbejder</th>
			<th>Opr. dato</th>
			<th>Sagsnavn 1</th>
			</tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>" . 
					"<td>" . $row["ID"]. "</td>" .
					"<td>" . $row["AFSLUTDATO"]. "</td>" .
					"<td>" . $row["MEDARBEJDER"]. " </td>" .
					"<td>" . $row["OPRETDATO"]. "</td>".
					"<td>" . $row["SAGSNAVN1"]. "</td>".
					"</tr>";
			}
			echo "</table>";

			} else {
			echo "0 results";
		}
	?>
	</div>
	
<!--Dokumenter-->	
		<div class="border-bottom border-top">
		<div class="row col-12">
			<nav class="nav nav-pills nav-justified float">
			  <a class="nav-link minus active" href="#">Dokumenter</a>
			  <a class="nav-link minus" href="#">Opgaver</a>
			  <a class="nav-link minus" href="#">Sagsparter</a>
			</nav>	
			 <img class="float-vindue vindue mt-1" src="img/vindue.png" alt="vindue">
			</div>
	</div>
	<div class="row">
	<div class="col-2 div-box border-right"></div>
	<div class="col-10 div-box pl-0">
		<table>
			<tr>
			<th>*</th>
			<th>Dato</th>
			<th>Type</th>
			<th>Titel</th>
			<th>Medarbejder</th>
			<th>Navn</th>
			<th>Postliste</th>
			<th>Brevtype</th>
			</tr>
		</table>
		<p class="datanone">Ingen data at vise</p>
	</div>
	</div>
	
<!--Bilag-->	
		<div class="border-bottom border-top">
		<div class="row col-12">
			<nav class="nav nav-pills nav-justified float">
			  <a class="nav-link minus" href="#">Bilag</a>
			  <a class="nav-link minus" href="#">Kopimodtagere</a>
			  <a class="nav-link minus active" href="#">Notatark</a>
			</nav>	
			 <img class="float-vindue vindue mt-1" src="img/vindue.png" alt="vindue">
			</div>
	</div>

	<div class="row">
	<div class="col-2 div-box border-right"></div>
	<div class="col-10 div-box pl-0">
	<table>
			<tr>
			<th>*</th>
			<th>Typetekst</th>
			<th>Notatdato</th>
			<th>Ativitetsdato</th>
			<th>Medarbejder</th>
			<th>Titel</th>
			<th>Godkendt</th>
			<th>Brevtype</th>
			</tr>
		</table>
		<p class="datanone">Ingen data at vise</p>
	</div>	
		</div>
	</div>
	
	</div>
	</div>
</body>
</html>