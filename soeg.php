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
<title>Søg i sager</title>
</head>

<body>
<div class="container col-10 p-0 border">
<!--Main Navigation-->
	<nav class="nav border-bottom">
   <a class="nav-link" href="index.php"><img class="refresh img-fluid" alt="fics logo" src="img/FICS-logo.png"></a>
	  <a class="nav-link" href="opretsag.php">Moduler</a>
	  <a class="nav-link" href="soeg.php">Funktioner</a>
	</nav>
	
	<nav class="nav nav-pills nav-justified border-bottom">
	  <a class="nav-link soeg active" href="#">Søgning 1<img class="sletfane" src="img/sletfane.png" alt="luk fane"></a>
	  <a class="nav-link soeg" href="#">Søgning 2<img class="sletfane" src="img/sletfane.png" alt="luk fane"></a>
	  <a class="nav-link" href="#"><img class="addtab" src="img/plus.png" alt="tilføj søgning"></a>
	</nav>
	
	<!--Search-->
	<div class="container-fluid pt-4">
		<form>
	  <!--Row 1 -->
		  <div class="row">
			<div class="col">
			<div class="form-group row">
				<label class="col-3">Område</label>
				<div class="col-9">
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Medarbejder</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
					</div>
			</div>
			</div>
			
			 </div>
			
		<!--Row 2 -->
			<div class="row">
				<div class="col">
			<div class="form-group row">
				<label class="col-3">Journalnummer</label>
				<div class="col-9">
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Afdeling</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
					</div>
			</div>
			</div>
			</div>
			
		<!--Row 3 -->
			<div class="row">
				<div class="col">
			<div class="form-group row">
				<label class="col-3">Sagsid</label>
				<div class="col-9">
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Sagsnavn</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
					</div>
			</div>
			</div>
			</div>
			
		<!--Row 4 -->
			<div class="row">
				<div class="col">
			<div class="form-group row">
				<label class="col-3">Sagsnummer</label>
				<div class="col-9">
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Sagstype</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
					</div>
			</div>
			</div>
			</div>
			
		<!--Row 5 -->
			<div class="row">
				<div class="col">
			<div class="form-group row">
				<label class="col-3">Emneord</label>
				<div class="col-9">
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
						  <label class="form-check-label pl-1" for="inlineCheckbox1">Bilagstekst</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
						  <label class="form-check-label pl-1" for="inlineCheckbox2">Dokumenter</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
						  <label class="form-check-label pl-1" for="inlineCheckbox3">Sager</label>
						</div>
			</div>
			
			</div>
				
		<!--Row 6 -->
				<div class="row">			
				<div class="col">
			 	<div class="row">
				<a class="col-12" href="#">Flere søgemuligheder<img class="pil" src="img/pil.png" alt="fleresøgemuligheder"></a>
					
			</div>
			</div>
		 </div>
			<div class="form-group row pt-3 pb-2">
				<div class="offset-md-9 pl-5">
					<input class="btn btn-secondary" type="reset" value="Ryd">
					<button type="submit" class="btn btn-primary pl-5 pr-5 ml-1">Søg</button>
				</div>
		  </div>
		   
			</div>
			
			</div>
	
	</div>
</body>
</html>