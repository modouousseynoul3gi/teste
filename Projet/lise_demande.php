<?php require_once('Connections/valide.php'); ?>
<?php
$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_valide, $valide);
$query_Recordset1 = "SELECT * FROM demande";
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
<title>Produits</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
<!--


//--------------- LOCALIZEABLE GLOBALS---------------
var d=new Date();
monthname= new Array("Janvier","F�vrier","Mars","Avril","Mai","Juin","Juillet","Ao�t","Septembre","Octobre","Novembre","D�cembre");
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
.Style5 {font-size: 14px; font-family: Geneva, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" height="351" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2"><img src="mm_health_photo.jpg" alt="Header image" width="382" height="101" border="0" /></td>
    <td width="373" height="50" id="logo" valign="bottom" align="center" nowrap="nowrap"><p>Liste_demande</p>    </td>
    <td width="361">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" id="tagline" valign="top" align="center">&nbsp;</td>
	<td width="361">&nbsp;</td>
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
    <td width="84">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;<br />
    <table border="0" cellspacing="0" cellpadding="2" width="610">
        <tr>
          <td width="260" bgcolor="#FF0000" class="pageName"><br />
            <table border="1">
              <tr>
                <td align="left" class="quote"><span class="Style5">Numdemande</span></td>
                <td align="left" class="quote"><span class="Style5">Nomclient</span></td>
                <td align="left" class="quote"><span class="Style5">Datedemande</span></td>
                <td align="left" class="quote"><span class="Style5">Numrecu</span></td>
              </tr>
              <?php do { ?>
                <tr>
                  <td align="left" class="quote"><span class="Style5"><?php echo $row_Recordset1['Numdemande']; ?></span></td>
                  <td align="left" class="quote"><span class="Style5"><?php echo $row_Recordset1['Nomclient']; ?></span></td>
                  <td align="left" class="quote"><span class="Style5"><?php echo $row_Recordset1['Datedemande']; ?></span></td>
                  <td align="left" class="quote"><span class="Style5"><?php echo $row_Recordset1['Numrecu']; ?></span></td>
                </tr>
                <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
            </table></td>
        </tr>
      </table>    </td>
    <td width="361">&nbsp;</td>
  </tr>

 <tr>
    <td width="84">&nbsp;</td>
    <td width="298">&nbsp;</td>
    <td width="373">&nbsp;</td>
	<td width="361">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
