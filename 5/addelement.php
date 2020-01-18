<?php 
	$koneksi = new mysqli ('localhost','root','','pokedumb');

	if (mysqli_connect_errno()) {
  	echo "Koneksi Database Gagal";
  	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Add Pokemon</title>

 </head>
 <body>

 <style type="text/css">
 	body{
 		padding: 0;
 		margin: 0;
 		font-family: sans-serif;
 	}
 	.container {
 		width: 80%;
 		height: 300px;
 		margin: 50px auto;
 	}
 	 form{
 		width: 50%;
 		height: 300px;
 		margin:auto;
 		border:1px solid;
 	}
 	.form-group {
 		display: block;
 		width: 100%;
 		height: 50px;
 		margin:10px;
 	}
 	.form-label{
 		display: block;
 		margin:5px;
 	}
 	.form-input {
 		display: block;
 		width: 60%;
 		padding: 5px;
 		margin:10px;
 		border-radius: 6px;
 	}

 	.bg-blue{
 		background-color: blue;
 		padding: 6px;
 		margin: 10px;
 		color: #fff;
 	}

 </style>

	 <div class="container">
	 	<center><h1>Add Element</h1></center>
		 	<form method="post" enctype="multipart/form-data" action="proses.php">

		 		<div class="form-group">
		 			<label class="form-label">Nama Element</label>
		 			<input type="text" name="name" class="form-input">
		 		</div>
		 		
		 		<div class="form-group">
		 			<label class="form-label">Nama Pokemon</label>
		 			
		 			<select name="pokemon" class="form-input">
		 				<?php $ambil= $koneksi->query("SELECT * FROM pokemon_tb");
		 				  while($pecah = $ambil->fetch_assoc()){

		 			 	 ?>
		 				<option value="<?php echo $pecah['id']; ?>"><?php echo $pecah['name']; ?></option>
		 				<?php } ?>
		 			</select>
		 			
		 		</div>
	

		 		<div class="form-group">
		 			<input type="submit" name="submit" value="SUBMIT" class="bg-blue">	
		 		</div>
		 		
		 	</form>

	 </div>
 
 </body>
 </html>