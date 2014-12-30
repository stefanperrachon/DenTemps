$('.edit_toggle').click(function() {
	var id = $(this).attr("value");
	
	
	
	var value = $('.' + id).attr('contenteditable');
		if (value == 'true') {
		$('.' + id).attr('contenteditable','false').css("border", "none");
		$(this).css({"font-weight" :"normal", "color" : "black"} ).mouseenter(function(){$(this).css('color', '#09C')}).mouseleave(function() {$(this).css('color', 'black')});
		 $("#update_table").show(1000).delay(5000).hide(1500);
		}
		else{
		$('.' + id).attr('contenteditable','true').css("border", "2px solid black");
		$(this).css({"font-weight" :"bold", "color" : "#09C"} ).mouseenter(function(){$(this).css('color', '#09C')}).mouseleave(function() {$(this).css('color', '#09C')});
		}
		
		$('.' + id).keyup(function() {
	delay(function(){
		var notes= $('#notes_cell.' + id).text();
		var name = $('#name_cell.' + id).text();
		var office_location = $('#city_cell.' + id).text();
		
		
		$.ajax({
			type:"post",
			url:"ajax.php",
			data:{notes: notes, id: id, name: name, office_location: office_location},       
			success:function(data){
				console.log('success!');
			}
		});
	}, 750 );
});
 
var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();
		
		

});