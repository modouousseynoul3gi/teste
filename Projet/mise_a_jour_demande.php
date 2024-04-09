<?php require_once('Connections/valide.php'); ?>
<?php
mysql_select_db($database_valide, $valide);
$query_Recordset1 = "SELECT * FROM demande";
$Recordset1 = mysql_query($query_Recordset1, $valide) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE demande SET Nomclient=%s, Datedemande=%s, Numrecu=%s WHERE Numdemande=%s",
                       GetSQLValueString($_POST['Nomclient'], "text"),
                       GetSQLValueString($_POST['Datedemande'], "date"),
                       GetSQLValueString($_POST['Numrecu'], "int"),
                       GetSQLValueString($_POST['Numdemande'], "int"));

  mysql_select_db($database_valide, $valide);
  $Result1 = mysql_query($updateSQL, $valide) or die(mysql_error());
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form3")) {
  $updateSQL = sprintf("UPDATE demande SET Nomclient=%s, Datedemande=%s, Numrecu=%s WHERE Numdemande=%s",
                       GetSQLValueString($_POST['Nomclient'], "text"),
                       GetSQLValueString($_POST['Datedemande'], "date"),
                       GetSQLValueString($_POST['Numrecu'], "int"),
                       GetSQLValueString($_POST['Numdemande'], "int"));

  mysql_select_db($database_valide, $valide);
  $Result1 = mysql_query($updateSQL, $valide) or die(mysql_error());
}

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
  $insertSQL = sprintf("INSERT INTO categorie (CoteCategorie, NomCategorie) VALUES (%s, %s)",
                       GetSQLValueString($_POST['CoteCategorie'], "int"),
                       GetSQLValueString($_POST['NomCategorie'], "text"));

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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td width="382" colspan="2" rowspan="2"><img src="mm_health_photo.jpg" alt="Header image" width="382" height="101" border="0" /></td>
    <td width="378" height="50" id="logo" valign="bottom" align="center" nowrap="nowrap">Mise_a_jour_demande</td>
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
    <td colspan="2" valign="top">&nbsp;</td>
    <td width="100%">&nbsp;</td>
  </tr>

 <tr>
    <td width="40">&nbsp;</td>
    <td width="342">&nbsp;</td>
    <td width="378">&nbsp;</td>
	<td width="100%">&nbsp;</td>
  </tr>
</table>

<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <ol>
    <li>
      <input type="hidden" name="MM_insert" value="form1">
    </li>
  </ol>
</form>
<ol>
  <form method="post" name="form3" action="<?php echo $editFormAction; ?>">
    <table align="center">
      <tr valign="baseline">
        <td nowrap align="right">Numdemande:</td>
        <td><?php echo $row_Recordset1['Numdemande']; ?></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Nomclient:</td>
        <td><input type="text" name="Nomclient" value="<?php echo $row_Recordset1['Nomclient']; ?>" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Datedemande:</td>
        <td><input type="text" name="Datedemande" value="<?php echo $row_Recordset1['Datedemande']; ?>" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Numrecu:</td>
        <td><input type="text" name="Numrecu" value="<?php echo $row_Recordset1['Numrecu']; ?>" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input type="submit" value="Mettre à jour l'enregistrement"></td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="form3">
    <input type="hidden" name="Numdemande" value="<?php echo $row_Recordset1['Numdemande']; ?>">
  </form>
  <p>&nbsp;</p>
  <li></li>
</ol>
<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Numdemande:</td>
      <td><?php echo $row_Recordset1['Numdemande']; ?></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nomclient:</td>
      <td><input type="text" name="Nomclient" value="<?php echo $row_Recordset1['Nomclient']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Datedemande:</td>
      <td><input type="text" name="Datedemande" value="<?php echo $row_Recordset1['Datedemande']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Numrecu:</td>
      <td><input type="text" name="Numrecu" value="<?php echo $row_Recordset1['Numrecu']; ?>" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Mettre à jour l'enregistrement"></td>
    </tr>
  </table>
  <ol>
    <li>
      <input type="hidden" name="MM_update" value="form2">
      <input type="hidden" name="Numdemande" value="<?php echo $row_Recordset1['Numdemande']; ?>">
    </li>
  </ol>
</form>
<ol>
  <li></li>
</ol>
<div align="center">
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
