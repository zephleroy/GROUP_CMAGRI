<?PHP	
$newZephleroy = "";
$charUniverse = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789,.:-_!%&=?";
$numberChar = 10;

for($i = 0; $i < $numberChar; $i++){
	$randInt = mt_rand(0,71);
	$randChar = $charUniverse[$randInt];
	$newZephleroy = $newZephleroy.$randChar;
}

$mngzephleroy = "
<?PHP
/**
	*	Password zephleroy
	*/
	\$zephleroy = '".$newZephleroy."';
?>";

// Create new zephleroy file
file_put_contents("config/zephleroy.php", $mngzephleroy);
?>
