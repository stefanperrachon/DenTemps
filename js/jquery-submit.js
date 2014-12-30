

$('#jquery-submit').submit(function() {

  
	
	$.ajax({
		type: 'POST',
		url: 'enter_need.php',
		data: $('#jquery-submit').serialize(),
		success: function() {
			$("#datefield").val('');
			$("#locationfield").val('');
			$("#namefield").val('');
			$("#notesfield").val('');
			
			$('#needs').load('show.php');
			
	
			
			}
		});
		
		return false;
	
});

