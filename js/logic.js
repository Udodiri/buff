// JavaScript Document
$(document).ready(function() {
   
    $('#st-trigger-effectss button').click(function(){
        $('#st-container').toggleClass('st-menu-open');
        $('#button').toggleClass('fa fa-list');
        $('#button').toggleClass('fa fa-close');
        $('#Profilepage').toggleClass('showcontein');
    })
	$(".active1").click(function() {
		$('html,body').animate({
			scrollTop: $("#wrap-top").offset().top},
			'slow');
	});
	
	$(".active2").click(function() {
		$('html,body').animate({
			scrollTop: $("#content1").offset().top},
			'slow');
	});
	
	$(".active3").click(function() {
		$('html,body').animate({
			scrollTop: $("#content2").offset().top},
			'slow');
	});
	
	$(".active4").click(function() {
		$('html,body').animate({ 
			scrollTop: $("#content3").offset().top},
			'slow');
	});
	
	
	$("#banLink").click(function() {
		document.getElementById("javaForm").style.display = "block";
	});
	$("#signupLink,#memAreaR.login").click(function() {
		document.getElementById("javaForm").style.display = "block";
	});
	$("#slider").click(function() {
		document.getElementById("javaForm").style.display = "none";
	});
	$("#content1").click(function() {
		document.getElementById("javaForm").style.display = "none";
	});
	$("#content2").click(function() {
		document.getElementById("javaForm").style.display = "none";
	});
	$("#content3").click(function() {
		document.getElementById("javaForm").style.display = "none";
	});
	$("#map").click(function() {
		document.getElementById("javaForm").style.display = "none";
	});
	$("#footer").click(function() {
		document.getElementById("javaForm").style.display = "none";
	});
	
	//FIX HEADER DIV
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 650) {
			$("#header").addClass("fixed");
			document.getElementById("header").style.opacity = "5.0";
		} else {
			//$("#header").removeClass("fixed");
			document.getElementById("header").style.opacity = "0.6";
		}
	});
});