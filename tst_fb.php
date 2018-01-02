<html>
<title>Programando HTML/PHP/Firebird</title>
<body>
<pre>
<form>
 <input type="text" name="texto">
 <select name="estacao">
  <option selected>Primavera</option>
  <option>Outono</option>
  <option>Verao</option>
  <option>Inverno</option>
 </select>
</form>
<table align="left" border="1">
<tr bgcolor="#BBBACA" text="#FAAHHA"><td><b>Codigo</b></td><td><b>Nome</b></td></tr>
<?php
   include "./conect_fb.php";
   $dbh = ibase_connect ($host, $user, $pwd);
   if ($dbh) {
      echo "Conectou ".$host."\n";
   }
   $stmt = 'select * from cm_cusu order by nome desc';
   $sth = ibase_query($dbh, $stmt);
   while ($row = ibase_fetch_row($sth)) {
#   while ($row = ibase_fetch_assoc($sth)) {
#   while ($row = ibase_fetch_object($sth)) {
#   echo $row[0]."\t -> ".$row[2]."\n";

?>
   <tr><td align="center"><b><?php echo $row[0]; ?></b></td><td><?php echo $row[2]; ?></td></tr>
<?php
   }
   ibase_free_result($sth);
   ibase_close($dbh);
?>
</table>
</pre>
</body>
</html>
