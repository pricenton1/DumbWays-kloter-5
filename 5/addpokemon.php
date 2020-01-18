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
	 	<center><h1>Add Pokemon</h1></center>
		 	<form method="post" enctype="multipart/form-data">

		 		<div class="form-group">
		 			<label class="form-label">Nama Pokemon</label>
		 			<input type="text" name="name" class="form-input">
		 		</div>
		 		
		 		<div class="form-group">
		 			<label class="form-label">STR</label>
		 			<input type="number" name="str" class="form-input">
		 		</div>

		 		<div class="form-group">
		 			<label class="form-label">DEF</label>
		 			<input type="number" name="def" class="form-input">
		 		</div>

		 		<div class="form-group">
		 			<label class="form-label">Photo</label>
		 			<input type="file" name="photo" class="form-input">
		 		</div>

		 		<div class="form-group">
		 			<input type="submit" name="submit" value="SUBMIT" class="bg-blue">	
		 		</div>
		 		
		 	</form>


		 	<?php 
						if(isset($_POST['submit'])){
							$nama = $_FILES['photo']['name'];
							$lokasi = $_FILES['photo']['tmp_name'];
							move_uploaded_file($lokasi, "./image/".$nama);
							$koneksi->query("INSERT INTO pokemon_tb(name,str,def,photo) VALUES('$_POST[name]','$_POST[str]','$_POST[def]','$nama')");

							echo "<div class='alert alert-info'>Data Tersimpan</div>";
							echo "<meta http-equiv='refresh' content='1;url=5.php'>";
						}
			?>
	 </div>
 
 </body>
 </html>