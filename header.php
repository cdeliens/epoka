<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>| Epoka Inmobiliaria | Connecting Opportunities |</title>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
<link rel="icon" type="image/ico" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style_main_menu.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/single.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/featured.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/js/slider.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollTo.js" type="text/javascript"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.72.js"></script>

<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->

<script type="text/javascript">
$(document).ready(function(){	
/*Verifica el url para animacion*/
var url = window.location;
if(url != "<?php bloginfo('url'); ?>/"){
	$(".containerMain").hide(); 
	$("#container").width(900);
	
	
   
}else {
	$(".containerMainListing").hide();
	//$("#contact").hide();
	//$(".sidebar").hide();
	
}/* end ELSE
$(".condo1").click(
	function() {
	//Se anima la expansion de container
  		
	$(".containerMain").hide();
 	 $(".containerMainListing").show();
  	 $(".sidebar").show(); 
  	 $("#contact").show();
	});/* end click 

$(".casa1").click(function(){
 
  $(".condo1").click();
  $("#container").load('/epoka/?cat=13 #container');
});

$(".apart").click(function(){
  $(".condo1").click();
});
$(".lotes").click(function(){
  $(".condo1").click();
});
*/
   
   
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

$(document).ready(function() {
    $('#header-image').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});

</script>

<script type="text/javascript" src="http://w.sharethis.com/button/sharethis.js#publisher=8686af5d-0667-4f86-b198-be4aabfaf72d&amp;type=website&amp;post_services=email%2Cfacebook%2Ctwitter%2Cgbuzz%2Cmyspace%2Cdigg%2Csms%2Cwindows_live%2Cdelicious%2Cstumbleupon%2Creddit%2Cgoogle_bmarks%2Clinkedin%2Cbebo%2Cybuzz%2Cblogger%2Cyahoo_bmarks%2Cmixx%2Ctechnorati%2Cfriendfeed%2Cpropeller%2Cwordpress%2Cnewsvine&amp;button=false"></script>
<style type="text/css">
body {font-family:helvetica,sans-serif;font-size:12px;}
a.stbar.chicklet img {border:0;height:16px;width:16px;margin-right:3px;vertical-align:middle;}
a.stbar.chicklet {height:16px;line-height:16px;}
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10828808-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body class="epoka">
 
<div id="container">	
  <div id="header">
  <div id="header-image">
		<img src="<?php bloginfo('template_directory'); ?>/images/logo1.jpg" width="900" height="200" class='first'/>
		<img src="<?php bloginfo('template_directory'); ?>/images/logo2.jpg" width="900" height="200" />
		<img src="<?php bloginfo('template_directory'); ?>/images/logo3.jpg" width="900" height="200" />
		<img src="<?php bloginfo('template_directory'); ?>/images/logo4.jpg" width="900" height="200" />
		</div>
 </div>
  
  <div id="menuheader" >
  <a class='white'href='<?php bloginfo('url'); ?>'>Inicio</a>
  <a href='?page_id=132' class='buttom white'>Qu&iacute;enes somos?</a>
   <a href='?' class='buttom white'>Propiedades</a>
     <a href='<?php bloginfo('url'); ?>' class='buttom white'>Categor&iacute;as</a>
  <a href='?page_id=134'class='buttom white'>Anunciate aqu&iacute;</a>
  <a href='?page_id=137'class='buttom white'>Cont&aacute;ctenos</a>
  <a href='<?php bloginfo('url'); ?>/wp-admin/'class='buttom white'>Admin</a>
  <div id="menuheaderTittle"class='calypso'>B&uacute;squeda por c&oacute;digo:</div>
   <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
	<div>
		<input type="text" class="textfield" name="s" id="s" size="15" value="EPOKA-" />
	</div>
	</form>
	
    <!-- end #header -->
  </div>
  