/*

WiseType
Design by Jacob Wise
Code by Carlos Mayo
carlosmayo.info
2020

*/

$(document).ready(function(){"use strict";
    //loader
	setTimeout(function(){
		$("#loader").fadeOut();
	}, 1000);
	setTimeout(function(){
		$("#loader").remove();
	}, 2000);
    //Remove Splash on devices
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){
		/*GENERAL*/
		$('#splash').remove();
      	$('#container').removeClass('blur');
	}
    //Sun
    $("#sun").click(function() { 
    	$('body').toggleClass("sun-active"); 
  	});
    //Open Mobile Menu
    $( "#burger" ).click(function() {
  	  $(this).toggleClass('open');
      $('#menu-mobile').slideToggle('fast');
  	});                         	
});
