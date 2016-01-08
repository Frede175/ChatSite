<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if (isset($_SESSION['name']))
{
	echo '<div>Works</div>';
	$text = $_POST['message'];
	
	if (!file_exists("../chats/log.html"))
	{
		$temp = fopen("../chats/log.html", "w");
		fclose($temp);
	}
	
	$f = fopen("../chats/log.html", 'a');
	fwrite ($f, "<div class='message left-message'><div class='user'>". $_SESSION['name'] .":</div><div class='text-message'>" . stripslashes(htmlspecialchars($text)) . "</div></div>");
	fclose($f);
}

?>