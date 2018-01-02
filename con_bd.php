<?php
	require_once("con_mysql.php");
?>

<?php
    $page_title = "Teste de conexao ao BD1";
	require_once "header.php"; 
?>

<?php
	if ( isset($_POST["submit"]) ){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}

?>



<main class="">


	<header>
	
	</header>
	
	<nav>
		
	</nav>
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    	<select name="estados">
	
	<?php
		$sql = "SELECT * FROM SRA ORDER BY Nome";
		$query = mysqli_query($dbc,$sql);
        
	    while ($result = mysqli_fetch_assoc($query)) {
	    	$estadoID = $result['Matricula'];
	?>
			<option value="<?php echo $estadoID; ?>"><?php echo utf8_encode($result["Nome"]); ?></option>
	<?php
	    }
	?>
		</select>
		<input type="submit" name="submit" value="Enviar dados">
	</form>


	<footer>
			
	</footer>
</main>



<?php
        echo " Registros = " . mysqli_num_rows($query) . "<br>";
        print($query);
    mysqli_close($dbc);

	require_once "footer.php"; 
?>
