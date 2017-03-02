$(document).ready(function(){
	$("#submit").click(function(){
		var name1 = $("#name").val();
		var email1 = $("#email").val();
		var phone1 = $("#phone").val();
		var message1 = $("#message").val();
		
		$("#returnmessage").empty();
		
		if (name1 == '' || email1 == '' || message1 == ''){
			alert("Please fill all required fields.");
		}
		else{
			$.post("form-handler-nodb.php",{
				name: name1,
				email: email1,
				message: message1,
				phone: phone1
			}, function(data) {
				$("#returnmessage").append(data);
				if (data == "Message sent successfully."){
					$("#form")[0].reset();
				}
			});	
		}
	});
});
		