<?php require_once( 'cms/cms.php' ); ?>
<cms:template order='1' title='Home Page' cloneable='0'>
<cms:editable name='group_img1' label='First Image' desc='First Image' type='group' />
        <cms:editable 
        	name ='image_1'
            label='Image 1'
            desc='Upload first image here'
            group='group_img1'
            show_preview='1'
            preview_width='150'
            type='image' 
         />
         <cms:editable
         	name='image_1_title'
            label='Image Title'
            desc='Enter image title here'
            group='group_img1'
            type='text'
         />
         <cms:editable name='group_img2' label='Second Image' desc='Second Image' type='group' />
         <cms:editable 
        	name ='image_2'
            label='Image 2'
            desc='Upload second image here'
            group='group_img2'
            show_preview='1'
            preview_width='150'
            type='image' 
         />
          <cms:editable
         	name='image_2_title'
            label='Image Title'
            desc='Enter image title here'
            group='group_img2'
            type='text'
         />
         <cms:editable name='group_img3' label='Third Image' desc='Third Image' type='group' />
         <cms:editable 
        	name ='image_3'
            label='Image 3'
            desc='Upload third image here'
            group='group_img3'
            show_preview='1'
            preview_width='150'
            type='image' 
         />
          <cms:editable
         	name='image_3_title'
            label='Image Title'
            desc='Enter image title here'
            group='group_img3'
            type='text'
         />
         <cms:editable name='group_img4' label='Forth Image' desc='Forth Image' type='group' />
        <cms:editable 
        	name ='image_4'
            label='Image 4'
            desc='Upload forth image here'
            group='group_img4'
            show_preview='1'
            preview_width='150'
            type='image' 
         />
          <cms:editable
         	name='image_4_title'
            label='Image Title'
            desc='Enter image title here'
            group='group_img4'
            type='text'
         />
         <cms:editable name='group_img5' label='Fith Image' desc='Fith Image' type='group' />
         <cms:editable 
        	name ='image_5'
            label='Image 5'
            desc='Upload fith image here'
            group='group_img5'
            show_preview='1'
            preview_width='150'
            type='image' 
         />
          <cms:editable
         	name='image_5_title'
            label='Image Title'
            desc='Enter image title here'
            group='group_img5'
            type='text'
         />
         <cms:editable name='group_img6' label='Sixth Image' desc='Sixth Image' type='group' />
         <cms:editable 
        	name ='image_6'
            label='Image 6'
            desc='Upload sixth image here'
            group='group_img6'
            show_preview='1'
            preview_width='150'
            type='image' 
         />
          <cms:editable
         	name='image_6_title'
            label='Image Title'
            desc='Enter image title here'
            group='group_img6'
            type='text'
         />
</cms:template>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Coast Dental Health - Index</title>



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


<link rel="stylesheet" type="text/css" href="shadow/shadowbox.css">
<script type="text/javascript" src="shadow/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>




</head>

<body onLoad="MM_preloadImages('images/nav/homeUP.png','images/nav/aboutUs.png','images/nav/costUP.png','images/nav/galleryUP.png','images/nav/contactUP.png','images/readmoreUP.png','images/nav/cosmeticUP.png')">

<div id="wrapper">

<div id="logo"></div>

<div id="nav">
  <a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','images/nav/homeUP.png',1)"><img src="images/nav/home.png" width="63" height="60" id="Image2" border="0"></a><img src="images/nav/spacer.png" width="15" height="60" border="0"><a href="choose.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image3','','images/nav/aboutUs.png',1)"><img src="images/nav/about.png" width="169" height="60" id="Image3" border="0"></a><img src="images/nav/spacer.png" width="15" height="60" border="0"><a href="cost.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','images/nav/costUP.png',1)"><img src="images/nav/cost.png" width="157" height="60" id="Image5" border="0"></a><img src="images/nav/spacer.png" width="15" height="60" border="0"><a href="cosmetic.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image20','','images/nav/cosmeticUP.png',1)"><img src="images/nav/cosmetic.png" width="208" height="60" id="Image20"></a><img src="images/nav/spacer.png" width="15" height="60" border="0"><a href="gallery.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','images/nav/galleryUP.png',1)"><img src="images/nav/gallery.png" width="112" height="60" id="Image6" border="0"></a><img src="images/nav/spacer.png" width="15" height="60" border="0"><a href="contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','images/nav/contactUP.png',1)"><img src="images/nav/contact.png" width="94" height="60" id="Image7" border="0"></a></div>    
    <div id="wrapper2">
    <div id="javaContainer"><div id="wowslider-container1">
	<div class="ws_images">
<!--The Following has been added to allow Couch CMS access to add images via backend -->
<span>
	<cms:if image_1>
		<img src="<cms:show image_1 />" alt="<cms:show image_1_title />" title="<cms:show image_1_title />" id="wows0"/>
    </cms:if>
</span>
<span>
	<cms:if image_2>
		<img src="<cms:show image_2 />" alt="<cms:show image_2_title />" title="<cms:show image_2_title />" id="wows1"/>
    </cms:if>
</span>
<span>
	<cms:if image_3>
		<img src="<cms:show image_3 />" alt="<cms:show image_3_title />" title="<cms:show image_3_title />" id="wows2"/>
    </cms:if>
</span>
<span>
	<cms:if image_4>
		<img src="<cms:show image_4 />" alt="<cms:show image_4_title />" title="<cms:show image_4_title />" id="wows3"/>
	</cms:if>
</span>
<span>
	<cms:if image_5>
		<img src="<cms:show image_5 />" alt="<cms:show image_5_title />" title="<cms:show image_5_title />" id="wows4"/>
	</cms:if>
</span>
<span>
	<cms:if image_6>
		<img src="<cms:show image_6 />" alt="<cms:show image_6_title />" title="<cms:show image_6_title />" id="wows5"/>
	</cms:if>
</span>
<!--end of CMS -->
</div>
<a style="display:none" href="http://wowslider.com">Slider jQuery by WOWSlider.com v2.0m</a>
	</div>
	<script type="text/javascript" src="engine1/script.js"></script></div>
    
      
      <div id="boxesContainer">
        <div class="boxes"><img src="images/welcome.png" width="301" height="60"><br>
          <br>
          <cms:editable name='Welcome' type='richtext'>
        We offer up to date dentistry in a contemporary, relaxed and welcoming environment with a mission to treat our patients as ‘friends’. Practice owner Jayne Ward is a Dental Therapist/Hygienist who wants to build a reputation of being the Dental Practice that offers excellent treatment with great customer service, at competitive prices. <br>
        <br>
        </cms:editable>
        </div>
        <div class="boxes"><img src="images/offers.png" width="301" height="60"><br>
        <cms:editable name='Offers' type='richtext'>
 <ul>
<li>For a short period of time, new patient exams are £29 including x-rays.<br>
  <br>
</li>

<li>Teeth whitening £140.</li>
</ul>
<br>
</cms:editable>
        </div>
        <div class="boxesEnd"><img src="images/team.png" width="301" height="60"><br>
          <br>
          <cms:editable name='Team' type='richtext'>
          Our team consists of dentists, therapists, hygienists and a nurse who are all friendly, welcoming and always ready to listen to your needs and concerns. As a team we adhere to all our professional and ethical guidelines and promote an open culture.<br>
          </cms:editable>
        <br><a href="team.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','images/readmoreUP.png',1)" rel="shadowbox"><img src="images/readmore.png" name="Image10" width="107" height="31" border="0"></a>
        </div>
        
      </div>

  </div>
</div>
<div id="footer">Copyright 2012 Coast Dental Health | <a href="policies.php" class="black">Practice Policies</a> | <a href="complaints.php">Patient Complaints</a><br>
  Website designed by<a href="http://www.hellolewis.co.uk/"> hellolewis.co.uk</a></div>
</body>
<!-- Copyright Lewis Monteith -->
</html>
<?php COUCH::invoke(); ?>