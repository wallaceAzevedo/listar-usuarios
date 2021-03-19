<?php 
$cont = 2;
while($cont < 10000){
	echo "INSERT INTO usuarios (nome, email) VALUES
	('wallace$cont', 'wallace$cont@gmail.com'),
	('pedro$cont', 'pedro$cont@hotmail.com'),
	('jessica$cont', 'jessica$cont@hotmail.com'); <br>";

	$cont = $cont + 2;
}