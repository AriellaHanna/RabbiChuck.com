$(document).ready(function(){
	$("#submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var message = $("#message").val();
		
		$("#returnmessage").empty();
		
		if (name == '' || email == '' || message == ''){
			alert("Please fill all required fileds.");
		}
		else{
			$.post("contact.php",{
				name1: name,
				email1: email,
				message1: message,
				phone1: phone
			}, function(data) {
				$("#returnmessage").append(data);
				if (data == "Message sent successfully."){
					$("#form")[0].reset();
				}
			});	
		}
	});
});
		