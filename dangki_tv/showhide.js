$(document).ready(function(){
 
	 // on click signup It Hide Login Form and Display Registration Form
	 $("#signup").click(function(){
       $("#first").slideUp("slow", function(){
		  $("#second").slideDown("slow"); 
	   });	
	 });
	 
	 // on click signin It Hide Registration Form and Display Login Form
     $("#signin").click(function(){
       $("#second").slideUp("slow",function(){
	      $("#first").slideDown("slow");
	   });
	 });
	 
});