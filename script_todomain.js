$(document).ready(function() {
	$('.hidden').hide();
	function isInt(input){
   			return ((input - 0) == input && input % 1==0);
		}

	function callafter(){
		$('.cb').click(function(){
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
	}
	callafter();
	// function updateDB(){
	// 			// console.log("qerw");
	// 			// var hr = new XMLHttpRequest();
	// 			var url = "feedtodo.php";
	// 			var c_todo = $('#i_todo').val();
	// 			var c_by = $('#i_by').val();
	// 			var c_username= "<?php echo $s_username ?>";
	// 			// console.log(s_username);
	// 			$.ajax({
	// 					  type: "POST",
	// 					  url: url,
	// 					  data: { t_todo: c_todo , t_by: c_by ,t_user : c_username }
	// 					}).done(function( msg ) {
	// 					  $('.todo-table').append(msg);
	// 					});
	// 			$('#i_todo').val("");
	// 			$('#i_by').val("");
	// 			callafter();
	// 			// var transfer = "t_todo="+todo+"&t_by="+by;
	// 				// hr.open("POST",url,true);
	// 			// // hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	// 			// hr.onreadystatechange=function(){
	// 			// 	if (hr.readyState==4 && hr.status ==200){
	// 			// 		var ret = hr.responseText;
	// 			// 		$('#forlater').append("<div class='ret'>"+ret+"</div>");
	// 			// 	}
	// 			// }
	// 			// hr.send(transfer);

	// 	}
});	