<?php require_once( 'cms/cms.php' ); ?>
<cms:template order='5' title='Contact Us' cloneable='0'>
</cms:template>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Coast Dental Health - Contact Us</title>



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
	<cms:editable name='main_content' type='richtext'>
      <div id="pageText"><span class="title">Contact Us</span><br>
        <br>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" rowspan="2" valign="top"><p>Opening Hours:</p>
              <p class="recessed"> Monday  	8.30  – 5.30<br>
                Tuesday	 	9.00  – 1.00 <br>
                Wednesday	8.30  – 5.30<br>
                Thursday	10.00  – 2.00<br>
                Friday		8.30   - 5.00</p>
              <p>We kindly ask that you give us 24hrs notice if you need to cancel an appointment so that we can offer the time to another patient.  In return we will try to inform you if the dentist is running late or if due to unforeseen circumstances there is a change of clinician for that day, in which case you may wish to rebook your appointment.</p>
            <p>Registered patients - in an out of hours emergency please call the practice number for details of our out of hours service.<br>
  <br>
  </p>
  </cms:editable>
            <form name="form1" method="post" action="FormToEmail.php">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="36%">Name:</td>
        <td width="64%"><label for="name"></label>
          <input type="text" name="name" id="name"></td>
        </tr>
      <tr>
        <td>Email:</td>
        <td><input type="text" name="email" id="email"></td>
        </tr>
      <tr>
        <td>Telephone:</td>
        <td><input type="text" name="telephone" id="telephone"></td>
        </tr>
      <tr>
        <td valign="top">Comments:</td>
        <td><textarea name="comments" rows="5" id="comments"></textarea></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" value="Submit"><input type="reset" name="Reset" id="button" value="Reset"></td>
        </tr>
      </table>
</form>&nbsp;</td>
            <td width="52%" align="left" valign="top"><div id="contactInfo"><strong>Tel: 023 9217 0201 <br>
              Email: coastdentalhealth@gmail.com<br>
            Address: 307 Copnor Road, Portsmouth, PO3 5EG</strong></div>
              <br>
            <br></td>
          </tr>
          <tr>
            <td align="right"><iframe width="492" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=307+Copnor+Road,+Portsmouth&amp;aq=0&amp;oq=307+copnor+ro&amp;sll=53.800651,-4.064941&amp;sspn=8.415571,23.269043&amp;ie=UTF8&amp;hq=&amp;hnear=307+Copnor+Rd,+Portsmouth+PO3+5EG,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=50.821125,-1.065284&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=307+Copnor+Road,+Portsmouth&amp;aq=0&amp;oq=307+copnor+ro&amp;sll=53.800651,-4.064941&amp;sspn=8.415571,23.269043&amp;ie=UTF8&amp;hq=&amp;hnear=307+Copnor+Rd,+Portsmouth+PO3+5EG,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=50.821125,-1.065284" style="color:#0000FF;text-align:left"></a></small></td>
          </tr>
        </table>
      </div>
    </div>
</div>
<div id="footer">Copyright 2012 Coast Dental Health | <a href="policies.php" class="black">Practice Policies</a> | <a href="complaints.php">Patient Complaints</a><br>
  Website designed by<a href="http://www.hellolewis.co.uk/"> hellolewis.co.uk</a></div>
</body>
<!-- Copyright Lewis Monteith -->
</html>
<?php COUCH::invoke(); ?>