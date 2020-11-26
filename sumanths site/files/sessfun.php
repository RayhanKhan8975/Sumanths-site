<?php
session_start();
if (! isset($_SESSION['pizza'])) {
	echo ('<p>Session is empty</p>\n');
	$_SESSION['pizza'] = 0;
}elseif ($_SESSION['pizza'] < 3) {
	$_SESSION['pizza'] = $_SESSION['pizza'] + 1;
	echo ('<p>added one</p>\n');
}else{
	session_destroy();
	session_start();
	echo ('started a new session');
}
?>
<p><a href="sessfun.php">Click me</a></p>
<p>Our session id is :<?= session_id();?></p>
<pre>
	<<?php 
print_r($_SESSION)
	 ?>
</pre>