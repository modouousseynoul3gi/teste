<?php require_once('Connections/valide.php'); ?>
<?php
mysql_select_db($database_valide, $valide);
$query_Recordset1 = "SELECT * FROM commander";
$Recordset1 = mysql_query($query_Recordset1, $valide) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <?php do { ?>
    <label>
    <input name="Nbre_Plat_Com" type="text" id="Nbre_Plat_Com" value="<?php echo $row_Recordset1['Nbre_Plat_Com']; ?>" />
    </label>
    <label>
    <input name="textfield2" type="text" value="<?php echo $row_Recordset1['CodePlat']; ?>" />
    </label>
    <label>
    <input name="textfield3" type="text" value="<?php echo $row_Recordset1['NumDemande']; ?>" />
    </label>
    <label>
    <input type="submit" name="Submit" value="Supprimer" />
    </label>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</form>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
