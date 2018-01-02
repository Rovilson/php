<!DOCTYPE html>
<html lang="br" >
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Instrucoes PHP</title>
</head>
<body>

<?php
    
    switch ($dia = date("w")) {
    case 0:
        echo "domingo";
        break;
    case 1:
        echo "segunda";
        break;
    case 2:
        echo "terca";
        break;
    case 3:
        echo "quarta";
        break;
    case 4:
        echo "quinta";
        break;
    case 5:
        echo "sexta";
        break;
    case 6:
        echo "sabado";
        break;
    }
    
    $content = http_build_query(array(
        'codigo' => '21',
        'field2' => 'Value2',
        'field3' => 'Value3',
    ));
    
    $context = stream_context_create(array(
        'http' => array(
            'method'  => 'POST',
            'content' => $content,
        )
    ));
    echo '<pre>';
    print_r($content);
    echo '<br>';

    print_r($context);
    echo '<br>';
    
    $url = 'http://localhost/mostra.php';
    
    $result = file_get_contents($url, null, $context);
    print_r($result);
    
    $fp = fopen($url, 'r', false, $context);
    fpassthru($fp);
    fclose($fp);

    print_r($fp);
    echo '<br>';
    echo '<br>';

    echo '</pre>';
    
    
    
    
    
    
$coisas = "uma banana e uma fruta muito saborosa";
$ca = explode(" ", $coisas);
$elements = array('a', 'b', 'c',1,2,3,4,5);
$salario = 2.49850001;

echo "Elementos: " . count($elements) . '<br>';
echo "Elementos.CA: " . count($ca) . '<br>';
echo "Elementos.Coisas: " . count($coisas) . '<br>';

echo "<ul><li>" . implode("</li><li>", $elements) . "</li></ul>";

echo implode(" or ", $ca);

print_r($ca) . '<br>';

echo '<br>';
echo "Arredondando $salario: " . round($salario) . '<br>';
echo "Arredondando $salario: " . round($salario,2) . '<br>';

$max = 5;
$varios = [];
for ($i = 0; $i < $max; $i++) { 
	$varios[] = rand();
}

echo "<pre>";
print_r($varios);
echo(rand()) . '<br>'; 

$assoc = array ( "nome" => "Rovilson", "cargo" => "Analista", "salario" => 3500 );
echo $assoc["nome"] . '<br>';

$nome;
$end = null;
$res = ' ';
echo "Null?" . is_null($nome). '<br>' ;
echo "Null?" . is_null($end). '<br>' ;

if ($nome) echo '$nome -> verdadeiro<br>';
else echo '$nome -> falso<br>';

if ($end) echo '$end -> verdadeiro<br>';
else echo '$end -> falso<br>';

if ($res) echo '$res -> verdadeiro<br>';
else echo '$res -> falso<br>';

$a = 3;
$b = 2;
$c = 5;
if ($a > $b) echo "$a e maior que $b <br>";
elseif ($a < $b) echo "$a e menor que $b <br>";
else echo "$a e igual a $b <br>";

if ($a > $b && $a > $c) echo "$a  1e o maior <br>";
if ($a > $b || $a > $c) echo "$a 2e o maior <br>";

echo $diaria = number_format(300/23,2);
echo $diaria;

date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_TIME, "pt_BR");
$agora = getdate();

echo strftime('%G') . strftime('%B') . strftime('%d');

echo "<br>";


// Fornece: você comeria pizza, cerveja e sorvete todos os dias
$frase  = "você comeria frutas, vegetais, e fibra todos os dias.(desnatado)";
$saudavel = array("frutas", "vegetais", "fibra", "desnatado");
$saboroso   = array("pizza", "cerveja", "sorvete", "goiabada");

print_r($novafrase = str_replace($saudavel, $saboroso, $frase));
echo "<br>";
define(HTTP_CATALOG, "http://");

echo $data['auth'] = str_replace(array('https','http'),'https',HTTP_CATALOG.'mercadolivre_auth',$co) . "<br>";
echo "$co <br>";

$erro = ($data['auth']) ? : "nao setado";
print_r($erro);


		  $data = array();

		  $data['text_import_ml_order']        =  ('text_import_ml_order');
		  $data['text_sync_ml_product']        =  ('text_sync_ml_product');
		  $data['button_import']     		   = ('button_import');
		  $data['button_sync']    			   = ('button_sync');
		  $data['button_close']     		   = ('button_close');
		  $data['entry_date_state']      	   = ('entry_date_state');
		  $data['entry_date_end']       	   = ('entry_date_end');
		  $data['button_show_orders']          = ('button_show_orders');
		  $data['column_order_id']        		= ('column_order_id');
		  $data['column_order_date']        	= ('column_order_date');
		  $data['column_buyer']      			= ('column_buyer');
		  $data['column_total']        			= ('column_total');
		  $data['text_no_results']       		= ('text_no_results');
		  $data['text_date_hint']       		= ('text_date_hint');
		  $data['column_product_id']       		= ('column_product_id');
		  $data['column_product_title']   	    = ('column_product_title');
		  $data['column_product_price']     	= ('column_product_price');
		  $data['column_product_status']        = ('column_product_status');
		  $data['button_show_products']        = ('button_show_products');
		  $data['text_search_keyword']        = ('text_search_keyword');
		  $data['text_opencart_product']        = ('text_opencart_product');

		  $data['orders'] = array("o1","o2","o3","o4","o5");
		  $data['products'] = array("p1","p2","p3","p4");
		  $data['token'] ='token';
print_r($data);

echo "-----------------------------------------------------<br>";


class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()<br>";
    }
}

class OtherClass extends MyClass
{
    // Sobrescreve e definição da classe estendida
    public function myFunc()
    {
        // Mas ainda consegue chamar o método na classe herdada
        parent::myFunc();
        echo "OtherClass::myFunc()<br>";
    }
}

$class = new OtherClass();
$class->myFunc();


echo "</pre>";
?>

</body>
</html>