<?php 
# Teste de conecao com BD PostGreSQL
if(!@($conexao=pg_connect("host=localhost dbname=postgres port=5432 user=vithal password=gallagher"))) {
  print "Não foi possível estabelecer uma conexão com o banco de dados.";
}else{
  $sql = "select * from teste";
  $result = pg_query($conexao, $sql);

  /* Escreve resultados até que não haja mais linhas na tabela */
  for($i=0;
     $consulta = @pg_fetch_array($result, $i); $i++) {
     print "Col1: $consulta[0] - Col2: $consulta[1]";
  }
  pg_close($conexao);
}
?>
