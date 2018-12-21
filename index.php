<!doctype html>
<html>
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
<div class="container col-10 p-0 border">
<!--Main Navigation-->
	<nav class="nav border-bottom">
	  <a class="nav-link" href="opretsag.php">Ny</a>
	  <a class="nav-link" href="soeg.php">Søg</a>
	  <a class="nav-link" href="#"><img class="refresh img-fluid" src="img/refresh.png" alt="refresh icon"</a>
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
 			
  			<a class="nav-link sidemenu active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Mine</a>
  
		  	<a class="nav-link sidemenu" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Seneste søgning</a>
		  
		  	<a class="nav-link sidemenu" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mine favoritter</a>
		</div>

<!--Content for side menu-->
	<!--<div class="tab-content" id="v-pills-tabContent">
		  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">blblbla</div>

		  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">lålålå</div>

		  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">hej</div>
	</div>	-->
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
	<div class="div-box">			
		<?php		
			$conn = mysqli_connect('localhost', 'root', 'root', 'poc-fics');
			if (!$conn) {
				die('Connection failed: '. mysqli_connect_error());
				}

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

			$conn->close();
		?>
	</div>
	
<!--Sager-->	
	<div class="clearfix pl-3 pr-3 pt-1 pb-1 border-bottom border-top">
		<p class="float-left m-0">Sager</p>
		<img class="float-right vindue" src="img/vindue.png" alt="vindue">
	</div>
	<div class="div-box"></div>
	
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
	<div class="div-box"></div>
	
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
	<div class="div-box"></div>
	
	</div>	
		
	</div>
	
	</div>

</body>
</html>