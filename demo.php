<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
	
$(document).ready(function(){

	$('#button1').click(function(){
		$.ajax({
			type:'POST',
			url:'hello.php',
			success:function(result){
				$('#result').html(result);
			}
		});
	});

	$('#button2').click(function(){
		$.ajax({
			type:'POST',
			data:{a:1,b:2},
			url:'sum.php',
			success:function(result){
				$('#result').html(result);
			}
		});
	});


	$('#button3').click(function(){
		$.ajax({
			type:'POST',
			url:'json.php',
			success:function(result){
				var product=$.parseJSON(result);
				var s='Id:'+product.id;
				s+='<br>Name :'+product.name;
				s+='<br>Price :'+product.price;
				$('#result').html(s);
			}
		});

    $('#button4').click(function(){
		$.ajax({
			type:'POST',
			url:'json.php',
			success:function(result){
				var product=$.parseJSON(result);
				var s='';
				for(var i=0;i<listProducts.length;i++)
				{
                   s+='<br> Id:'+listProducts[i].id;
                   s+='<br> Name:'+listProducts[i].name;
                   s+='<br> Price:'+listProducts[i].price;
                   s+='<br>===========================';
				}
				$('#result').html(s);
			}
		});
		
	});
})

</script>

<form>
	<input type="button" value="Hello" id="button1">
    <input type="button" value="Sum" id="button2">
    <input type="button" value="Json" id="button3">
    <input type="button" value="List Object With Json" id="button4">
	<br>
	<div id="result"></div>
</form>