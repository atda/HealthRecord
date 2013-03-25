<html>
<head>
<title>HRoC</title>
</head>
<body>
<?
$host = "ap-cdbr-azure-east-a.cloudapp.net";
$username = "b76febaa85c8a7";
$password = "fb7e1d49";
$objConnect = mysql_connect($host,$username,$password);

$objDB = mysql_select_db("healthrae7vodxtp");

$strSQL = "SELECT * FROM appuser";
$objQuery = mysql_query($strSQL) or die (mysql_error());

?>
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">UserID</div></th>
    <th width="98"> <div align="center">Username </div></th>
    <th width="198"> <div align="center">Password </div></th>
    <th width="97"> <div align="center">Visitno </div></th>
    
  </tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?=$objResult["UID"];?></div></td>
    <td><?=$objResult["username"];?></td>
    <td><?=$objResult["password"];?></td>
    <td><div align="center"><?=$objResult["visit_visitno"];?></div></td>
   
  </tr>
<?
}
?>
</table>
<?
mysql_close($objConnect);
?>
</body>
</html>
