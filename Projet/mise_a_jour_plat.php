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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE plat SET NomPlat=%s, PrixPlat=%s, QuantitéDispo=%s, NomCate=%s WHERE CodePlat=%s",
                       GetSQLValueString($_POST['NomPlat'], "text"),
                       GetSQLValueString($_POST['PrixPlat'], "int"),
                       GetSQLValueString($_POST['QuantitDispo'], "int"),
                       GetSQLValueString($_POST['NomCate'], "int"),
                       GetSQLValueString($_POST['CodePlat'], "int"));

  mysql_select_db($database_valide, $valide);
  $Result1 = mysql_query($updateSQL, $valide) or die(mysql_error());
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE plat SET NomPlat=%s, PrixPlat=%s, QuantitéDispo=%s, NomCate=%s WHERE CodePlat=%s",
                       GetSQLValueString($_POST['NomPlat'], "text"),
                       GetSQLValueString($_POST['PrixPlat'], "int"),
                       GetSQLValueString($_POST['QuantitDispo'], "int"),
                       GetSQLValueString($_POST['NomCate'], "int"),
                       GetSQLValueString($_POST['CodePlat'], "int"));

  mysql_select_db($database_valide, $valide);
  $Result1 = mysql_query($updateSQL, $valide) or die(mysql_error());
}

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_valide, $valide);
$query_Recordset1 = "SELECT * FROM plat";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $valide) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td width="382" colspan="2" rowspan="2"><img src="mm_health_photo.jpg" alt="Header image" width="382" height="101" border="0" /></td>
    <td width="378" height="50" id="logo" valign="bottom" align="center" nowrap="nowrap">Mise_a_jour_plat</td>
    <td width="100%">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" id="tagline" valign="top" align="center">Emplacement du slogan (facultatif)</td>
	<td width="100%">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr bgcolor="#99CC66">
  <td>&nbsp;</td>
  	<td colspan="3" id="dateformat" height="20"><a href="javascript:;">ACCUEIL</a>&nbsp;&nbsp;::&nbsp;&nbsp;<script language="JavaScript" type="text/javascript">
      document.write(TODAY);	</script>	</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#99CC66" background="mm_dashed_line.gif"><img src="mm_dashed_line.gif" alt="line decor" width="4" height="3" border="0" /></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
 <tr>
    <td width="40">&nbsp;</td>
    <td colspan="2" valign="top" bgcolor="#FF0000">&nbsp;<br />
&nbsp;
<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">CodePlat:</td>
      <td><?php echo $row_Recordset1['CodePlat']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">NomPlat:</td>
      <td><input type="text" name="NomPlat" value="<?php echo $row_Recordset1['NomPlat']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">PrixPlat:</td>
      <td><input type="text" name="PrixPlat" value="<?php echo $row_Recordset1['PrixPlat']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">QuantitéDispo:</td>
      <td><input type="text" name="QuantitDispo" value="<?php echo $row_Recordset1['QuantitéDispo']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">NomCate:</td>
      <td><input type="text" name="NomCate" value="<?php echo $row_Recordset1['NomCate']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Mettre à jour l'enregistrement"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form2">
  <input type="hidden" name="CodePlat" value="<?php echo $row_Recordset1['CodePlat']; ?>">
</form>
<p>&nbsp;</p>
<br />
    <form method="post" name="form1" action="<?php echo $editFormAction; ?>"><input type="hidden" name="MM_update" value="form1">
      <input type="hidden" name="CodePlat" value="<?php echo $row_Recordset1['CodePlat']; ?>">
    </form>
    <p>&nbsp;</p>
     <br />
    &nbsp;<br />	</td>
    <td width="100%">&nbsp;</td>
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
<?php
mysql_free_result($Recordset1);
?>
