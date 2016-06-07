$(document).ready(function(){
	$("#reports").hide();
	$("#access").hide();
	$("#equipment").hide();
	$("#task").hide();
	
	// **************************** BUTTONS ***************************
	
	$("#btnReport").click(function (){
		//$("#reports").hide();
		$("#access").hide();
		$("#equipment").hide();
		$("#task").hide();
		
		$("#reports").fadeIn("fast");
	});
	
	$("#btnAccess").click(function (){
		$("#reports").hide();
		//$("#access").hide();
		$("#equipment").hide();
		$("#task").hide();

		$("#access").fadeIn("fast");
	});
	
	$("#btnEquipment").click(function (){
		$("#reports").hide();
		$("#access").hide();
		//$("#equipment").hide();
		$("#task").hide();

		$("#equipment").fadeIn("fast");
	});
	
	$("#btnTask").click(function (){
		//console.log("Task");
		$("#reports").hide();
		$("#access").hide();
		$("#equipment").hide();
		//$("#task").hide();

		$("#task").fadeIn("fast");
	});
	
	// **************************** CLICKS ***************************
	
	$("#clickReport").click(function (){
		$.ajax({
			type: "POST",
			data: { reportRequestedBy : $("#reportRequestedBy").val() , reportDepartamento : $("#reportDepartamento").val() , reportPurpose : $("#reportPurpose").val() , reportRange : $("#reportRange").val() , reportDetail : $('input[name=reportDetail]:checked').val() , reportRange : $("#reportRange").val() , reportReq : $("#reportReq").val() },
		  	url: "../api/serviciosDept.php/reports",
			})
			.done(function(data) {
				$("#reports").hide();
			})
			.fail(function(data) {
			  	console.log("Report down ");
		});
	});
	
	$("#clickAccess").click(function (){
		console.log("Access");
		$.ajax({
			type: "POST",
			data: {accessType :  $("#accessType").val()  },
		  	url: "../api/serviciosDept.php/access",
			})
			.done(function(data) {
				console.log("Click Access");
			})
			.fail(function(data) {
			  	console.log("Access down ");
		});
	});
	
	$("#clickEquipment").click(function (){
		console.log("Equipment");
		$.ajax({
			type: "POST",
			data: {equipmentDate :  $("#equipmentDate").val() , equipmentTime :  $("#equipmentTime").val() , equipmentType :  $('input[name=equipmentType]:checked').val()},
		  	url: "../api/serviciosDept.php/equipment",
			})
			.done(function(data) {
				console.log("Click Equipment");
			})
			.fail(function(data) {
			  	console.log("Equipment down ");
		});
	});
	
	$("#clickTask").click(function (){
		
	});
});

