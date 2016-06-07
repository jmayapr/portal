$(document).ready(function(){
	
	var cafeterias;
	
	function giftshop(){
		$.ajax({
			dataType:'json',
			type: "POST",
			data: {usr : $("#usr").val()},
		  	url: '../../../api/servicios.php/getCafeteria',
		})
		.done(function(data) {
			$("#cafeteria").html();
		})
		.fail(function() {
		  console.log("Tango down");
		  
		});
	}
	// *************************************
	function cafeteria(){
		$.ajax({
			dataType:'json',
			type: "POST",
			data: {empid : $("#empid").val()},
		  	url: '../api/servicios.php/getCafeteria',
		})
		.done(function(data) {
			cafeterias = data;
			console.log(data);
			var sum = 0;
			$.each(cafeterias,function(){sum+=parseFloat(this.precio * this.qty,2);});
			$("#cafeteria").html("Su total en Cafeteria es de : "+ sum.toFixed(2));
			$("#giftshop").html("Por el Momento la Tienda de Regalo no esta integrado");
			console.log(sum);
			
		})
		.fail(function() {
		  console.log("Tango down");
		  
		});
	}
	// *************************************
	$("#buscar").click(function(){
  		cafeteria();
  		
  		
  		  	
  	});
    
  });