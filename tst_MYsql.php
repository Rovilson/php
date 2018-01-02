<html>
<body>
<pre>
<?php 
$dbc = mysqli_connect('localhost', 'root', 'gallagher', 'mysql') or die('Não foi possível conectar');
$res = mysqli_query($dbc,'SELECT * FROM user');
echo " Registros = " . mysqli_num_rows($res) . "\n";

/* Escreve resultados até que não haja mais linhas na tabela */ 
echo "Reverse order...\n";
while ($row = mysqli_fetch_assoc($res)) {
    echo 'User = ' . $row['User'] . '<br>';
}

mysqli_close($dbc);
?>
</pre>
</body>
</html>
