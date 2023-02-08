<html lang="en">
	<head>
		<title>&mdash; Calculo Escribo &mdash; </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="../css/estilo.css" rel="stylesheet"/>
	</head>
	<body>
<?php
	
	// ------------------------------------------------------------------------------------------------
	//
	//  Responsável por realizar o calculo e soma de todos os números múltiplos de 5 e 3, inferiores a $valor
	//
	// ------------------------------------------------------------------------------------------------

		// Armazena o valor passado pelo usuario
		$valor = $_POST["valor"];
		
		// Valor de inicio
		$resultado = 0;

		// Verificando se o valor é inteiro
		if(is_int($valor)){
			echo "<div id='form' align='center'><Center>{$valor} não é um número inteiro <br><br><a href='../index.html'>Voltar</a></div></Center> ";
		}
		else{
	
			// loop do indice informado
			for($i = 0; $i < $valor; $i++){
			
				// Verificação se o valor pode ser divisível por 3 ou 5
				if(!($i % 3) || !($i % 5)){
				
					// Caso o valor seja divisível, incrementa ele ao resultado
					$resultado += $i;
					
				}

			}

			// Resultado da soma
			echo "<div id='form' align='center'><Center>" . $resultado. "<br><br><a href='../index.html'>Voltar</a></div></Center> ";
			
		}
		
?>	
	</body>
</html>
