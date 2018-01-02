<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		var frutas = ["Banana" => "verde","Maçã","Goiaba","Pera","Uva"];
		alert(frutas["Banana"]);



		var album = {
			title: "Metalica (Black Album)",
			release: 1992,
			showInfo() {
				alert("Titulo do album: " + this.title + "Lancado em: " + this.release);
			}
		};
	</script>
</head>
<body>

<main>
<div>
<h3><p id="pont0" style="color:white;background-color:blue"></p></h3>
<h3><p id="pont1" style="color:white;background-color:green"></p></h3>
</div>
</main>

<script type="text/javascript">
	document.getElementById('pont1').innerHTML = album.title;
</script>

<?php

echo 'inicio' . '<br>';
echo `uname` . '<br>'; 
echo 'final' . '<br>';

?>

/*
	// Set namespace (works only with PHP 5.3)
	namespace TestProject;

	// This prints file full path and name
	echo "This file full path and file name is '" . __FILE__ . "'.<br>";

	// This prints file full path, without file name
	echo "This file full path is '" . __DIR__ . "'.<br>";

	// This prints current line number on file
	echo "This is line number " . __LINE__ . ".<br>";

	// Really simple basic test function
	function test_function_magic_constant() {
		echo "This is from '" . __FUNCTION__ . "' function.<br>";
	}

	// Prints function and used namespace
	test_function_magic_constant();

	// Really simple class for testing magic constants
	class TestMagicConstants {
		// Prints class name
		public function printClassName() {
			echo "This is " . __CLASS__ . " class.<br>";
		}

		// Prints class and method name
		public function printMethodName() {
			echo "This is " . __METHOD__ . " method.<br>";
		}

		// Prints function name
		public function printFunction() {
			echo "This is function '" . __FUNCTION__ . "' inside class.<br>";
		}

		// Prints namespace name (works only with PHP 5.3)
		public function printNamespace() {
			echo "Namespace name is '" . __NAMESPACE__ . "'.<br>";
		}
	}

	// Create new TestMagicConstants class
	$test_magic_constants = new TestMagicConstants;

	// This prints class name and used namespace
	$test_magic_constants->printClassName();

	// This prints method name and used namespace
	$test_magic_constants->printMethodName();

	// This prints function name inside class and used namespace
	// same as method name, but without class
	$test_magic_constants->printFunction();

	// This prints namespace name (works only with PHP 5.3)
	$test_magic_constants->printNamespace();

	exit();

?>




<?php 
define('APP_DIR', dirname(__DIR__));
define('APP_FILE', dirname(__FILE__));

echo APP_DIR . '<br>';
echo APP_FILE . '<br>';

echo '$_SERVER[\'REQUEST_METHOD\'] => ' . $_SERVER['REQUEST_METHOD'] . ' <br>';
echo '$_SERVER[\'REQUEST_URI\'] => ' . $_SERVER['REQUEST_URI'] . ' <br>';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       echo '=>' . $_SERVER['REQUEST_METHOD'] . '<=<br>';
}
elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
       echo '=>' . $_SERVER['REQUEST_METHOD'] . '<=<br>';
}
elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
       echo '=>' . $_SERVER['REQUEST_METHOD'] . '<=<br>';
}
elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
       echo '=>' . $_SERVER['REQUEST_METHOD'] . '<=<br>';
}
else   echo 'Metodo nao tratado =>' . $_SERVER['REQUEST_METHOD'] . '<=<br>';

/*
exit();
*/
//curl https://api.mercadolibre.com/currencies/ARS?callback=foo
//criando o recurso cURL
$json = array (1 => 'UM', 2 => 'DOIS', 3 => ['a','b','c']);
$cr = curl_init();
$url = "https://api.mercadolibre.com/categories/MLB1459";

//definindo a url de busca 
curl_setopt($cr, CURLOPT_URL, $url);
 
//definindo a url de busca 
curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
 
//definindo uma variável para receber o conteúdo da página...
$json_file = curl_exec($cr);
 
//fechando-o para liberação do sistema.
curl_close($cr); //fechamos o recurso e liberamos o sistema...
 
$json_str = json_decode($json_file, true);

/*$cont = 0;

function verArray($array) {
  foreach ($array as $key => $value) {
	if (is_array($value)) {
        $loop = $_array;
      
		verArray($value);
	}         
    $_array = $array;
	if (is_array($_array)) {
        $loop = $_array;
		$cont += 1;
		echo 'E array: ' . $cont . '<br>';
		verArray($loop);
	}
	else {
		echo $_array . '<br>';   
	}
}

foreach ($json_str as $key => $value) {
	verArray($value);
}         


exit();
*/
//mostrando o conteúdo.

function test_print($item, $key)
{
    echo "$key  :  $item <br>";
}

array_walk_recursive($json_str, 'test_print');

exit();






foreach ($json_str as $key => $value) {
	if (is_array($value)){
		foreach ($value as $k => $v) {
			echo $k . ':' . $v .'<br>';
		} 
	}
	else {
	   echo $key . ' => ' . $value . '<br>';
	}
}

//$json_file = file_get_contents("https://api.mercadolibre.com/currencies?ids=ARS,USD");


//echo $retorno;
//for($i=0; $i<=count($retorno); $i++){
//    echo $retorno[$i]['id'];
//}

exit();
?>

<?
$txt		= "contador.txt";
$arquivo	= fopen($txt,"a+");
$visitas	= fgets($arquivo,1024);
fclose($arquivo);
 
$arquivo	= fopen($txt,"r+");
$visitas	= $visitas + 1;
fwrite($arquivo,$visitas);
fclose($arquivo);
   
echo "Esta página foi visitada $visitas vezes";
?>


 <?php

/*

    define ('QUALQUER', 1);
	// Get curl version array
	$version = curl_version();
    
	var_dump($version);
	echo '<br>';

	echo $version['features'] . '<br>';


	// These are the bitfields that can be used 
	// to check for features in the curl build
	$bitfields = Array(
	            'CURL_VERSION_IPV6', 
	            'CURL_VERSION_KERBEROS4', 
	            'CURL_VERSION_SSL', 
	            'CURL_VERSION_LIBZ',
	            'BABAQUISE',
	            'CURL_VERSION_SSL',
	            'QUALQUER' 
	            );


	foreach($bitfields as $feature)
	{
	    echo '$feature => ' . $feature . ' <br> $version => ' . $version['features'] . '<br> constant() => ' . constant($feature) . '<br>';
		    echo $feature . ($version['features'] & constant($feature) ? ' matches' : ' does not match') . '<br>';
	    echo PHP_EOL;
	}
*/
?>

<?php
	$txt	 = '/tmp/contador.txt';
	$arquivo = fopen($txt, 'a+');
	$visitas = fgets($arquivo,1024);
	fclose($arquivo);
	$arquivo = fopen($txt,"r+");
	$visitas = $visitas + 1;
	fwrite($arquivo,$visitas);
	fclose($arquivo);
	   
	echo "Esta página foi visitada $visitas vezes <br>";


	$queryString = array(
	    'cep' => '08582190',
	);

	$url = 'http://lnv-vithal/cepaberto.php?';

	$ch = curl_init();
 	curl_setopt($ch, CURLOPT_URL, $url . http_build_query($queryString));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close($ch);
    var_dump(http_build_query($queryString));
    var_dump($data);
?>

	<script src="jquery.js"></script>
	<script>
		$(document).ready(function(){
 		    $("#pont0").html("LI");
 		});
    </script>
 
</body>
</html>




<!-- Fim do programa -->