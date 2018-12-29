<!doctype html>
<html>
<head>
<!--Bootstrap CSS-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<!--Gijgo CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<!--Main SCSS-->
<link rel="stylesheet" href="scss/main.css">

<!--Bootstrap JS-->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!--Gijgo JS-->
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>

<meta charset="UTF-8">
<title>Opret sag</title>
</head>

<body>

<div class="container col-10 p-0 border">
<!--Main Navigation-->
	<nav class="nav border-bottom">
   <a class="nav-link" href="index.php"><img class="refresh img-fluid" alt="fics logo" src="img/FICS-logo.png"></a>
	  <a class="nav-link" href="opretsag.php">Værktøjslinje</a>
	  <a class="nav-link" href="soeg.php">Skabeloner</a>
	  <a class="nav-link" href="#">Hjælp</a>
	</nav>
	
	<nav class="nav nav-pills nav-justified border-bottom">
	  <a class="nav-link active" href="#">Sagsdata</a>
	  <a class="nav-link box" href="#">Emneord</a>
	  <a class="nav-link box" href="#">Ejendom</a>
	  <a class="nav-link box" href="#">Bemærkning</a>
	</nav>
	
	<div class="container-fluid pt-4">
		<form class="nysag" action="add.php" enctype="multipart/form-data" method="POST">
	  <!--Row 1 -->
		  <div class="row">
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Journalplan</label>
					<div class="col-9">
						<input type="text" class="form-control" name="journalplan">
					</div>
				</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Sagstype</label>
					<div class="col-9">
						<input type="text" class="form-control" name="sagstype">
					</div>
				</div>
			</div>
		</div>
			
			<!--Row 2 -->
		<div class="row">
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Stikord</label>
					<div class="col-9">
						<input type="text" class="form-control" name="stikord">
					</div>
				</div>
			</div>
			
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Sagsid</label>
					<div class="col-9">
						<input type="number" class="form-control" name="sagsid">
					</div>
				</div>
			</div>
		 </div>
		 
		 <!--Row 3 -->
		<div class="row">
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Sagsgruppe</label>
					<div class="col-9">
						<input type="text" class="form-control" name="sagsgruppe">
					</div>
				</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Opr. dato</label>
					<div class="col-9">
						<input id="datepicker" name="opretdato"/>
					</div>
				</div>
			</div>
		 </div>
		 
		 <!--Row 4 -->
			<div class="row">
				<div class="col">
					<div class="form-group row">
						<label class="col-3">Undernr.</label>
						<div class="col-9">
						<input type="number" class="form-control" name="undernr">
					  		<div class="form-check pt-2">
							  <input class="form-check-input" type="checkbox" id="gridCheck">
								  <label class="form-check-label" for="gridCheck">
									Advar ved undernr. på gruppen
								  </label>
							</div>
						</div>
					</div>
				</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Klassifikation</label>
					<div class="col-9">
					<input type="text" class="form-control" name="klassifikation">
					</div>
			</div>
			</div>
		 </div>
		 
		 <!--Row 5 -->
		<div class="row">			
			<div class="col">
			 	 <div class="form-group row offset-md-6">
					<label class="col-3">Tilføjelse</label>
					<div class="col-9">
						<div class="form-check">
					  	<input class="form-check-input" type="checkbox" id="gridCheck" name="workflow">
						  <label class="form-check-label" for="gridCheck">
							Workflow
						  </label>
						</div>
					</div>
				</div>
			</div>
		 </div>
		 
		 <!--Row 6 - Sagssavne -->
		<div class="row pt-4">
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Sagsnavn 1</label>
					<div class="col-9">
						<input type="text" class="form-control" name="sagsnavn1">
					</div>
				</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Sagsnavn 3</label>
					<div class="col-9">
					<input type="text" class="form-control" name="sagsnavn3">
					</div>
			</div>
			</div>
		 </div>
		 
		 <!--Row 7 - Sagssavne -->
		<div class="row">
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Sagsnavn 2</label>
					<div class="col-9">
						<input type="text" class="form-control" name="sagsnavn2">
					</div>
				</div>
			</div>
			
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Sagsnavn 4</label>
					<div class="col-9">
						<input type="text" class="form-control" name="sagsnavn4">
					</div>
				</div>
			</div>
		 </div>
		 
		 <!--Row 8 generel info -->
		<div class="row pt-5">
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Medarbejder</label>
					<div class="col-9">
						<input type="text" class="form-control" name="medarbejder">
					</div>
				</div>
			</div>
			
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Sagsafdeling</label>
					<div class="col-9">
						<input type="text" class="form-control" name="sagsafdeling">
					</div>
				</div>
			</div>
		 </div>
		 
		 <!--Row 9 generel info -->
		<div class="row">
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Afdeling</label>
					<div class="col-9">
						<input type="text" class="form-control" name="afdeling">
					</div>
				</div>
			</div>
			
			<div class="col">
				<div class="form-group row">
					<label class="col-3">Status</label>
					<div class="col-9">
						<input type="text" class="form-control" name="status">
					</div>
				</div>
			</div>
		 </div>
		 
		 <!--Row 10 generel info -->
		<div class="row">
				<div class="col">
				<div class="form-group row">
					<label class="col-3">Sagsansvarlig</label>
					<div class="col-9">
						<input type="text" class="form-control" name="sagsansvarlig">
					</div>
				</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Adresse</label>
					<div class="col-9">
						<input type="text" class="form-control" name="adresse">
					</div>
				</div>
			</div>
		</div>
			
			<div class="form-group row pt-3">
				<div class="offset-md-10">
					<input class="btn btn-secondary" type="reset" value="Ryd">
			  		<button type="submit" class="btn btn-primary">Opret sag</button>
				</div>
		 	</div>
		</form>
	</div>
</div>
		
		
<!---JS for datepicker-->
<script>
$('#datepicker').datepicker({
uiLibrary: 'bootstrap4',
});
</script>
</body>
</html>