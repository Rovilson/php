<!doctype html>
<html>
	<meta charset="utf-8">
	<title>PHP com AJAX/JQuery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div id="porID"></div>
<div name="porName"></div>
<h6><div class="porClass"></div></h6>
<h1></h1>

<div id="divisao">
	<select id="moeda"></select><span class="msg_moeda"></span>
	<select id="listing"></select><span class="msg_listing"></span>
	<select id="sites"></select><span class="msg_sites"></span>
	<select id="user"></select><span class="msg_moeda2"></span>
	<div id="status"></div>
	<div id="xhr"></div>
	<button class="btn" id="botao" name="botao">Hide</button>
</div>


	<script src="jquery.js"></script>
	<script>
		$("#porID").html("Fora");

		var url = "https://api.mercadolibre.com/sites";

		$.get(url,
		    function (data,status,xhr) {
				var elemento = "";
				$.each(data,function(chave,valor) {
					elemento += '<option value="' + valor.id + '">' + valor.name + '</option>';	
				});
				$("#sites").html(elemento);
				$(".msg_sites").html("Paises").css("background-color","red").css("color","white");
				$("#status").html(status);
				console.log(status);
			},
			"json"
		);

		$("#porID").html("Fora");

		$.get("https://api.mercadolibre.com/currencies",
			function (data,status,xhr) {
				var elemento = "";
				$.each(data,function(chave,valor) {
					elemento += '<option value="' + valor.id + '">' + valor.description + '</option>';	
				});
				$("#moeda").html(elemento);
			},
			"json"
		);

		$.get("https://api.mercadolibre.com/sites/MLB/listing_exposures",
			function (data,status,xhr) {
				var elemento = "";
				$.each(data,function(chave,valor) {
					elemento += '<option value="' + valor.id + '">' + valor.name + '</option>';	
				});
				$("#listing").html(elemento);
			},
			"json"
		);

		$.get("https://jsonplaceholder.typicode.com/users",
			function (data,status,xhr) {
				console.log(data);
				var elemento = "";
				$.each(data,function(chave,valor) {
					console.log(chave + "=" + valor);
					elemento += '<option value="' + valor.id + '">' + valor.company[0] + '</option>';	
				});
				$("#user").html(elemento);
			},
			"json"
		);



    $("#botao").click(function(){
        $(this).hide();
    });

	</script>


</body>
</html>


