<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>

<?php
function curPageURL() {
  $pageURL = $_SERVER["REQUEST_URI"];
 return $pageURL;
}
?>
<style type="text/css">
body { overflow:hidden; }
h1 {font-family:Tahoma, Geneva, sans-serif; font-size:50px; color:#999; margin-bottom:-80px; margin-left:-200px;
-webkit-transform: rotate(-17deg); 
-moz-transform: rotate(-17deg);	
}

h3 {font-family:Tahoma, Geneva, sans-serif; font-size:20px; color:#CCC; z-index:9999; margin-top:-110px;
}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Error | Bromölla Vattenskidklubb</title>
<link rel="icon" type="image/png" href="../img/favicon.png" />
<link href="/vsk/boilerplate.css" rel="stylesheet" type="text/css">
<link href="/vsk/style.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/vsk/js/jqFancyTransitions.1.8.js" type="text/javascript"></script>

<!--<link rel="stylesheet" href="slideshow.css" />
<!-- 
Mer information om villkorliga kommentarer runt html-taggar överst i filen finns på:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Gör följande om du använder ditt anpassade bygge av modernizr (http://www.modernizr.com/):
* infoga länken till din js här
* ta bort länken nedan till html5shiv
* lägg till klassen no-js i html-taggarna överst
* du kan också ta bort länken till respond.min.js om du inkluderat MQ Polyfill i ditt modernizr-bygge 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="respond.min.js"></script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body onLoad="MM_preloadImages('/vsk/img/logo2trans_hover.png')">
<div class="gridContainer clearfix" id="headerimg">
<p>
</div> 

<div class="menustyle clearfix">
  <div id="header">
    <!--<a href="http://megalicious.org/vsk/"><img id="trans" name="logo" src="img/logo2trans.png" width="200" height="90" alt=""></a>--><a href="/vsk" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('logo2','','/vsk/img/logo2trans_hover.png',1)"><img src="/vsk/img/logo2trans.png" alt="Bromölla Vattenskidklubb" width="202" height="90" id="logo2"></a>
  
<ul id="nav">
<li id="nav"><a id="nav" href="/vsk/">Hem</a></li>
<li id="nav"><a id="nav" href="/vsk/batforarlista/">Kalender</a></li>
<li id="nav"><a id="nav" href="/vsk/priser">Priser</a></li>
<li id="nav"><a id="nav" href="/vsk/galleri">Galleri</a></li>
<li id="nav"><a id="nav" href="/vsk/om">Om oss</a></li>
</ul>
<div id="container">
</div></div></div>

<div class="gridContainer clearfix" id="bottomradius">
<!--<center><h2>Välkommen till Bromölla Vattenskidklubb</h2></center>
<hr>-->
<!--
<div class="rss-container">
  <div id="slideshow" class="rs-slideshow">
    <div class="slide-container"> <a href="#testpage"><img src="images/bild.png" alt="The first image in a slideshow demo." title="This is the first slide" /></a> <span class="slide-caption">Lorem ipsum dolor sit amet.</span> </div>
    <ol class="slides">
		<li> <a href="images/bild.png" 
								title="Lorem ipsum dolor sit amet."><a href="#test">Lorem ipsum dolor sit amet.</a></a> </li>
      <li> <a href="images/bild2.png" 
								title="Lorem ipsum dolor sit amet.">Lorem ipsum dolor sit amet.</a> </li>
    </ol>
  </div>
</div>-->
</br>
</br>
<center>
<h1>Hoppsan!</h1>
  <img src="http://megalicious.org/vsk/error/404_error.png" alt="404'd">
  <h3>Tyvärr, <?php
  echo curPageURL();
?> finns inte!</h3>
</center>
</br>
</div>
<footer>Copyright © 2013 <a id="copyright" href="/vsk/">Bromölla Vattenskidklubb</a><a href="https://www.facebook.com/pages/Brom%C3%B6lla-Vattenskidklubb/143484409008478" target="_blank"><img src="http://megalicious.org/vsk/img/FB-f-Logo__blue_29.png"></a></footer>

<script>
$(document).ready( function(){
	$('#slideshowHolder').jqFancyTransitions({ width: 890, height: 400 });
});
</script>

<!--<script src="js/jquery.rs.slideshow.js"></script> 
<script src"http://modernizr.com/downloads/modernizr-latest.js"></script>
<script src="js/dynamic-controls-bootstrap.js"></script> -->
</body>
</html>
