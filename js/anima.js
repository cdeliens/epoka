$(document).ready(function(){
$(".condo1").click(
	function() {
	//Se anima la expansion de container
  		$("#container").animate({ 
    	width: "900px",
  		}, 1500);

 	 $(".containerMainListing").delay(800).slideDown("slow");
   	 $(".containerMain").delay(1600).slideUp("slow");
  	 $(".sidebar").delay(2500).fadeIn("slow"); 
  	 $("#header-image").delay(3000).fadeIn("slow");
	});/* end click*/ 

$(".casa1").click(function(){
  $(".condo1").click();
});

$(".apart").click(function(){
  $(".condo1").click();
});
$(".lotes").click(function(){
  $(".condo1").click();
});

   
   
});/* end DOCUMENT READY*/  
$(document).ready(function(){
$("#btn-prev").hide();
$("#btn-next").hide();
$("#btn-next").delay(500).fadeIn("slow");
$("#btn-next").delay(1200).fadeOut("slow");
$("#mask-gallery").hover(
	function() {
	$("#btn-prev").fadeIn("slow");
	$("#btn-next").fadeIn("slow");
	},
	function() {
	$("#btn-prev").fadeOut("slow");
	$("#btn-next").fadeOut("slow");
	}
	);/* end hover*/
});/* end DOCUMENT READY*/ 


$(document).ready(function(){
//bounce an object

 $(".thumbnail-featured").fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).delay(10000).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).delay(10000).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).delay(10000).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).delay(10000);

});/* end DOCUMENT READY*/ 