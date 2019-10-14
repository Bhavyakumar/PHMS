$(document).ready(function(){
	$("#plantType").on('change',function(){
		var type_id = $("#plantType option:selected").val();
		var type_name = $("#plantType option:selected").text();
		//alert(a);
		//alert(b);
		$.ajax({
			url:'fetchName.php',
			method:'POST',
			data:{'type_id':type_id},
			//dataType:'json',
			success:function(data)
			{
				$aaa= data.p_id;
				$bbb= data.p_name;
				alert($aaa+ " " + $bbb);
         		//$('#plantName').aaa['p_id'];
	        }

		});
	});
});