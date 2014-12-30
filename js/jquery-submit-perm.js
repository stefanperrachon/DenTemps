

$('#jquery-submit-perm').submit(function() {       // change this for duplicate

  
	
	$.ajax({
		type: 'POST',
		url: 'enter_need_perm.php',    // change this for duplicate
		data: $('#jquery-submit-perm').serialize(),    // change this for duplicate
		success: function() {
			$("#durationfield").val('');   //This is different for perm and temp
			$("#locationfield").val('');
			$("#namefield").val('');
			$("#notesfield").val('');
			
			$('#perm_needs').load('show_perm.php');      // change this for duplicate
			
	
			
			}
		});
		
		return false;
	
});

