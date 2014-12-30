

$('#temp-request').submit(function() {

		hidden_stuff();
		
	$.ajax({
		type: 'POST',
		url: 'post_temp_req_perm.php',   //need to change this
		data: $('#temp-request').serialize(),
		success: function() {
			$("#namefield").val('');
			$("#emailfield").val('');
			$("#phonefield").val('');
			$("#notesfield").val('');
			$("#id_num").val('');
			
			

			 
			close_box();
			
		
			
			
			}
		});
		
		return false;
	
});

function close_box()
			{
				$('.backdrop, .box').animate({'opacity':'0'}, 300, 'linear', function(){
					$('.backdrop, .box').css('display', 'none');
				});
			}
			
function hidden_stuff() //this is the message function
			{
			var thevalue =  $("#id_num").attr('value');
			var hide_div = "#hide" + thevalue;
			$(hide_div).delay( 2000 ).show("slow");
				
			}