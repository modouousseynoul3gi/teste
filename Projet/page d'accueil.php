<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Calendrier</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
<!--
//--------------- LOCALIZEABLE GLOBALS---------------
var d=new Date();
monthname= new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//--------------- END LOCALIZEABLE   ---------------

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.Style3 {
	font-size: 14px;
	font-weight: bold;
}
.Style4 {color: #000000}
.Style5 {
	font-size: 16px;
	font-weight: bold;
}
.Style6 {font-size: 16px}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td width="382" colspan="2" rowspan="2" bgcolor="#FF0000"><img src="mm_health_photo.jpg" alt="Header image" width="382" height="101" border="0" /></td>
    <td width="378" height="50" align="center" valign="bottom" nowrap="nowrap" bgcolor="#FF0000" class="Style3" id="logo">Restauration_Royal_Creperie</td>
    <td width="100%" bgcolor="#FF0000">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" align="center" valign="top" bgcolor="#FF0000" id="tagline">&nbsp;</td>
	<td width="100%" bgcolor="#FF0000">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#FF0000"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#FF0000" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  <td bgcolor="#FF0000">&nbsp;</td>
  	<td height="20" colspan="3" bgcolor="#FF0000" id="dateformat"><a href="page d'accueil.php">ACCUEIL</a></td>
  	  <script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	<form name="form1" id="form1">
        <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
          <option value="Formulaire_categorie.php">Formulaire_categorie</option>
          <option value="Formulaire_plat.php">Formulaire_plat</option>
          <option value="Formulaire demande.php">Formulaire_demande</option>
          <option value="Formulaire_commander.php">formulaire_commander</option>
        </select>
        <select name="menu2" onchange="MM_jumpMenu('parent',this,0)">
          <option value="lise_commander.php">liste_commander</option>
          <option value="Liste_categorie.php">liste_categorie</option>
          <option value="lise_plat.php">liste_plat</option>
          <option value="lise_demande.php">liste_demande</option>
        </select>
        <select name="menu3" onchange="MM_jumpMenu('parent',this,0)">
          <option value="mise_a_jour_commander.php">mise_a_jour_commander</option>
          <option value="mise_a_jour_plat.php">mise_a_jour_plat</option>
          <option value="mise_a_jour_categorie.php">mise_a_jour_categorie</option>
        </select>
      </form>    </td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#FF0000" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#FF0000"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
 <tr>
    <td width="40" bgcolor="#FF0000">&nbsp;</td>
    <td colspan="2" valign="top" bgcolor="#FF0000">&nbsp;<br />
    &nbsp;<br />
   <table border="0" cellspacing="0" cellpadding="2" width="504">
        <tr>
          <td class="subHeader Style4 Style6" id="monthformat">MODOU SARR P31 2682 </td>
        </tr>
        <tr>
<td valign="top" class="Style4 bodyText Style5">OUSSEYNOU SY P31 2684 </td>
        </tr>
        <tr>
          <td class="subHeader" id="monthformat">&nbsp;</td>
        </tr>
        <tr>
<td class="bodyText" valign="top">&nbsp;</td>
        </tr>
      </table>
	   <br />
    &nbsp;<br />	</td>
    <td width="100%" bordercolor="#000000" bgcolor="#FF0000">&nbsp;</td>
  </tr>

 <tr>
    <td width="40">&nbsp;</td>
    <td width="342">&nbsp;</td>
    <td width="378">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
