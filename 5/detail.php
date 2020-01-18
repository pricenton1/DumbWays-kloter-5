<?php 
	$koneksi = new mysqli ('localhost','root','','pokedumb');

	if (mysqli_connect_errno()) {
  	echo "Koneksi Database Gagal";
  	}

  	$id = $_GET['id'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>POKEMON</title>
</head>


<style type="text/css">
	section.nav {
		width: 100%;
		height: 80px;
	}
	.nav h1 {
		float: left;
		margin: 10px;
	}
	.nav a{
		position: relative;
		top: 18px;
		left: 20px;
		text-decoration: none;
		font-family: sans-serif;
		font-size: 14px;
		background-color: skyblue;
		padding: 5px;
		border-radius: 5px;
		color: #fff;
	}
	.nav a:hover{
		position: relative;
		top: 18px;
		left: 20px;
		text-decoration: none;
		font-family: sans-serif;
		font-size: 14px;
		background-color: skyblue;
		padding: 5px;
		border-radius: 5px;
		color: #000;
	}
	.container{
		display: inline-block;
		margin: 10px;
		text-align: center;
		text-transform: uppercase;
	}
	.element{
		height: 100px;
		
		text-align: center;
		border-radius: 5px;
		text-transform: uppercase;
	}
	.element a {
		text-decoration: none;
		background-color: skyblue;
		padding: 5px;
		border-radius: 5px;
		color: #fff;
	}
	.element a:hover {
		text-decoration: none;
		background-color: skyblue;
		padding: 5px;
		border-radius: 5px;
		color: #000;
	}

</style>

<body>

	<section class="nav">
		<h1> Detail PokeDumb Find</h1>
		<div class="button">
			<a href="index.php">Back</a>
			
		</div>
	</section>

	<?php 
		$ambil = $koneksi->query("SELECT * FROM pokemon_tb pk JOIN poke_element pe ON pk.id=pe.pokemon_id WHERE pe.id = '$id'");
		$pecah = $ambil->fetch_assoc();

	 ?>

		<div class="container">
			<img src="image/<?php echo $pecah['photo']; ?>" width="150">
			<p>NAME : <?php echo $pecah['name'] ?></p>
				<div class="element">
	
	 				<p>ELEMENT :<?php echo $pecah['element_name']; ?></p>
	 				<p>STR :<?php echo $pecah['str']; ?></p>
	 				<p>DEF :<?php echo $pecah['def']; ?></p>

				</div>

	
		</div>

	

</body>
</html>