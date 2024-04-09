<?php require_once('Connections/valide.php'); ?>
<?php
$colname_Recordset1 = "-1";
if (isset($_POST['Numdemande'])) {
  $colname_Recordset1 = (get_magic_quotes_gpc()) ? $_POST['Numdemande'] : addslashes($_POST['Numdemande']);
}
mysql_select_db($database_valide, $valide);
$query_Recordset1 = sprintf("SELECT * FROM demande WHERE Numdemande = %s ORDER BY Numdemande ASC", $colname_Recordset1);
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
  <p>Numero
    <label>
    <input name="Numdemande" type="text" id="Numdemande" />
    </label>
    <label>
    <input type="submit" name="Submit" value="Rechercher" />
    </label>
  </p>

  <table border="1">
    <tr>
      <td>Numdemande</td>
      <td>Nomclient</td>
      <td>Datedemande</td>
      <td>Numrecu</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Recordset1['Numdemande']; ?></td>
        <td><?php echo $row_Recordset1['Nomclient']; ?></td>
        <td><?php echo $row_Recordset1['Datedemande']; ?></td>
        <td><?php echo $row_Recordset1['Numrecu']; ?></td>
      </tr>
      <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  </table>
</form>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
