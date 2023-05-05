<?php include("processament.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enquesta de satisfacció</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estils.css">
</head>
<body>
	<h1>Enquesta de satisfacció</h1>
	<form method="post" action="#resultat">
		<div>
			<label>Valoració del comercial:</label>
			<input type="number" value='<?php
				echo(isset($_POST['valComercial']))?$_POST['valComercial']:"";
			?>' name="valComercial" max="5" min="1" placeholder="Valoració de l'1 al 5">
		</div>
		<div>
			<label>Valoració del servei de comandes i magatzem:</label>
			<input type="number" value='<?php
				echo(isset($_POST['valComandesMagatzem']))?$_POST['valComandesMagatzem']:"";
			?>' name="valComandesMagatzem" max="5" min="1" placeholder="Valoració de l'1 al 5">
		</div>
		<div>
			<label>El període d'entrega és pactat amb el seu comercial?</label>
			<input type="number" value='<?php
				echo(isset($_POST['valPeriodeEntrega']))?$_POST['valPeriodeEntrega']:"";
			?>' name="valPeriodeEntrega" max="5" min="1" placeholder="Valoració de l'1 al 5">
		</div>
		<div>
			<label>Valoració de la qualitat dels productes:</label>
			<input type="number" value='<?php
				echo(isset($_POST['valQualitat']))?$_POST['valQualitat']:"";
			?>' name="valQualitat" max="5" min="1" placeholder="Valoració de l'1 al 5">
		</div>
		<div>
			<label>Valoració relació qualitat-preu:</label>
			<input type="number" value='<?php
				echo(isset($_POST['valRelQualitatPreu']))?$_POST['valRelQualitatPreu']:"";
			?>' name="valRelQualitatPreu" max="5" min="1" placeholder="Valoració de l'1 al 5">
		</div>
		<div>
			<label>Es respecten els preus establerts amb el comercial?</label>
			<input type="number" value='<?php
				echo(isset($_POST['valPreusEstablerts']))?$_POST['valPreusEstablerts']:"";
			?>' name="valPreusEstablerts" max="5" min="1" placeholder="Valoració de l'1 al 5">
		</div>
		<div>
			<label>Valoració del servei de transport i entrega:</label>
			<input type="number" value='<?php
				echo(isset($_POST['valServeiTransport']))?$_POST['valServeiTransport']:"";
			?>' name="valServeiTransport" max="5" min="1" placeholder="Valoració de l'1 al 5">
		</div>
		<div>
			<label>El producte arriba en bon estat?</label>
			<input type="number" value='<?php
				echo(isset($_POST['valBonEstat']))?$_POST['valBonEstat']:"";
			?>' name="valBonEstat" max="5" min="1" placeholder="Valoració de l'1 al 5">
		</div>
		<input type="submit" name="boto"><br><br>
		<?php
			if(isset($_POST['boto'])){
				if(!($pregunta1 == "" || $pregunta2 == "" || $pregunta3 == "" || $pregunta4 == "" || $pregunta5 == "" || $pregunta6 == "" || $pregunta7 == "" || $pregunta8 == "")){

					if ($pregunta1<1 || $pregunta1>5){
						echo "Error en la pregunta 1";
					}
					else if ($pregunta2<1 || $pregunta2>5){
						echo "Error en la pregunta 2";
					}
					else if ($pregunta3<1 || $pregunta3>5){
						echo "Error en la pregunta 3";
					}
					else if ($pregunta4<1 || $pregunta4>5){
						echo "Error en la pregunta 4";
					}
					else if ($pregunta5<1 || $pregunta5>5){
						echo "Error en la pregunta 5";
					}
					else if ($pregunta6<1 || $pregunta6>5){
						echo "Error en la pregunta 6";
					}
					else if ($pregunta7<1 || $pregunta7>5){
						echo "Error en la pregunta 7";
					}
					else if ($pregunta8<1 || $pregunta8>5){
						echo "Error en la pregunta 8";
					}
					else{
						$mitjana = ($pregunta1 + $pregunta2 + $pregunta3 + $pregunta4 + $pregunta5 + $pregunta6 + $pregunta7 + $pregunta8)/8;
						echo "<div id='resultat'><p>Moltes gràcies per colaborar.<br>El valor mig de la valoració és ".$mitjana."</p></div>";
					}
				}
				else{
					echo "Respongui totes les preguntes";
				}
			}	
				
		?>
	</form>
</body>
</html>