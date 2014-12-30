
			$(document).ready(function(){
 
				$('.lightbox').click(function(){
					var clickedId = $(this).attr("id");
					//var idVar = "$id =";
					//var theVar =  idVar + clickedId;
					var formData = {id: clickedId};
				
			 
					
					$('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
					$('.box').animate({'opacity':'1.00'}, 300, 'linear');
					$('.backdrop, .box').css('display', 'block');
					$.ajax({
						type: "POST",
						url: 'my_ajax_receiver_perm_mobile.php',
						data: 'id=' +clickedId,
						success: function(data) {
							$('#show-record').html(data);
							$('#id_num').val(clickedId);
							
									//this is to get rid of the loading css animation
							$("#block_1").removeClass('facebook_block');
							$("#block_2").removeClass('facebook_block');
							$("#block_3").removeClass('facebook_block');
											
						}
						});
		
						return false;
					
					});
				
 
				$('.close').click(function(){
					close_box();
				});
 
				$('.backdrop').click(function(){
					close_box();
				});
 
			});
 
			function close_box()
			{
				$('.backdrop, .box').animate({'opacity':'0'}, 300, 'linear', function(){
					$('.backdrop, .box').css('display', 'none');
				});
			}