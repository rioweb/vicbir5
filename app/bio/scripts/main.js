'use strict';
navigator.webkitTemporaryStorage.queryUsageAndQuota ( 
    function(usedBytes, grantedBytes) {  
        console.log('we are using ', usedBytes, ' of ', grantedBytes, 'bytes');
    }, 
    function(e) { console.log('Error', e);  }
);

var main = function(){
  /*global someFunction Waypoint:true*/
/*eslint no-undef: "error"*/

/*eslint no-unused-vars: "error"*/
  /* global $ */
setTimeout(function() {
    $('#preloader').fadeOut('100');
  },1000);


$('.nav li, .nav li a').click(function (e) {
		e.preventDefault();
		$('ul.nav > li').removeClass('active');
            $(this).addClass('active');

});

$('#menux').click(function(){
    $('#menu').fadeIn(300).removeClass('hidden').addClass('visible');  
});
$('#closer').click(function(){
    $('#menu').fadeOut(600).addClass('hidden');  
});



     
  
};



$(document).ready(main);
