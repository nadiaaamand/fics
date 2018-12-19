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
<title>Opret sag</title>
</head>

<body>

<div class="container col-10 p-0 border">
<!--Main Navigation-->
	<nav class="nav border-bottom">
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
		<form>
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
					<input type="text" class="form-control" name="journalplan">
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
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Sagsid</label>
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
				<label class="col-3">Sagsgruppe</label>
				<div class="col-9">
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Opr. dato</label>
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
				<label class="col-3">Undernr.</label>
				<div class="col-9">
				<input type="text" class="form-control" name="journalplan">
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
					<input type="text" class="form-control" name="journalplan">
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
				  <input class="form-check-input" type="checkbox" id="gridCheck">
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
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Sagsnavn 3</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
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
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Sagsnavn 4</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
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
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Sagsafdeling</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
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
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Status</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
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
				<input type="text" class="form-control" name="journalplan">
				</div>
			</div>
			</div>
			
			<div class="col">
			 	 <div class="form-group row">
					<label class="col-3">Adresse</label>
					<div class="col-9">
					<input type="text" class="form-control" name="journalplan">
					</div>
			</div>
			</div>
		 </div>
			<div class="form-group row pt-3">
				<div class="offset-md-10">
			  		<button class="btn btn-secondary">Ryd</button>
			  		<button type="submit" class="btn btn-primary">Opret sag</button>
				</div>
		  </div>
		   
		 
		</form>
	</div>
	
		</div>
</body>
</html>