$(document).ready(function(){
	
	$("#send").click(function(){
		console.log("Works");
		var text = $("#send-message").val();
		$.post("includes/messages.php", {'message': text});
		$("#send-message").val() = "";
		return false;
	});
	
	setInterval(update, 1000);
});

function update()
{
	$.ajax({
		url: "chats/log.html",
		cache: false,
		success: function(html){		
			$("#messages").html(html); //Insert chat log into the #chatbox div				
		},
	});
}