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
<!--Main Navigation-->
	<nav class="nav">
	  <a class="nav-link" href="opretsag.php">Ny</a>
	  <a class="nav-link" href="soeg.php">Søg</a>
	  <a class="nav-link" href="#"><img class="refresh img-fluid" src="img/refresh.png" alt="refresh icon"</a>
	  <a class="nav-link" href="#">Moduler</a>
	  <a class="nav-link" href="#">Funktioner</a>
	  <a class="nav-link" href="#">Vis</a>
	  <a class="nav-link" href="#">Hjælp</a>
	</nav>
	
<!--Side navigation-->
<div class="row">
	<div class="col-2">
		<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   				 <p class="">Portal</p>
 			
  			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Mine</a>
  
		  	<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Seneste søgning</a>
		  
		  	<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mine favoritter</a>
		</div>

<!--Content for side menu-->
	<div class="tab-content" id="v-pills-tabContent">
		  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">blblbla</div>

		  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">lålålå</div>

		  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">hej</div>
	</div>
		
		</div>
		
			
			
<!--Secondary Navigation-->	
<div class="col-10">
	<nav class="nav nav-pills nav-justified">
	  <a class="nav-link active" href="#">Opgaver</a>
	  <a class="nav-link box" href="#">Sager</a>
	  <a class="nav-link box" href="#">Dokumenter</a>
	  <a class="nav-link box" href="#">Kontakter</a>
	</nav>
</div>
	</div>

</body>
</html>