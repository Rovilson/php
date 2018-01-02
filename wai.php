<!DOCTYPE html>
<html>
<head>
	<title>Testes diversos</title>
</head>

<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./style.css" rel="stylesheet">

<body>
<?php
	function gerarCompl($ind = 20) {
		$agora = getdate();
//		$dia = if ($agora['mday'] < 10) echo $agora['mday'];

		$chave = "1234567890AaBbCcDdEeFfGgHhIiJjKkLlMmOoPpQqRrSsTtUuVvXxZzWwYy";
   		$frase = $agora['year'] . "_";
   		for ($i = 1; $i <= $ind; $i ++) {
   			$frase .= substr($chave, rand(1,strlen($chave)), 1);
   		}
   		return $frase;
	}

?>

<?php
	if ( isset($_POST["submit"]) ) {
	   echo "<pre>";
	   print_r($_POST);
	   print_r($_FILES["arq_envia"]);
	   echo strrchr($_FILES["arq_envia"][name],".");
	   echo gerarCompl(30);
	   echo "</pre>";
	}
?>

<!-- <script> alert("ALO"); </script> -->

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label" for="inputName">Name</label>
		<input class="form-control" id="inputName" type="text" name="name" placeholder="nome">
	</div>

	<div class="form-group">
		<label>Website</label>
		<input type="text" name="website" placeholder="website">
	</div>

	<div class="form-group">
		<label>Comment</label>
		<textarea name="comment" rows="5" cols="40" placeholder="comment"></textarea>
	</div>

	<div class="form-group">
		<label>Senha</label>
		<input type="radio" name="radio" value="1">Opção 1
		<input type="radio" name="radio" value="2">Opção 2
		<input type="radio" name="radio" value="3">Opção 3
	</div>

	<div class="form-group">
		<label>Enviar arquivo</label>
		<input type="file" name="arq_envia">
	</div>
		
		<input class="btn btn-danger" type="submit" name="submit" value="Enviar">
	</form>

  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>