<?php require_once( 'cms/cms.php' ); ?>
<cms:template order='3' title='What it Costs' cloneable='0'>
</cms:template>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Coast Dental Health - What It Costs</title>



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
      <div id="pageText"><span class="title">What It Costs</span><br>
        <br> 
        <cms:editable name='What_it_Costs' type='richtext'>
        <strong>Adults Fee Guide</strong><br>
        <br>
        Coast Dental Health is a private pay as you go practice.  We aim to offer competitive prices for our patients and ask that for Hygiene appointments a 50% deposit is paid upon booking.  For all other treatments other than exams we ask for a deposit of 50% to cover such things as laboratory costs – with payment in full at the final appointment.<br>
        <br>
        <table width="100%" border="0" cellspacing="10" cellpadding="0" background="images/tablebg.png">
          <tr>
            <td width="85%">New Patient Exam including x-rays &amp; oral cancer screen   </td>
            <td width="15%" align="right">£40.00</td>
          </tr>
          <tr>
            <td>       (Introductory Offer)      </td>
            <td align="right">£29.00</td>
          </tr>
          <tr>
            <td>Routine Exams including oral cancer screen</td>
            <td align="right">£24.00</td>
          </tr>
          <tr>
            <td>Small X-ray</td>
            <td align="right">£5.50</td>
          </tr>
          <tr>
            <td>Fissure Sealants</td>
            <td align="right">£14.50</td>
          </tr>
          <tr>
            <td>Hygiene</td>
            <td align="right">£38.00</td>
          </tr>
          <tr>
            <td>Hygiene Complex (Perio)      </td>
            <td align="right">£85.00</td>
          </tr>
          <tr>
            <td>Access route for Hygiene Only  (Simple Scale &amp; Polish)</td>
            <td align="right">£10.00 plus Hyg Fee</td>
          </tr>
          <tr>
            <td colspan="2">(Hygienists need to work from a prescription from the dentist, therefore patients will need a simple exam with our Dentist – this is not a full exam)</td>
          </tr>
          <tr>
            <td>Oral Cancer Screening</td>
            <td align="right">£20.00</td>
          </tr>
          <tr>
            <td>White Fillings            </td>
            <td align="right">£50 - £110</td>
          </tr>
          <tr>
            <td>Home Whitening </td>
            <td align="right">£140.00</td>
          </tr>
          <tr>
            
          </tr>
          <tr>
            <td>Root Treatments</td>
            <td align="right">£180 – £280</td>
          </tr>
          <tr>
            <td>Crowns Porcelain Bonded   </td>
            <td align="right">£299.00</td>
          </tr>
          <tr>
            <td>       Deluxe            </td>
            <td align="right">£349.00</td>
          </tr>
          <tr>
            <td>Veneers</td>
            <td align="right">£349.00</td>
          </tr>
          <tr>
            <td>Bridges Maryland Wing 1 tooth</td>
            <td align="right">£289.00</td>
          </tr>
          <tr>
            <td>       Deluxe            </td>
            <td align="right">£339.00</td>
          </tr>
          <tr>
            <td>Bridge 2 teeth/units</td>
            <td align="right">£429.00</td>
          </tr>
          <tr>
            <td>       Deluxe </td>
            <td align="right">£529.00</td>
          </tr>
          <tr>
            <td>           3 teeth/units</td>
            <td align="right">£539.00</td>
          </tr>
          <tr>
            <td>       Deluxe </td>
            <td align="right">£689.00</td>
          </tr>
          <tr>
            <td>Dentures  Acrylic      </td>
            <td align="right">£337 - £434</td>
          </tr>
          <tr>
            <td>Extractions    </td>
            <td align="right">from £60.00</td>
          </tr>
          <tr>
            
          </tr>
        </table><br>
        <strong>Childrens Fee Guide </strong><br>
        <br>
      We feel prevention is top priority and we explore all available treatment options before the extraction of baby teeth.  This is very important for future dental health and to eliminate any future anxiety. <br>
      <br>
      <table width="100%" border="0" cellspacing="10" cellpadding="0" background="images/tablebg2.png">
        <tr>
          <td width="67%">New Patient Exam (no X-rays)</td>
          <td width="14%" align="right">0-5</td>
          <td width="19%" align="right">Free with registered patient</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="right">0–12</td>
          <td align="right">£15.00</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="right">12-18</td>
          <td align="right">£20.00</td>
        </tr>
        <tr>
          <td>Recall Exams (no X-rays)</td>
          <td align="right">&nbsp;</td>
          <td align="right">£10.00</td>
        </tr>
        <tr>
          <td>White Fillings                        </td>
          <td align="right">Baby Teeth from</td>
          <td align="right">£25.00</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="right">Adult Teeth</td>
          <td align="right">as adult prices</td>
        </tr>
        <tr>
          <td>Extractions</td>
          <td align="right">Baby Teeth from</td>
          <td align="right">£30.00</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="right">Adult Teeth</td>
          <td align="right">as adult prices</td>
        </tr>
        <tr>
          <td>Hygiene Appointments</td>
          <td>&nbsp;</td>
          <td align="right"><p> from £19.00</p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td align="right">&nbsp;</td>
        </tr>
      </table>
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