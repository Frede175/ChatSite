<?
session_start();
 
function loginForm(){
    echo'
    <div id="loginform">
    <form action="index.php" method="post">
        <p>Please enter your name to continue:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
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
                    <div class="message left-message">
                        <div class="user">Frede175: </div>
                        <div class="text-message">Curabitur tincidunt bibendum mi at pharetra. Morbi egestas arcu ac lorem elementum, sed egestas sapie. </div>
                    </div>
                </div>
                
                <form action=""> 
                    <input id="send-message" type="text" />
                    <input id="send" type="Submit" value="Send" />
                </form>
            </div>
        </div>
    </body>
</html>