<?php 
	$koneksi = new mysqli ('localhost','root','','pokedumb');

	if (mysqli_connect_errno()) {
  	echo "Koneksi Database Gagal";
  	}

  	$element = $_POST['name'];
  	$pokemon = $_POST['pokemon'];

  	$ambil = $koneksi->query("SELECT * FROM pokemon_tb WHERE id = '$pokemon'");
    while($pecah = $ambil->fetch_assoc()){
        $id = $pecah['id']; 
        $nama = $pecah['name'];
        $str = $pecah['str'];
        $def = $pecah['def'];
        $photo = $pecah['photo'];
    }

    $koneksi->query("INSERT INTO element_tb(name) VALUES ('$element')");

    $koneksi->query("INSERT INTO poke_element(pokemon_id,element_name) VALUES ('$id','$element')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=5.php'>";

 ?>