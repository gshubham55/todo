$(document).ready(function() {
	$('.hidden').hide();
	function isInt(input){
   			return ((input - 0) == input && input % 1==0);
		}
	
	$('.cb').click(function (){
		var id=$(this).attr('id').substr(0,2);
		if(!isInt(id)) id = id.substring(0,1);
		if ($(this).is(':checked')){
			var id1="#"+id+"task";
			var id2="#"+id+"del";
			$(id1).addClass('linethr');
			$(id2).fadeIn('slow');
			console.log(id1);
		}
		else
		{
			var id1="#"+id+"task";
			var id2="#"+id+"del";
			$(id1).removeClass('linethr');
			$(id2).fadeOut('slow');
			console.log(id2);
		}

	});
	
});	