<?php
/** 
	$num_char merupakan jumlah karakter vertikal dan horizontal
	untuk kerapian isikan nilai genap misal 10 atau 20 
*/
$num_char 	 = 8; 
// onehalf_var nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap
$onehalf 	 = ceil($num_char / 3);
$twohalf     = 6;

$char1 		 = '+';
$char2 		 = '=';

echo '<div style="font:bold 16px courier new; line-height:10px;letter-spacing:10px;">';
// loop baris
for ($row = 1; $row <= $num_char; $row++)
{
	// loop kolom
	for ($col = 1; $col <= $num_char; $col++)
	{
		if($col == $onehalf){
			echo "*";
		}
		elseif ($col == $twohalf) {
			echo "*";
		}
		elseif ($row == 1) {
			echo "*";
		}
		elseif ($row == 8) {
			echo "*";
		}
		else{
			echo "=";
		}	

	}
	
	echo '<br/>';
}
echo '</div>';
?>