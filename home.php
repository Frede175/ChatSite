<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


if(isset($_POST['enter'])){
	if($_POST['name'] != ""){
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	}
	else{
		echo '<span class="error">Please type in a name</span>';
	}
}

if (!isset($_SESSION['name']))
{
	echo '
		<div id="loginform">
			<form action="home.php" method="post">
				<p>Please enter your name to continue:</p>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" />
				<input type="submit" name="enter" id="enter" value="Enter" />
			</form>
		</div>
	';

}
else
{
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
		<script src="js/jquery.js"></script>
        <script src="js/chat.js"></script>
    </head>
    <body>
        <div id="Header">
            <div id="Menu">
                <div class="menu-item">Home</div>
            </div>
        </div>
        <div id="Content">
            <div id="Chat">
                
                <div id="messages">
					
					<?php
						if (file_exists("chats/log.html") && filesize("chats/log.html") > 0)
						{
							$f = fopen("chats/log.html", "r");
							$content = fread($f, filesize("chats/log.html"));
							fclose($f);
							echo $content;
						}
					?>
					
				</div>
                
                <form name="message" action=""> 
                    <input id="send-message" type="text" />
                    <input id="send" name="send" type="Submit" value="Send"/>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
}
?>