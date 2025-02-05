<?php


$developpeur = array( new Developpeur(550, "Le Flock", "Louis-Marie",
"lmleflock@test.net", "0606060606", 2500, "Java"),
new Developpeur(650, "Chellal", "Ali", "ach@test.net", "0707070707", 2750,
"C++"),
new Developpeur(151,"Katsiev", "Amir", "amir@test.net", "0606060606",2750,
"Kotlin")) ;
$manager = array(new Manager(500, "RIPAULT", "Alexis", "alexis@mana.net",
"0606060606",4000, "DSI")) ;

foreach ($developpeur as $value) {
	echo $value->afficher();
}

echo "<br/><br/><br/>";
foreach ($manager as $value) {
	echo $value->afficher();
}



?>
