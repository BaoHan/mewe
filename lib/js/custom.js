/*
首页滑动效果
*/
$(function(){

  $('.phone-login').click(function(){
	   $('.logo').addClass('logo-top');
	   $('.login').addClass('login-hide');
	   $('.login-form').addClass("active");
  });
  
   $('.signup').click(function(){
	   $('.logo').addClass('logo-top');
	   $('.login').addClass('login-hide');
	   $('.signup-form').addClass("active");
  });
  
   $('.back').click(function(){
	   $('.logo').removeClass('logo-top');
	   $('.login').removeClass('login-hide');
	    $('.login-form').removeClass("active");
	       $('.signup-form').removeClass("active");
  });
  
  $('#male').click(function(){
	  $(this).addClass('active');
	   $('#female').removeClass("active");
	   $("#gender").val("male");
  });
  
   $('#female').click(function(){
	  $(this).addClass('active');
	   $('#male').removeClass("active");
	   $("#gender").val("female");
  });
  
})

$(document).ready(function(){
	var height = $(window).height();
	var width =  $(window).width();
	var realHeight = height - 104;
	 $("#preview").height(realHeight);
	 $("#preview").width(width);
})