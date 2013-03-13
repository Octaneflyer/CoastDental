<?php require_once( 'cms/cms.php' ); ?>
<cms:template order='2' title='Why Choose Us' cloneable='0'>
</cms:template>
<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<title>Coast Dental Health - Why Choose Us</title>



<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
a:link {
	color: #323232;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #323232;
}
a:hover {
	text-decoration: none;
	color: #927F64;
}
a:active {
	text-decoration: none;
	color: #323232;
}
body {
	background-color: #323232;
}
</style>
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
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<style type="text/css">a#vlb{display:none}</style>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<script type="text/javascript" src="engine1/wowslider.js"></script>


</head>

<body onLoad="MM_preloadImages('images/nav/homeUP.png','images/nav/aboutUs.png','images/nav/costUP.png','images/nav/galleryUP.png','images/nav/contactUP.png','images/nav/cosmeticUP.png')">

<div id="wrapper">

<div id="logo"></div>
<div id="nav"> <a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','images/nav/homeUP.png',1)"><img src="images/nav/home.png" alt="" width="63" height="60" id="Image2" border="0"></a><img src="images/nav/spacer.png" alt="" width="15" height="60" border="0"><a href="choose.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','images/nav/aboutUs.png',1)"><img src="images/nav/about.png" alt="" width="169" height="60" id="Image3" border="0"></a><img src="images/nav/spacer.png" alt="" width="15" height="60" border="0"><a href="cost.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','images/nav/costUP.png',1)"><img src="images/nav/cost.png" alt="" width="157" height="60" id="Image5" border="0"></a><img src="images/nav/spacer.png" alt="" width="15" height="60" border="0"><a href="cosmetic.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image20','','images/nav/cosmeticUP.png',1)"><img src="images/nav/cosmetic.png" alt="" width="208" height="60" id="Image20"></a><img src="images/nav/spacer.png" alt="" width="15" height="60" border="0"><a href="gallery.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','images/nav/galleryUP.png',1)"><img src="images/nav/gallery.png" alt="" width="112" height="60" id="Image6" border="0"></a><img src="images/nav/spacer.png" alt="" width="15" height="60" border="0"><a href="contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','images/nav/contactUP.png',1)"><img src="images/nav/contact.png" alt="" width="94" height="60" id="Image7" border="0"></a></div>
<div id="wrapper2">
      <div id="pageText"><span class="title">Why Choose Us</span><br>
        <br> <div class="imgRight"><img src="images/choose.jpg" width="400" height="425"></div>
        <cms:editable name='Why_Choose_Us' type='richtext'> 
        At Coast Dental Health we have a very simple thought process – our primary aim is to stabilise any dental problems you may have by offering gentle 
       
        treatment in the least invasive and most effective way in terms of your future dental health.<br>
        <br>
        <ul>
<li>We are competitive and affordable for the whole family.<br></li><br>
<li>We offer great customer service<br></li><br>
<li>Registered with the Care Quality Commission<br></li>
<br>
<li>Nervous? We take our time and patience which helps you feel more relaxed<br></li><br>
<li>Our team aim to prevent dental disease rather than treat it at a later date<br></li><br>
<li>We listen to your concerns and include you in every aspect of your treatment<br></li><br>
<li>We provide white fillings only<br></li><br>
<li>Hygiene and whitening treatments are available to walk in patients<br></li><br>
<li>We have a lounge area with wi-fi access, television, coffee, tea & soft drinks<br></li><br>
<li>We use digital x-rays (for safer, lower dose radiation)<br></li><br>
<li>Easy parking – we kindly ask our patients that you park sensibly in the side roads
so that we do not upset our neighbours<br></li></ul> 
</cms:editable>
</div>
    </div>
</div>
<div id="footer">Copyright 2012 Coast Dental Health | <a href="policies.php" class="black">Practice Policies</a> | <a href="complaints.php">Patient Complaints</a><br>
  Website designed by<a href="http://www.hellolewis.co.uk/"> hellolewis.co.uk</a></div>
</body>
<!-- Copyright Lewis Monteith -->
</html>
<?php COUCH::invoke(); ?>