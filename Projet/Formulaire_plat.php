<?php require_once('Connections/valide.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO plat (CodePlat, NomPlat, PrixPlat, QuantitéDispo, NomCate) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['CodePlat'], "int"),
                       GetSQLValueString($_POST['NomPlat'], "text"),
                       GetSQLValueString($_POST['PrixPlat'], "int"),
                       GetSQLValueString($_POST['QuantitDispo'], "int"),
                       GetSQLValueString($_POST['NomCate'], "int"));

  mysql_select_db($database_valide, $valide);
  $Result1 = mysql_query($insertSQL, $valide) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Calendrier</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS---------------
var d=new Date();
monthname= new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//--------------- END LOCALIZEABLE   ---------------
</script>
</head>
<body bgcolor="#F4FFE4">
<table width="93%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2"><img src="imageWhatsApp Image 2024-01-18 &agrave; 17.03.10_aab5336c.jpg" width="371" height="262" longdesc="http://localhost" /></td>
    <td width="410" height="50" id="logo" valign="bottom" align="center" nowrap="nowrap"><p>Formulaire_plat</p>    </td>
    <td width="236">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="283" id="tagline" valign="top" align="center">&nbsp;</td>
	<td width="236">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  <td>&nbsp;</td>
  	<td colspan="3" id="dateformat" height="19"><a href="javascript:;">ACCUEIL</a>&nbsp;&nbsp;::&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
 <tr>
    <td width="86">&nbsp;</td>
    <td colspan="2" valign="top" bgcolor="#FF0000">&nbsp;<br />
    &nbsp;<br />
   <table border="0" cellspacing="0" cellpadding="2" width="504">
        <tr>
          <td class="subHeader" id="monthformat">&nbsp;
            <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
              <table align="center">
                <tr valign="baseline">
                  <td nowrap align="right">CodePlat:</td>
                  <td><input type="text" name="CodePlat" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">NomPlat:</td>
                  <td><input type="text" name="NomPlat" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">PrixPlat:</td>
                  <td><input type="text" name="PrixPlat" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">QuantitéDispo:</td>
                  <td><input type="text" name="QuantitDispo" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">NomCate:</td>
                  <td><input type="text" name="NomCate" value="" size="32"></td>
                </tr>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td><input type="submit" value="Insérer l'enregistrement"></td>
                </tr>
              </table>
              <input type="hidden" name="MM_insert" value="form1">
            </form>
          <p>&nbsp;</p></td>
        </tr>
        <tr>
<td class="bodyText" valign="top">&nbsp;</td>
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
    <td width="236">&nbsp;</td>
  </tr>

 <tr>
    <td width="86">&nbsp;</td>
    <td width="286">&nbsp;</td>
    <td width="410">&nbsp;</td>
	<td width="236">&nbsp;</td>
  </tr>
</table>
</body>
</html>
