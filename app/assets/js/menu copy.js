var app = angular.module("intranet",[]);

app.directive ("myMenu" , function (){
	return {
		retrict: "E",
		replace: true,
		templateUrl:"myMenu.html"
		
	};
});