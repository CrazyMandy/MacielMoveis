
<?php
	header("Location: index.php");

	$lugar = $_POST['lugarSelect'];
	
	setcookie('lugarCookie',$lugar, time()+180);

?>