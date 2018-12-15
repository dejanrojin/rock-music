$(function()
{$("#scroll").click(function(){
	$("html,body").animate(
	{scrollTop:$("#top").offset().top},"5000");return false})})