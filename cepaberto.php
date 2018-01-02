<?php
	$page_title = "Buscando CEP via API";
	require_once "header.php";
?>

<?php
	if ($_GET['submit']) {
		$token = '04f0d22e0f707180845575980506ca6b';
		$url = 'http://www.cepaberto.com/api/v2/ceps.json?cep=' . $_GET['cep'];
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $url);
		curl_setopt ($ch, CURLOPT_HTTPHEADER, array ('Authorization: Token token="' . $token . '"'));
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		$trata = json_decode (curl_exec($ch));

		foreach ($trata as $key => $value) {
			switch ($key) {
				case 'logradouro':
				case 'bairro':
				case 'cidade':
				case 'estado':
				    ${$key} = $value;
					break;
			}
  		}
	}
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>
	<label for="cep">Digite o CEP:</label>
	<input id="cep" type="text" name="cep" pattern="\d{8}" placeholder="Ex: 09250100" value="<?php if (!empty($_GET['cep'])) echo $_GET['cep']; ?>" required autofocus /><br>
	<label for="logradouro">Logradouro:</label>
	<input id="logradouro" type="text" name="logradouro" <?php if (!empty($logradouro)) echo 'disabled'; ?> size="50%" value="<?php echo $logradouro; ?>"  /><br>
	<label for="bairro">Bairro:</label>
	<input id="bairro" type="text" name="bairro" <?php if (!empty($bairro)) echo 'disabled'; ?> size="50%" value="<?php echo $bairro; ?>"  /><br>
	<label for="cidade">Cidade:</label>
	<input id="cidade" type="text" name="cidade" <?php if (!empty($cidade)) echo 'disabled'; ?> size="50%" value="<?php echo $cidade; ?>"  /><br>
	<label for="estado">Estado:</label>
	<input id="estado" type="text" name="estado" <?php if (!empty($estado)) echo 'disabled'; ?> size="50%" value="<?php echo $estado; ?>"  /><br>
	<input class="btn btn-primary" type="submit" name="submit" value="Pesquisar">
</fieldset>
</form>

<?php require_once 'footer.php'; ?>


<!-- Fim do programa -->