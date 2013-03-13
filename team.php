<?php require_once( 'cms/cms.php' ); ?>
<cms:template order='8' title='Team' cloneable='0'>
</cms:template>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFF;
}
body {
	margin-left: 20px;
	margin-top: 20px;
	margin-right: 20px;
	margin-bottom: 20px;
	background-color: #191919;
}
h1 {
	font-size: 24px;
	color: #E7E5C9;
}
h1,h2,h3,h4,h5,h6 {
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
}
</style>
</head>

<body>

<cms:editable name='Team' type='richtext'>
<h1>Meet Our Team </h1><br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><img src="/images/gallery/team/thumbs/jayne.jpg" width="220" height="260" /></td>
    <td align="center" valign="top"><img src="/images/gallery/team/thumbs/kelly.jpg" width="220" height="260" /></td>
    <td align="center" valign="top"><img src="/images/gallery/team/thumbs/photo.jpg" width="220" height="260" /></td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">Jayne Ward</td>
    <td align="center" valign="top">Kelly Blackett-Mills</td>
    <td align="center" valign="top">Liese Parrish</td>
  </tr>
  <tr>
    <td align="center" valign="top">GDC 113347</td>
    <td align="center" valign="top">GDC  151554</td>
    <td align="center" valign="top">GDC 134888</td>
  </tr>
  <tr>
    <td align="center" valign="top">Practice Owner/Hygienist/Therapist</td>
    <td align="center" valign="top">Hygienist/Therapist</td>
    <td align="center" valign="top">Dental Nuirse</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="/images/gallery/team/Vicky.jpg" width="220" height="260" /></td>
    <td align="center" valign="top"><img src="/images/gallery/team/oliver.jpg" alt="" width="220" height="260" /></td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">Vicky Johnston</td>
    <td align="center" valign="top">Oliver Trefgarne</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">GDC  68132</td>
    <td align="center" valign="top">GDC  211354</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top">Dentist</td>
    <td align="center" valign="top">Dentist</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
</table>
</cms:editable>
</body>
</html>
<?php COUCH::invoke(); ?>