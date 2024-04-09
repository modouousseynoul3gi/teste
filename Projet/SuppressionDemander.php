<?php require_once('Connections/valide.php'); ?>
<?php
mysql_select_db($database_valide, $valide);
$query_Recordset1 = "SELECT * FROM demande";
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
<?php do { ?>
  <form id="form1" name="form1" method="post" action="">
    <p>
      <label>
      <input name="Numdemande" type="text" id="Numdemande" value="<?php echo $row_Recordset1['Numdemande']; ?>" />
      </label>
      <label>
      <input name="textfield3" type="text" value="<?php echo $row_Recordset1['Nomclient']; ?>" />
      </label>
      <label>
      <input name="textfield4" type="text" value="<?php echo $row_Recordset1['Datedemande']; ?>" />
      </label>
      <label>
      <input name="textfield5" type="text" value="<?php echo $row_Recordset1['Numrecu']; ?>" />
      </label>
      <label>
      <input type="submit" name="Submit" value="Supprimer" />
      </label>
      <label></label>
  </p>
      </form>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?></body>
</html>
<?php
mysql_free_result($Recordset1);
?>
