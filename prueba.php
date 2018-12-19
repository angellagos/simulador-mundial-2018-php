<!DOCTYPE html>
	<html>
		<head>
			<title>Resultados</title>
			<meta charset="UTF-8">
			<style>
				td {
				text-align:center;
				border=0;
				color:white;
				bgcolor:red;
				}
				table {
					border-radius: 10px 10px 10px 10px; 
					border: white 5px solid;
					
				}
				body {
					background-image: url('imagenes/fondo2.jpg');
					background-repeat: no-repeat;
					background-attachment: fixed;
					
					background-size: cover;
				}
				
				.blanco-negro {
				  color: white;
				  background-color: black;
				}
			</style>
			<link rel="icon" href="imagenes/copa.png"> 
		</head>
	
		<body style="color:white;">
			<?php
				// $grupos es un array que contendra 8 letras, y cada letra tambien
				//	sera un array que contendra a los paises participantes agrupados
				// segun el modelo de la pagina de la FIFA
				$grupos = array(
					"A" => array("Rusia","Arabia Saudita", "Egipto", "Uruguay"), 
					"B" => array("Portugal", "España", "Marruecos", "Irán"), 
					"C" => array("Francia", "Australia", "Perú", "Dinamarca"), 
					"D" => array("Argentina", "Islandia", "Croacia", "Nigeria"), 
					"E" => array("Brasil", "Suiza", "Costa Rica", "Serbia"), 
					"F" => array("Alemania", "México", "Suecia", "República de Corea"), 
					"G" => array("Bélgica","Panamá", "Túnez", "Inglaterra"), 
					"H" => array("Polonia", "Senegal", "Colombia", "Japón")
					);
				
				if ($_POST['pais'] == 'Iran') {
					$_POST['pais'] = 'Irán';
				}
				if ($_POST['pais'] == 'Peru') {
					$_POST['pais'] = 'Perú';
				}

				if ($_POST['pais'] == 'Mexico') {
					$_POST['pais'] = 'México';
				}
				if ($_POST['pais'] == 'Republica de Corea') {
					$_POST['pais'] = 'República de Corea';
				}
				
				if ($_POST['pais'] == 'Belgica') {
					$_POST['pais'] = 'Bélgica';
				}
				if ($_POST['pais'] == 'Panama') {
					$_POST['pais'] = 'Panamá';
				}
				if ($_POST['pais'] == 'Tunez') {
					$_POST['pais'] = 'Túnez';
				}
				if ($_POST['pais'] == 'Japon') {
					$_POST['pais'] = 'Japón';
				}
				
				
				
				$resultados = array(32);
				$clasificados = array(16);
				
				$grupo;	//	Tomara el valor de A, B, C, D, E ,F ,G , H

				$primero; 
				$segundo; 
				$tercero; 
				$cuarto;
				
				$campeon;
				// Tomaran el valor de un array que contendra los nombres de equipo
				// victorias, empates y derrotas
				// goles a favor, goles en contra, diferencia de goles, puntos
				$A;
				$B;
				$C;
				$D;
				
				// Contendran los puntos de los equipos segun los array
				$ptA;
				$ptB;
				$ptC;
				$ptD;
				
				// Contendran los goles a favor de los equipos segun los array
				$gfA;
				$gfB;
				$gfC;
				$gfD;
				
				// Contendran la diferencia de goles de los equipos segun los array
				$dgA;
				$dgB;
				$dgC;
				$dgD;
				
				// Contendran los puntos de los equipos segun quien es mayor o menor
				$ptPrimero;
				$ptSegundo;
				$ptTercero;
				$ptCuarto;
				
				// Contendran los goles a favor de los equipos segun quien es mayor o menor
				$gfPrimero;
				$gfSegundo;
				$gfTercero;
				$gfCuarto;
				
				// Contendran la diferencia de goles de los equipos segun quien es mayor o menor
				$dgPrimero;
				$dgSegundo;
				$dgTercero;
				$dgCuarto;
				
				
				$golesAFavorA = 0;
				$golesAFavorB = 0;
				$golesAFavorC = 0;
				$golesAFavorD = 0;
				$golesEnContraA = 0;
				$golesEnContraB = 0;
				$golesEnContraC = 0;
				$golesEnContraD = 0;
				
				
				$puntosA = 0;
				$puntosB = 0;
				$puntosC = 0;
				$puntosD = 0;
				
			
				$victoriaLadoB = 0;
				$empateLadoB = 0;
				$derrotaLadoB = 0;
				$puntosLadoB = 0;
				$golesAFavorLadoB = 0;
				$golesEnContraLadoB = 0;
				
				$victoria = 0;
				$empate = 0;
				$derrota = 0;
				$puntos = 0;
				$golesAFavor = 0;
				$golesEnContra = 0;
				$diferenciaDeGoles = 0;
				
				$victoriaA = 0;
				$victoriaB = 0;
				$victoriaC = 0;
				$victoriaD = 0;
				
				
				$empateA = 0;
				$empateB = 0;
				$empateC = 0;
				$empateD = 0;
				
				$derrotaA = 0;
				$derrotaB = 0;
				$derrotaC = 0;
				$derrotaD = 0;
				
				// Contendran los resultados del equipo del lado izquierdo(A)
				// y derecho(B)
				$marcadorA = 0;
				$marcadorB = 0;
				
				//inicio
				
				$x = 1;	
				
				
				//	Creamos un bucle que ira del 0 al 7, esto nos permitira
				//	usar los 8 valores del array $grupos 
				for ($contador1=0; $contador1<=7; $contador1++) {
					
					//Usamos un switch para que por cada valor que ingrese
					switch ($contador1) {
						case 0:
							$grupo = "A";
							break;
						case 1:
							$grupo = "B";
							break;
						case 2:
							$grupo = "C";
							break;
						case 3:
							$grupo = "D";
							break;
						case 4:
							$grupo = "E";
							break;
						case 5:
							$grupo = "F";
							break;
						case 6:
							$grupo = "G";
							break;
						case 7:
							$grupo = "H";
							break;
					}
					
					//	Creamos otro bucle que ira del 0 al 3, esto nos permitira
					//	usar los 4 valores del array $grupos con cualquier indice 
					// 	ya sea A, B, C, D, E, F, G, H
					for ($team = 0; $team <=3; $team++) {
						//	Si es que el pais que escogimos es igual que alguno
						//	de los paises del array $grupos haremos que se cree una
						//	tabla con los paises
						
							
							$GRUPO = $grupo;	//	Guardamos el valor del grupo en el que esta nuestro pais
							
							
							echo '<h1>GRUPO ' . $grupo . '</h1>';	//	Imprimimos un titulo con el valor del grupo
							
							//	Creamos una tabla y dos celdas
							?>
							<table border=1 height=50 width=500 cellspacing=0 background="imagenes/fondo4.jpg">	
								<tr>
									
									<?php
							foreach ($grupos[$grupo] as $id) {	
									?>	
								<tr>
											<td width=120><img src="imagenes/Banderas 2/<?php echo $id;?>.png" width="120" height=60></td>
											<td><font size=7><?php echo $id . '</font></td>
										 </tr>';
							}
							echo '</table>';
							
							
							$team = 0;
							echo '<br>';
							//Primer equipo contra los otros 3
							while ($x <= 3) {
								
								if ($grupos[$grupo][$team] == $_POST['pais']) {
									$marcadorA=$_POST["marcadorA$x"];
								}
								else{
									$marcadorA=rand(0,5);
								}
								if ($grupos[$grupo][$team + $x] == $_POST['pais']){
									$marcadorB=$_POST["marcadorA1"];
								}
								else {
									$marcadorB=rand(0,5);
								}
								
						
								$golesAFavorA = $marcadorA + $golesAFavorA;
								$golesAFavorLadoB = $marcadorB;
								$golesEnContraA = $marcadorB + $golesEnContraA;

								?>
									<table border=1 cellspacing=0 height=60 width=500>
										<tr>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $grupos[$grupo][$team];?>.png" width="70" height=60></td>
											<td width=130><?php echo $grupos[$grupo][$team]?></td>
											<td width=100><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=130><?php echo $grupos[$grupo][$team + $x]?></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $grupos[$grupo][$team+ $x];?>.png" width="70" height=60></td>
										</tr>
									</table>
								<?php
								if ($marcadorA > $marcadorB) {
									$victoriaA = $victoriaA + 1;
									$derrotaLadoB = $derrotaLadoB + 1;
									echo '<br>';
								}
								elseif ($marcadorA < $marcadorB) {
									echo '<br>';
									$derrotaA = $derrotaA + 1;
									$victoriaLadoB = $victoriaLadoB + 1;
								}
								else {
									echo '<br>';
									$empateA = $empateA + 1;
									$empateLadoB = $empateLadoB + 1;
								}
								
								switch ($x) {
									case 1:
										$victoriaB = $victoriaLadoB;
										$empateB = $empateLadoB;
										$derrotaB = $derrotaLadoB;
										$golesAFavorB = $golesAFavorLadoB;
										$golesEnContraB = $marcadorA;
										break;
									case 2:
										$victoriaC = $victoriaLadoB;
										$empateC = $empateLadoB;
										$derrotaC = $derrotaLadoB;
										$golesAFavorC = $golesAFavorLadoB;
										$golesEnContraC = $marcadorA;
										break;
									case 3:
										$victoriaD = $victoriaLadoB;
										$empateD = $empateLadoB;
										$derrotaD = $derrotaLadoB;
										$golesAFavorD = $golesAFavorLadoB;
										$golesEnContraD = $marcadorA;
										break;
								}
								//Volvemos a iniciar a todo con respecto al lado b
								$victoriaLadoB = 0;
								$empateLadoB = 0;
								$derrotaLadoB = 0;
								$puntosLadoB = 0;
								$x = $x + 1;
							}
							
							$team=1;
							$x=1;
							
							//Segundo equipo contra los otros 2 restantes
							while ($x<=2) {
								
								if ($grupos[$grupo][$team] == $_POST['pais']) {
									$y = $x + 1;
									$marcadorA=$_POST["marcadorA$y"];
								}
								else{
									$marcadorA=rand(0,5);
								}
								if ($grupos[$grupo][$team + $x] == $_POST['pais']){
									$marcadorB=$_POST["marcadorA2"];
								}
								else {
									$marcadorB=rand(0,5);
								}
						
								$golesAFavorB = $golesAFavorB + $marcadorA;
								$golesAFavorLadoB = $marcadorB;
						
								$golesEnContraB = $marcadorB + $golesEnContraB;
						
							
								?>
									<table border=1 cellspacing=0 height=50 width=500>
										<tr>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $grupos[$grupo][$team];?>.png" width="70" height=60></td>
											<td width=130><?php echo $grupos[$grupo][$team]?></td>
											<td width=100><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=130><?php echo $grupos[$grupo][$team + $x]?></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $grupos[$grupo][$team + $x];?>.png" width="70" height=60></td>
										</tr>
									</table>
								<?php
								if ($marcadorA > $marcadorB) {
									$victoriaB = $victoriaB + 1;
									$derrotaLadoB = $derrotaLadoB + 1;

									echo '<br>';
								}
								elseif ($marcadorA < $marcadorB) {
									$derrotaB = $derrotaB + 1;
									$victoriaLadoB = $victoriaLadoB + 1;
				
									echo '<br>';
								}
								else {
		
									$empateB = $empateB + 1;
									$empateLadoB = $empateLadoB + 1;
						
									echo '<br>';
								}
								switch ($x) {
									case 1:
										$victoriaC = $victoriaLadoB + $victoriaC;
										$empateC = $empateLadoB + $empateC;
										$derrotaC = $derrotaLadoB + $derrotaC;
										$golesAFavorC = $golesAFavorC + $golesAFavorLadoB;
										$golesEnContraC = $marcadorA + $golesEnContraC;
										break;
									case 2:
										$victoriaD = $victoriaLadoB + $victoriaD;
										$empateD = $empateLadoB + $empateD;
										$derrotaD = $derrotaLadoB + $derrotaD;
										$golesAFavorD = $golesAFavorD + $golesAFavorLadoB;
										$golesEnContraD = $marcadorA + $golesEnContraD;
										break;
								}
								$victoriaLadoB = 0;
								$empateLadoB = 0;
								$derrotaLadoB = 0;
								$puntosLadoB = 0;
								$x = $x + 1;
							}
							
							$team = 2;
							$x = 1;
						

							//Tercer equipo contra el restante
							while ($x<=1) {

								if ($grupos[$grupo][$team] == $_POST['pais']) {
									$marcadorA=$_POST["marcadorA3"];
								}
								else{
									$marcadorA=rand(0,5);
								}
								if ($grupos[$grupo][$team + $x] == $_POST['pais']){
									$marcadorB=$_POST["marcadorA3"];
								}
								else {
									$marcadorB=rand(0,5);
								}
						
						
								$golesAFavorC = $golesAFavorC + $marcadorA;
								$golesAFavorD = $golesAFavorD + $marcadorB;
						
								$golesEnContraC = $marcadorB + $golesEnContraC;
								$golesEnContraD = $marcadorA + $golesEnContraD;
		
								
								?>
									<table border=1 cellspacing=0 height=50 width=500>
										<tr>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $grupos[$grupo][$team];?>.png" width="70" height=60></td>
											<td width=130><?php echo $grupos[$grupo][$team]?></td>
											<td width=100><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=130><?php echo $grupos[$grupo][$team + $x]?></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $grupos[$grupo][$team + $x];?>.png" width="70" height=60></td>
										</tr>
									</table>
								<?php
								if ($marcadorA > $marcadorB) {
							
									$victoriaC = $victoriaC + 1;
									$derrotaD = $derrotaD + 1;
									$puntosC = $puntosC + 3;
									$puntosD = $puntosD + 0;
							
									echo '<br>';
								}
								elseif ($marcadorA < $marcadorB) {
							
									$derrotaC = $derrotaC + 1;
									$victoriaD = $victoriaD + 1;
									$puntosC = $puntosC + 0;
									$puntosD = $puntosD + 3;
							
									echo '<br>';
								}
								else {
							
									$empateC = $empateC + 1;
									$empateD = $empateD + 1;
									$puntosC = $puntosC + 1;
									$puntosD = $puntosD + 1;
							
									echo '<br>';
								}
							$x=$x+1;
						
							}
							
							
					
							for ($team = 0; $team <= 3; $team++) {
								switch ($team) {
									case 0:
										$victoria = $victoriaA;
										$empate = $empateA;
										$derrota = $derrotaA;
										$puntos = ($victoria*3)+($empate*1)+($derrota*0);
										$golesAFavor = $golesAFavorA;
										$golesEnContra = $golesEnContraA;
										break;
									case 1:
										$victoria = $victoriaB;
										$empate = $empateB;
										$derrota = $derrotaB;
										$golesAFavor = $golesAFavorB;
										$golesEnContra = $golesEnContraB;
										$puntos = ($victoria*3)+($empate*1)+($derrota*0);
										break;
									case 2:
										$victoria = $victoriaC;
										$empate = $empateC;
										$derrota = $derrotaC;
										$golesAFavor = $golesAFavorC;
										$golesEnContra = $golesEnContraC;
										$puntos = ($victoria*3)+($empate*1)+($derrota*0);
										break;
									case 3:
										$victoria = $victoriaD;
										$empate = $empateD;
										$derrota = $derrotaD;
										$golesAFavor = $golesAFavorD;
										$golesEnContra = $golesEnContraD;
										$puntos = ($victoria*3)+($empate*1)+($derrota*0);
										break;
								}
						
								$diferenciaDeGoles = $golesAFavor - $golesEnContra;
							
								$resultados[$grupos[$grupo][$team]] = array($grupos[$grupo][$team],3, $victoria, $empate, $derrota, $golesAFavor, $golesEnContra, $diferenciaDeGoles, $puntos);
								
							}
						
							$x=1;

							$victoriaA = 0;
							$empateA = 0;
							$derrotaA = 0;
							$puntosA = 0;
							$golesAFavorA = 0;
							$golesEnContraA = 0;
							
							$A = $resultados[$grupos[$grupo][0]];
							$B = $resultados[$grupos[$grupo][1]];
							$C = $resultados[$grupos[$grupo][2]];
							$D = $resultados[$grupos[$grupo][3]];
						
							$contador =0;
							foreach ($A as $id) {
								if ($contador ==5) {
									$gfA = $id;
								}
								if ($contador ==7) {
									$dgA = $id;
								}
								if ($contador ==8) {
									$ptA = $id;
								}
								$contador = $contador + 1;
							}
							echo '<br>';
							
							$contador =0;
							foreach ($B as $id) {
								if ($contador ==5) {
									$gfB = $id;
								}
								if ($contador ==7) {
									$dgB = $id;
								}
								if ($contador ==8) {
									$ptB = $id;
								}
								$contador = $contador + 1;
							}
							echo '<br>';
							
							$contador =0;
							foreach ($C as $id) {
								if ($contador ==5) {
									$gfC = $id;
								}
								if ($contador ==7) {
									$dgC = $id;
								}
								if ($contador ==8) {
									$ptC = $id;
								}
								$contador = $contador + 1;
							}
							echo '<br>';
							
							$contador =0;
							foreach ($D as $id) {
								if ($contador ==5) {
									$gfD = $id;
								}
								if ($contador ==7) {
									$dgD = $id;
								}
								if ($contador ==8) {
									$ptD = $id;
								}
								$contador = $contador + 1;
							}
							
							//COMIENZO :'V
							
							if ($ptA > $ptB) {
								$primero = $A;
								$ptPrimero = $ptA;
								$gfPrimero = $gfA;
								$dgPrimero = $dgA;
		
								$segundo = $B;
								$ptSegundo = $ptB;
								$gfSegundo = $gfB;
								$dgSegundo = $dgB;	
							}
							else if ($ptA < $ptB) {
								$primero = $B;
								$ptPrimero = $ptB;
								$gfPrimero = $gfB;
								$dgPrimero = $dgB;
		
								$segundo = $A;
								$ptSegundo = $ptA;
								$gfSegundo = $gfA;
								$dgSegundo = $dgA;
							}
							else if ($ptA == $ptB) {
								if ($dgA > $dgB) {
									$primero = $A;
									$ptPrimero = $ptA;
									$gfPrimero = $gfA;
									$dgPrimero = $dgA;
		
									$segundo = $B;
									$ptSegundo = $ptB;
									$gfSegundo = $gfB;
									$dgSegundo = $dgB;
								}
								else if ($dgA < $dgB) {
									$primero = $B;
									$ptPrimero = $ptB;
									$gfPrimero = $gfB;
									$dgPrimero = $dgB;
		
									$segundo = $A;
									$ptSegundo = $ptA;
									$gfSegundo = $gfA;
									$dgSegundo = $dgA;
								}
								else if($dgA == $dgB) {
									if ($gfA > $gfB) {
										$primero = $A;
										$ptPrimero = $ptA;
										$gfPrimero = $gfA;
										$dgPrimero = $dgA;
			
										$segundo = $B;
										$ptSegundo = $ptB;
										$gfSegundo = $gfB;
										$dgSegundo = $dgB;
									}
									else if ($gfA < $gfB) {
										$primero = $B;
										$ptPrimero = $ptB;
										$gfPrimero = $gfB;
										$dgPrimero = $dgB;
		
										$segundo = $A;
										$ptSegundo = $ptA;
										$gfSegundo = $gfA;
										$dgSegundo = $dgA;
									}
									else if ($gfA == $gfB) {
										$sorteo = rand(0,5);
										if ($sorteo < 3) {
											$primero = $A;
											$ptPrimero = $ptA;
											$gfPrimero = $gfA;
											$dgPrimero = $dgA;
					
											$segundo = $B;
											$ptSegundo = $ptB;
											$gfSegundo = $gfB;
											$dgSegundo = $dgB;
										}
										else {
											$primero = $B;
											$ptPrimero = $ptB;
											$gfPrimero = $gfB;
											$dgPrimero = $dgB;
					
											$segundo = $A;
											$ptSegundo = $ptA;
											$gfSegundo = $gfA;
											$dgSegundo = $dgA;
										}
									}
								}
							}
	
							if ($ptPrimero > $ptC) {
								$primero = $primero;
								$ptPrimero = $ptPrimero;
		
								if ($ptSegundo > $ptC) {
									$segundo = $segundo;
									$ptSegundo = $ptSegundo;
			
									$tercero = $C;
									$ptTercero = $ptC;
									$gfTercero = $gfC;
									$dgTercero = $dgC;
								}
								else if ($ptSegundo < $ptC) {
									$tercero = $segundo;
									$ptTercero = $ptSegundo;
									$gfTercero = $gfSegundo;
									$dgTercero = $dgSegundo;
			
									$segundo = $C;
									$ptSegundo = $ptC;
									$gfSegundo = $gfC;
									$dgSegundo = $dgC;
								}
								else if ($ptSegundo == $ptC) {
									if ($dgSegundo > $dgC) {
										$segundo = $segundo;
										$ptSegundo = $ptSegundo;
			
										$tercero = $C;
										$ptTercero = $ptC;
										$gfTercero = $gfC;
										$dgTercero = $dgC;
									}
									else if ($dgSegundo < $dgC) {
										$tercero = $segundo;
										$ptTercero = $ptSegundo;
										$gfTercero = $gfSegundo;
										$dgTercero = $dgSegundo;
			
										$segundo = $C;
										$ptSegundo = $ptC;
										$gfSegundo = $gfC;
										$dgSegundo = $dgC;
									}
									else if ($dgSegundo == $dgC) {
										if ($gfSegundo > $gfC) {
											$segundo = $segundo;
											$ptSegundo = $ptSegundo;
			
											$tercero = $C;
											$ptTercero = $ptC;
											$gfTercero = $gfC;
											$dgTercero = $dgC;
										}
										else if ($gfSegundo < $gfC) {
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$gfTercero = $gfSegundo;
											$dgTercero = $dgSegundo;
			
											$segundo = $C;
											$ptSegundo = $ptC;
											$gfSegundo = $gfC;
											$dgSegundo = $dgC;
										}
										else if ($gfSegundo == $gfC) {
											$sorteo = rand(0,5);
											if ($sorteo < 3) {
												$segundo = $segundo;
												$ptSegundo = $ptSegundo;
			
												$tercero = $C;
												$ptTercero = $ptC;
												$gfTercero = $gfC;
												$dgTercero = $dgC;
											}
											else {
												$tercero = $segundo;
												$ptTercero = $ptSegundo;
												$gfTercero = $gfSegundo;
												$dgTercero = $dgSegundo;
			
												$segundo = $C;
												$ptSegundo = $ptC;
												$gfSegundo = $gfC;
												$dgSegundo = $dgC;
											}
										}
									}
								}
							}
							else if ($ptPrimero < $ptC) {
								$tercero = $segundo;
								$ptTercero = $ptSegundo;
								$dgTercero = $dgSegundo;
								$gfTercero = $gfSegundo;
		
								$segundo = $primero;
								$ptSegundo = $ptPrimero;
								$dgSegundo = $dgPrimero;
								$gfSegundo = $gfPrimero;
		
								$primero = $C;
								$ptPrimero = $ptC;
								$gfPrimero = $gfC;
								$dgPrimero = $dgC;
							}
							else if ($ptPrimero == $ptC) {
								if ($dgPrimero > $dgC) {
									$primero = $primero;
									$ptPrimero = $ptPrimero;
									if ($ptSegundo < $ptC) {
										$tercero = $segundo;
										$ptTercero = $ptSegundo;
										$dgTercero = $dgSegundo;
										$gfTercero = $gfSegundo;
		
										$segundo = $C;
										$ptSegundo = $ptC;
										$dgSegundo = $dgC;
										$gfSegundo = $gfC;
									}
									else if ($ptSegundo == $ptC) {
										if ($dgSegundo > $dgC) {
											$segundo = $segundo;
											$ptSegundo = $ptSegundo;
			
											$tercero = $C;
											$ptTercero = $ptC;
											$gfTercero = $gfC;
											$dgTercero = $dgC;
										}
										else if ($dgSegundo < $dgC) {
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$dgTercero = $dgSegundo;
											$gfTercero = $gfSegundo;
		
											$segundo = $C;
											$ptSegundo = $ptC;
											$dgSegundo = $dgC;
											$gfSegundo = $gfC;
										}
										else if ($dgSegundo == $dgC) {
											if ($gfSegundo > $gfC) {
												$segundo = $segundo;
												$ptSegundo = $ptSegundo;
			
												$tercero = $C;
												$ptTercero = $ptC;
												$gfTercero = $gfC;
												$dgTercero = $dgC;
											}
											else if ($gfSegundo < $gfC) {
												$tercero = $segundo;
												$ptTercero = $ptSegundo;
												$dgTercero = $dgSegundo;
												$gfTercero = $gfSegundo;
		
												$segundo = $C;
												$ptSegundo = $ptC;
												$dgSegundo = $dgC;
												$gfSegundo = $gfC;
											}
											else if ($gfSegundo == $gfC) {
												$sorteo = rand(0,5);
												if ($sorteo < 3) {
													$segundo = $segundo;
													$ptSegundo = $ptSegundo;
			
													$tercero = $C;
													$ptTercero = $ptC;
													$gfTercero = $gfC;
													$dgTercero = $dgC;
												}
												else {
													$tercero = $segundo;
													$ptTercero = $ptSegundo;
													$gfTercero = $gfSegundo;
													$dgTercero = $dgSegundo;
			
													$segundo = $C;
													$ptSegundo = $ptC;
													$gfSegundo = $gfC;
													$dgSegundo = $dgC;
												}
											}
					
										}
									}
								}
								else if ($dgPrimero < $dgC) {
									$tercero = $segundo;
									$ptTercero = $ptSegundo;
									$dgTercero = $dgSegundo;
									$gfTercero = $gfSegundo;
			
									$segundo = $primero;
									$ptSegundo = $ptPrimero;
									$dgSegundo = $dgPrimero;
									$gfSegundo = $gfPrimero;
			
									$primero = $C;
									$ptPrimero = $ptC;
									$gfPrimero = $gfC;
									$dgPrimero = $dgC;
								}	
								else if ($dgPrimero == $dgC) {
									if ($gfPrimero > $gfC) {
										$primero = $primero;
										$ptPrimero = $ptPrimero;
										if ($ptSegundo < $ptC) {
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$dgTercero = $dgSegundo;
											$gfTercero = $gfSegundo;
			
											$segundo = $C;
											$ptSegundo = $C;
											$dgSegundo = $C;
											$gfSegundo = $C;
										}
										else if ($ptSegundo == $ptC) {
											if ($dgSegundo > $dgC) {
												$segundo = $segundo;
												$ptSegundo = $ptSegundo;
			
												$tercero = $C;
												$ptTercero = $ptC;
												$gfTercero = $gfC;
												$dgTercero = $dgC;
											}
											else if ($dgSegundo < $dgC) {
												$tercero = $segundo;
												$ptTercero = $ptSegundo;
												$dgTercero = $dgSegundo;
												$gfTercero = $gfSegundo;
			
												$segundo = $C;
												$ptSegundo = $C;
												$dgSegundo = $C;
												$gfSegundo = $C;
											}
											else if ($dgSegundo == $dgC) {
												if ($gfSegundo > $gfC) {
													$segundo = $segundo;
													$ptSegundo = $ptSegundo;
			
													$tercero = $C;
													$ptTercero = $ptC;
													$gfTercero = $gfC;
													$dgTercero = $dgC;
												}
												else if ($gfSegundo < $gfC){
													$tercero = $segundo;
													$ptTercero = $ptSegundo;
													$dgTercero = $dgSegundo;
													$gfTercero = $gfSegundo;
			
													$segundo = $C;
													$ptSegundo = $C;
													$dgSegundo = $C;
													$gfSegundo = $C;
												}
												else if ($gfSegundo == $gfC) {
													$sorteo = rand(0,5);
													if ($sorteo < 3) {
														$segundo = $segundo;
														$ptSegundo = $ptSegundo;
			
														$tercero = $C;
														$ptTercero = $ptC;
														$gfTercero = $gfC;
														$dgTercero = $dgC;
													}
													else {
														$tercero = $segundo;
														$ptTercero = $ptSegundo;
														$gfTercero = $gfSegundo;
														$dgTercero = $dgSegundo;
			
														$segundo = $C;
														$ptSegundo = $ptC;
														$gfSegundo = $gfC;
														$dgSegundo = $dgC;
													}
												}
											}
										}
									}									
									else if ($gfPrimero < $gfC) {
										$tercero = $segundo;
										$ptTercero = $ptSegundo;
										$dgTercero = $dgSegundo;
										$gfTercero = $gfSegundo;
				
										$segundo = $primero;
										$ptSegundo = $ptPrimero;
										$dgSegundo = $dgPrimero;
										$gfSegundo = $gfPrimero;
			
										$primero = $C;
										$ptPrimero = $ptC;
										$gfPrimero = $gfC;
										$dgPrimero = $dgC;
									}
									else if ($gfPrimero == $gfC) {
										$sorteo = rand(0,5);
										if ($sorteo < 3) {
											$primero = $primero;
											$ptPrimero = $ptPrimero;
					
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$gfTercero = $gfSegundo;
											$dgTercero = $dgSegundo;
			
											$segundo = $C;
											$ptSegundo = $ptC;
											$gfSegundo = $gfC;
											$dgSegundo = $dgC;	
										}
										else {
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$gfTercero = $gfSegundo;
											$dgTercero = $dgSegundo;
					
											$segundo = $primero;
											$ptSegundo = $ptPrimero;
											$gfSegundo = $gfPrimero;
											$dgSegundo = $dgPrimero;
			
											$primero = $C;
											$ptPrimero = $ptC;
											$gfPrimero = $gfC;
											$dgPrimero = $dgC;
										}
			}
								}
							}
	

							if ($ptPrimero > $ptD) {
								$primero = $primero;
								$ptPrimero = $ptPrimero;
									if ($ptSegundo > $ptD) {
										$segundo = $segundo;
										$ptSegundo = $ptSegundo;
										if ($ptTercero > $ptD) {
											$tercero = $tercero;
											$ptTercero = $ptTercero;
				
											$cuarto = $D;
											$ptCuarto = $ptD;
											$dgCuarto = $dgD;
											$gfCuarto = $gfD;
										}
										else if ($ptTercero == $ptD) {
											if ($dgTercero > $dgD) {
												$tercero = $tercero;
												$ptTercero = $ptTercero;
				
												$cuarto = $D;
												$ptCuarto = $ptD;
												$dgCuarto = $dgD;
												$gfCuarto = $gfD;
											}
											else if ($dgTercero < $dgD) {
												$cuarto = $tercero;
												$ptCuarto = $ptTercero;
												$dgCuarto = $dgTercero;
												$gfCuarto = $gfTercero;
					
												$tercero = $D;
												$ptTercero = $ptD;
												$dgTercero = $dgD;
												$gfTercero = $gfD;
											}
											else if ($dgTercero == $dgD) {
												if ($gfTercero > $gfD) {
													$tercero = $tercero;
													$ptTercero = $ptTercero;
				
													$cuarto = $D;
													$ptCuarto = $ptD;
													$dgCuarto = $dgD;
													$gfCuarto = $gfD;
												}
												else if ($gfTercero < $gfD) {
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$dgCuarto = $dgTercero;
													$gfCuarto = $gfTercero;
					
													$tercero = $D;
													$ptTercero = $ptD;
													$dgTercero = $dgD;
													$gfTercero = $gfD;
												}
												else if ($gfTercero == $gfD) {
													$sorteo = rand(0,5);
													if ($sorteo < 3) {
														$tercero = $tercero;
														$ptTercero = $ptTercero;
			
														$cuarto = $D;
														$ptCuarto = $ptD;
														$gfCuarto = $gfD;
														$dgCuarto = $dgD;
													}
													else {
														$cuarto = $tercero;
														$ptCuarto = $ptTercero;
														$dgCuarto = $dgTercero;
														$gfCuarto = $gfTercero;
					
														$tercero = $D;
														$ptTercero = $ptD;
														$dgTercero = $dgD;
														$gfTercero = $gfD;
													}
												}
											}
				
										}
										else if ($ptTercero < $ptD) {
											$cuarto = $tercero;
											$ptCuarto = $ptTercero;
											$dgCuarto = $dgTercero;
											$gfCuarto = $gfTercero;
					
											$tercero = $D;
											$ptTercero = $ptD;
											$dgTercero = $dgD;
											$gfTercero = $gfD;
										}
									}
									else if ($ptSegundo < $ptD) {
										$cuarto = $tercero;
										$ptCuarto = $ptTercero;
										$dgCuarto = $dgTercero;
										$gfCuarto = $gfTercero;
			
										$tercero = $segundo;
										$ptTercero = $ptSegundo;
										$dgTercero = $dgSegundo;
										$gfTercero = $gfSegundo;
			
										$segundo = $D;
										$ptSegundo = $ptD;
										$gfSegundo = $gfD;
										$dgSegundo = $dgD;
									}
									else if ($ptSegundo == $ptD) {
										if ($dgSegundo > $dgD) {
											$segundo = $segundo;
											$ptSegundo = $ptSegundo;
											if ($ptTercero < $ptD) {
												$cuarto = $tercero;
												$ptCuarto = $ptTercero;
												$dgCuarto = $dgTercero;
												$gfCuarto = $gfTercero;
												
												$tercero = $D;
												$ptTercero = $ptD;
												$dgTercero = $dgD;
												$gfTercero = $gfD;
											}
											else if ($ptTercero > $ptD) {
												$tercero = $tercero;
												$ptTercero = $ptTercero;
				
												$cuarto = $D;
												$ptCuarto = $ptD;
												$dgCuarto = $dgD;
												$gfCuarto = $gfD;
											}
											else if ($ptTercero == $ptD) {
												if ($dgTercero > $dgD) {
													$tercero = $tercero;
													$ptTercero = $ptTercero;
													
													$cuarto = $D;
													$ptCuarto = $ptD;
													$dgCuarto = $dgD;
													$gfCuarto = $gfD;
												}
												else if ($dgTercero < $dgD) {
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$dgCuarto = $dgTercero;
													$gfCuarto = $gfTercero;
													
													$tercero = $D;
													$ptTercero = $ptD;
													$dgTercero = $dgD;
													$gfTercero = $gfD;
													
												}
												else if ($dgTercero == $dgD) {
													if ($gfTercero > $gfD){
														$tercero = $tercero;
														$ptTercero = $ptTercero;
													
														$cuarto = $D;
														$ptCuarto = $ptD;
														$dgCuarto = $dgD;
														$gfCuarto = $gfD;
													}
													else if ($gfTercero < $gfD) {
														$cuarto = $tercero;
														$ptCuarto = $ptTercero;
														$dgCuarto = $dgTercero;
														$gfCuarto = $gfTercero;
													
														$tercero = $D;
														$ptTercero = $ptD;
														$dgTercero = $dgD;
														$gfTercero = $gfD;
													}
													else if($gfTercero == $gfD) {
														$sorteo = rand(0,5);
															if ($sorteo < 3) {
															$tercero = $tercero;
															$ptTercero = $ptTercero;
													
															$cuarto = $D;
															$ptCuarto = $ptD;
															$dgCuarto = $dgD;
															$gfCuarto = $gfD;
															}
															else {
																$cuarto = $tercero;
																$ptCuarto = $ptTercero;
																$dgCuarto = $dgTercero;
																$gfCuarto = $gfTercero;
													
																$tercero = $D;
																$ptTercero = $ptD;
																$dgTercero = $dgD;
																$gfTercero = $gfD;
															}
													}
												}
											}
										}
										else if ($dgSegundo < $dgD) {
											$cuarto = $tercero;
											$ptCuarto = $ptTercero;
											$dgCuarto = $dgTercero;
											$gfCuarto = $gfTercero;
				
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$dgTercero = $dgSegundo;
											$gfTercero = $gfSegundo;
			
											$segundo = $D;
											$ptSegundo = $ptD;
											$gfSegundo = $gfD;
											$dgSegundo = $dgD;
										}
										else if ($dgSegundo == $dgD) {
											if ($gfSegundo > $gfD) {
												$segundo = $segundo;
												$ptSegundo = $ptSegundo;
				
												if ($ptTercero > $ptD) {
													$tercero = $tercero;
													$ptTercero = $ptTercero;
				
													$cuarto = $D;
													$ptCuarto = $ptD;
													$dgCuarto = $dgD;
													$gfCuarto = $gfD;
												}
												else if ($ptTercero < $ptD) {
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$dgCuarto = $dgTercero;
													$gfCuarto = $gfTercero;
						
													$tercero = $D;
													$ptTercero = $ptD;
													$dgTercero = $dgD;
													$gfTercero = $gfD;
												}
												else if ($ptTercero == $ptD){
													if ($dgTercero > $dgD) {
														$tercero = $tercero;
														$ptTercero = $ptTercero;
				
														$cuarto = $D;
														$ptCuarto = $ptD;
														$dgCuarto = $dgD;
														$gfCuarto = $gfD;
													}
													else if ($dgTercero < $dgD){
														$cuarto = $tercero;
														$ptCuarto = $ptTercero;
														$dgCuarto = $dgTercero;
														$gfCuarto = $gfTercero;
						
														$tercero = $D;
														$ptTercero = $ptD;
														$dgTercero = $dgD;
														$gfTercero = $gfD;
													}
													else if ($dgTercero == $dgD) {
														if ($gfTercero > $gfD){
															$tercero = $tercero;
															$ptTercero = $ptTercero;
				
															$cuarto = $D;
															$ptCuarto = $ptD;
															$dgCuarto = $dgD;
															$gfCuarto = $gfD;
														}
														else if ($gfTercero < $gfD){
															$cuarto = $tercero;
															$ptCuarto = $ptTercero;
															$dgCuarto = $dgTercero;
															$gfCuarto = $gfTercero;
						
															$tercero = $D;
															$ptTercero = $ptD;
															$dgTercero = $dgD;
															$gfTercero = $gfD;
														}
														else if ($gfTercero == $gfD) {
															$sorteo = rand(0,5);
															if ($sorteo < 3) {
																$tercero = $tercero;
																$ptTercero = $ptTercero;
				
																$cuarto = $D;
																$ptCuarto = $ptD;
																$dgCuarto = $dgD;
																$gfCuarto = $gfD;
															}
															else {
																$cuarto = $tercero;
																$ptCuarto = $ptTercero;
																$dgCuarto = $dgTercero;
																$gfCuarto = $gfTercero;
						
																$tercero = $D;
																$ptTercero = $ptD;
																$dgTercero = $dgD;
																$gfTercero = $gfD;
															}
														}
													}
												}
						
											}
											else if ($gfSegundo < $gfD) {
												$cuarto = $tercero;
												$ptCuarto = $ptTercero;
												$dgCuarto = $dgTercero;
												$gfCuarto = $gfTercero;
					
												$tercero = $segundo;
												$ptTercero = $ptSegundo;
												$dgTercero = $dgSegundo;
												$gfTercero = $gfSegundo;
						
												$segundo = $D;
												$ptSegundo = $ptD;
												$gfSegundo = $gfD;
												$dgSegundo = $dgD;
											}
											else if ($gfSegundo == $gfD) {
												$sorteo = rand(0,5);
												if ($sorteo < 3) {
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$gfCuarto = $gfTercero;
													$dgCuarto = $dgTercero;
						
													$segundo = $segundo;
													$ptSegundo = $ptSegundo;	
						
													$tercero = $D;
													$ptTercero = $ptD;
													$dgTercero = $dgD;
													$gfTercero = $gfD;
												}
												else {
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$dgCuarto = $dgTercero;
													$gfCuarto = $gfTercero;
					
													$tercero = $segundo;
													$ptTercero = $ptSegundo;
													$dgTercero = $dgSegundo;
													$gfTercero = $gfSegundo;
						
													$segundo = $D;
													$ptSegundo = $ptD;
													$gfSegundo = $gfD;
													$dgSegundo = $dgD;
												}
											}
										}
									}
							}
							else if ($ptPrimero < $ptD){
								$cuarto = $tercero;
								$ptCuarto = $ptTercero;
								$dgCuarto = $dgTercero;
								$gfCuarto = $gfTercero;
		
								$tercero = $segundo;
								$ptTercero = $ptSegundo;
								$gfTercero = $gfSegundo;
								$dgTercero = $dgSegundo;
		
								$segundo = $primero;
								$ptSegundo = $ptPrimero;
								$gfSegundo = $gfPrimero;
								$dgSegundo = $dgPrimero;
		
								$primero = $D;
								$ptPrimero = $ptD;
								$gfPrimero = $gfD;
								$dgPrimero = $dgD;
							}
							else if ($ptPrimero == $ptD) {
								if ($dgPrimero > $dgD) {
									$primero = $primero;
									$ptPrimero = $ptPrimero;
									if ($ptSegundo < $ptD) {
										$cuarto = $tercero;
										$ptCuarto = $ptTercero;
										$dgCuarto = $dgTercero;
										$gfCuarto = $gfTercero;
			
										$tercero = $segundo;
										$ptTercero = $ptSegundo;
										$dgTercero = $dgSegundo;
										$gfTercero = $gfSegundo;
			
										$segundo = $D;
										$ptSegundo = $ptD;
										$gfSegundo = $gfD;
										$dgSegundo = $dgD;
									}
									else if ($ptSegundo == $ptD) {
										if ($dgSegundo > $dgD) {
											$segundo = $segundo;
											$ptSegundo = $ptSegundo;
				
											if ($ptTercero > $ptD) {
												$tercero = $tercero;
												$ptTercero = $ptTercero;
				
												$cuarto = $D;
												$ptCuarto = $ptD;
												$dgCuarto = $dgD;
												$gfCuarto = $gfD;
											}
											else if ($ptTercero < $ptD) {
												$cuarto = $tercero;
												$ptCuarto = $ptTercero;
												$dgCuarto = $dgTercero;
												$gfCuarto = $gfTercero;
						
												$tercero = $D;
												$ptTercero = $ptD;
												$dgTercero = $dgD;
												$gfTercero = $gfD;
											}
											else if ($ptTercero == $ptD){
												if ($dgTercero > $dgD) {
													$tercero = $tercero;
													$ptTercero = $ptTercero;
						
													$cuarto = $D;
													$ptCuarto = $ptD;
													$dgCuarto = $dgD;
													$gfCuarto = $gfD;
												}
												else if ($dgTercero < $dgD){
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$dgCuarto = $dgTercero;
													$gfCuarto = $gfTercero;
						
													$tercero = $D;
													$ptTercero = $ptD;
													$dgTercero = $dgD;
													$gfTercero = $gfD;
												}
												else if ($dgTercero == $dgD) {
													if ($gfTercero > $gfD){
														$tercero = $tercero;
														$ptTercero = $ptTercero;
				
														$cuarto = $D;
														$ptCuarto = $ptD;
														$dgCuarto = $dgD;
														$gfCuarto = $gfD;
													}
													else if ($gfTercero < $gfD){
														$cuarto = $tercero;
														$ptCuarto = $ptTercero;
														$dgCuarto = $dgTercero;
														$gfCuarto = $gfTercero;
						
														$tercero = $D;
														$ptTercero = $ptD;
														$dgTercero = $dgD;
														$gfTercero = $gfD;
													}
													else if ($gfTercero == $gfD) {
														$sorteo = rand(0,5);
														if ($sorteo < 3) {
															$tercero = $tercero;
															$ptTercero = $ptTercero;
				
															$cuarto = $D;
															$ptCuarto = $ptD;
															$dgCuarto = $dgD;
															$gfCuarto = $gfD;
														}
														else {
															$cuarto = $tercero;
															$ptCuarto = $ptTercero;
															$dgCuarto = $dgTercero;
															$gfCuarto = $gfTercero;
						
															$tercero = $D;
															$ptTercero = $ptD;
															$dgTercero = $dgD;
															$gfTercero = $gfD;
														}
													}
												}
											}
										}
										else if ($dgSegundo < $dgD) {
											$cuarto = $tercero;
											$ptCuarto = $ptTercero;
											$dgCuarto = $dgTercero;
											$gfCuarto = $gfTercero;
				
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$dgTercero = $dgSegundo;
											$gfTercero = $gfSegundo;
			
											$segundo = $D;
											$ptSegundo = $ptD;
											$gfSegundo = $gfD;
											$dgSegundo = $dgD;
										}
										else if ($dgSegundo == $dgD) {
											if ($gfSegundo > $gfD) {
												$segundo = $segundo;
												$ptSegundo = $ptSegundo;
					
												$tercero = $tercero;
												$ptTercero = $ptTercero;
				
												$cuarto = $D;
												$ptCuarto = $ptD;
												$dgCuarto = $dgD;
												$gfCuarto = $gfD;		
											}
											else if ($gfSegundo < $gfD) {
												$cuarto = $tercero;
												$ptCuarto = $ptTercero;
												$dgCuarto = $dgTercero;
												$gfCuarto = $gfTercero;
					
												$tercero = $segundo;
												$ptTercero = $ptSegundo;
												$dgTercero = $dgSegundo;
												$gfTercero = $gfSegundo;
						
												$segundo = $D;
												$ptSegundo = $ptD;
												$gfSegundo = $gfD;
												$dgSegundo = $dgD;
											}
											else if ($gfSegundo == $gfD) {
												$sorteo = rand(0,5);
												if ($sorteo < 3) {
													$segundo = $segundo;
													$ptSegundo = $ptSegundo;	
						
													$tercero = $tercero;
													$ptTercero = $ptTercero;
			
													$cuarto = $D;
													$ptCuarto = $ptD;
													$gfCuarto = $gfD;
													$dgCuarto = $dgD;
												}
												else {
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$dgCuarto = $dgTercero;
													$gfCuarto = $gfTercero;
					
													$tercero = $segundo;
													$ptTercero = $ptSegundo;
													$dgTercero = $dgSegundo;
													$gfTercero = $gfSegundo;
						
													$segundo = $D;
													$ptSegundo = $ptD;
													$gfSegundo = $gfD;
													$dgSegundo = $dgD;
												}
											}
										}
									}
								}
								else if ($dgPrimero < $dgD) {
									$cuarto = $tercero;
									$ptCuarto = $ptTercero;
									$dgCuarto = $dgTercero;
									$gfCuarto = $gfTercero;
		
									$tercero = $segundo;
									$ptTercero = $ptSegundo;
									$gfTercero = $gfSegundo;
									$dgTercero = $dgSegundo;
		
									$segundo = $primero;
									$ptSegundo = $ptPrimero;
									$gfSegundo = $gfPrimero;
									$dgSegundo = $dgPrimero;
		
									$primero = $D;
									$ptPrimero = $ptD;
									$gfPrimero = $gfD;
									$dgPrimero = $dgD;
								}
								else if ($dgPrimero == $dgD) {
									if ($gfPrimero > $gfD) {
										$primero = $primero;
										$ptPrimero = $ptPrimero;
										if ($ptSegundo < $ptD) {
											$cuarto = $tercero;
											$ptCuarto = $ptTercero;
											$dgCuarto = $dgTercero;
											$gfCuarto = $gfTercero;
			
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$dgTercero = $dgSegundo;
											$gfTercero = $gfSegundo;
			
											$segundo = $D;
											$ptSegundo = $ptD;
											$gfSegundo = $gfD;
											$dgSegundo = $dgD;
										}
										else if ($ptSegundo == $ptD) {
											if ($dgSegundo > $dgD) {
												$segundo = $segundo;
												$ptSegundo = $ptSegundo;
												
												if ($ptTercero < $ptD) {
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$dgCuarto = $dgTercero;
													$gfCuarto = $gfTercero;
												
													$tercero = $D;
													$ptTercero = $ptD;
													$dgTercero = $dgD;
													$gfTercero = $gfD;
												}
												else if ($ptTercero > $ptD) {
													$tercero = $tercero;
													$ptTercero = $ptTercero;
				
													$cuarto = $D;
													$ptCuarto = $ptD;
													$dgCuarto = $dgD;
													$gfCuarto = $gfD;
												}							
												else if ($ptTercero == $ptD) {
													if ($dgTercero > $dgD) {
														$tercero = $tercero;
														$ptTercero = $ptTercero;
													
														$cuarto = $D;
														$ptCuarto = $ptD;
														$dgCuarto = $dgD;
														$gfCuarto = $gfD;
													}
													else if ($dgTercero < $dgD) {
														$cuarto = $tercero;
														$ptCuarto = $ptTercero;
														$dgCuarto = $dgTercero;
														$gfCuarto = $gfTercero;
													
														$tercero = $D;
														$ptTercero = $ptD;
														$dgTercero = $dgD;
														$gfTercero = $gfD;
													
													}
													else if ($dgTercero == $dgD) {
														if ($gfTercero > $gfD) {
															$tercero = $tercero;
															$ptTercero = $ptTercero;
													
															$cuarto = $D;
															$ptCuarto = $ptD;
															$dgCuarto = $dgD;
															$gfCuarto = $gfD;
														}
														else if ($gfTercero < $gfD){
															$cuarto = $tercero;
															$ptCuarto = $ptTercero;
															$dgCuarto = $dgTercero;
															$gfCuarto = $gfTercero;
													
															$tercero = $D;
															$ptTercero = $ptD;
															$dgTercero = $dgD;
															$gfTercero = $gfD;
														}
														else if ($gfTercero == $gfD){
															$sorteo = rand(0,5);
															if ($sorteo < 3) {
																$tercero = $tercero;
																$ptTercero = $ptTercero;
			
																$cuarto = $D;
																$ptCuarto = $ptD;
																$gfCuarto = $gfD;
																$dgCuarto = $dgD;
															}
															else {
																$cuarto = $tercero;
																$ptCuarto = $ptTercero;
																$dgCuarto = $dgTercero;
																$gfCuarto = $gfTercero;
					
																$tercero = $D;
																$ptTercero = $ptD;
																$dgTercero = $dgD;
																$gfTercero = $gfD;
															}
														}	
													}
												}
											}
											else if ($dgSegundo < $dgD) {
												$cuarto = $tercero;
												$ptCuarto = $ptTercero;
												$dgCuarto = $dgTercero;
												$gfCuarto = $gfTercero;
				
												$tercero = $segundo;
												$ptTercero = $ptSegundo;
												$dgTercero = $dgSegundo;
												$gfTercero = $gfSegundo;
			
												$segundo = $D;
												$ptSegundo = $ptD;
												$gfSegundo = $gfD;
												$dgSegundo = $dgD;
											}
											else if ($dgSegundo == $dgD) {
												if ($gfSegundo > $gfD) {
													$segundo = $segundo;
													$ptSegundo = $ptSegundo;
				
													if ($ptTercero < $ptD) {
														$cuarto = $tercero;
														$ptCuarto = $ptTercero;
														$dgCuarto = $dgTercero;
														$gfCuarto = $gfTercero;
												
														$tercero = $D;
														$ptTercero = $ptD;
														$dgTercero = $dgD;
														$gfTercero = $gfD;
													}
													else if ($ptTercero > $ptD) {
														$tercero = $tercero;
														$ptTercero = $ptTercero;
				
														$cuarto = $D;
														$ptCuarto = $ptD;
														$dgCuarto = $dgD;
														$gfCuarto = $gfD;
													}							
													else if ($ptTercero == $ptD) {
														if ($dgTercero > $dgD) {
															$tercero = $tercero;
															$ptTercero = $ptTercero;
													
															$cuarto = $D;
															$ptCuarto = $ptD;
															$dgCuarto = $dgD;
															$gfCuarto = $gfD;
														}
														else if ($dgTercero < $dgD) {
															$cuarto = $tercero;
															$ptCuarto = $ptTercero;
															$dgCuarto = $dgTercero;
															$gfCuarto = $gfTercero;
													
															$tercero = $D;
															$ptTercero = $ptD;
															$dgTercero = $dgD;
															$gfTercero = $gfD;
													
														}
														else if ($dgTercero == $dgD) {
															if ($gfTercero > $gfD) {
																$tercero = $tercero;
																$ptTercero = $ptTercero;
													
																$cuarto = $D;
																$ptCuarto = $ptD;
																$dgCuarto = $dgD;
																$gfCuarto = $gfD;
															}
															else if ($gfTercero < $gfD){
																$cuarto = $tercero;
																$ptCuarto = $ptTercero;
																$dgCuarto = $dgTercero;
																$gfCuarto = $gfTercero;
													
																$tercero = $D;
																$ptTercero = $ptD;
																$dgTercero = $dgD;
																$gfTercero = $gfD;
															}
															else if ($gfTercero == $gfD){
																$sorteo = rand(0,5);
																if ($sorteo < 3) {
																	$tercero = $tercero;
																	$ptTercero = $ptTercero;
			
																	$cuarto = $D;
																	$ptCuarto = $ptD;
																	$gfCuarto = $gfD;
																	$dgCuarto = $dgD;
																}
																else {
																	$cuarto = $tercero;
																	$ptCuarto = $ptTercero;
																	$dgCuarto = $dgTercero;
																	$gfCuarto = $gfTercero;
					
																	$tercero = $D;
																	$ptTercero = $ptD;
																	$dgTercero = $dgD;
																	$gfTercero = $gfD;
																}
															}	
														}
													}	
												}
												else if ($gfSegundo < $gfD) {
													$cuarto = $tercero;
													$ptCuarto = $ptTercero;
													$dgCuarto = $dgTercero;
													$gfCuarto = $gfTercero;
					
													$tercero = $segundo;
													$ptTercero = $ptSegundo;
													$dgTercero = $dgSegundo;
													$gfTercero = $gfSegundo;
						
													$segundo = $D;
													$ptSegundo = $ptD;
													$gfSegundo = $gfD;
													$dgSegundo = $dgD;
												}
												else if ($gfSegundo == $gfD) {
													$sorteo = rand(0,5);
													if ($sorteo < 3) {
														$segundo = $segundo;
														$ptSegundo = $ptSegundo;	
						
														$tercero = $tercero;
														$ptTercero = $ptTercero;
			
														$cuarto = $D;
														$ptCuarto = $ptD;
														$gfCuarto = $gfD;
														$dgCuarto = $dgD;
													}
													else {
														$cuarto = $tercero;
														$ptCuarto = $ptTercero;
														$dgCuarto = $dgTercero;
														$gfCuarto = $gfTercero;
					
														$tercero = $segundo;
														$ptTercero = $ptSegundo;
														$dgTercero = $dgSegundo;
														$gfTercero = $gfSegundo;
						
														$segundo = $D;
														$ptSegundo = $ptD;
														$gfSegundo = $gfD;
														$dgSegundo = $dgD;
													}
												}
											}
										}
									}
									else if($gfPrimero < $gfD) {
										$cuarto = $tercero;
										$ptCuarto = $ptTercero;
										$dgCuarto = $dgTercero;
										$gfCuarto = $gfTercero;
		
										$tercero = $segundo;
										$ptTercero = $ptSegundo;
										$gfTercero = $gfSegundo;
										$dgTercero = $dgSegundo;
		
										$segundo = $primero;
										$ptSegundo = $ptPrimero;
										$gfSegundo = $gfPrimero;
										$dgSegundo = $dgPrimero;
		
										$primero = $D;
										$ptPrimero = $ptD;
										$gfPrimero = $gfD;
										$dgPrimero = $dgD;
									}
									else if ($gfPrimero == $gfD) {
										$sorteo = rand(0,5);
										if ($sorteo < 3) {
											$cuarto = $tercero;
											$ptCuarto = $ptTercero;
											$dgCuarto = $dgTercero;
											$gfCuarto = $gfTercero;
		
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$gfTercero = $gfSegundo;
											$dgTercero = $dgSegundo;

											$segundo = $D;
											$ptSegundo = $ptD;
											$gfSegundo = $gfD;
											$dgSegundo = $dgD;
		
											$primero = $primero;
											$ptPrimero = $ptPrimero;
											$gfPrimero = $gfPrimero;
											$dgPrimero = $dgPrimero;
										}
										else {
											$cuarto = $tercero;
											$ptCuarto = $ptTercero;
											$dgCuarto = $dgTercero;
											$gfCuarto = $gfTercero;
		
											$tercero = $segundo;
											$ptTercero = $ptSegundo;
											$gfTercero = $gfSegundo;
											$dgTercero = $dgSegundo;
		
											$segundo = $primero;
											$ptSegundo = $ptPrimero;
											$gfSegundo = $gfPrimero;
											$dgSegundo = $dgPrimero;
		
											$primero = $D;
											$ptPrimero = $ptD;
											$gfPrimero = $gfD;
											$dgPrimero = $dgD;
										}
									}
								}
							}
	
							?>			
							<table border=0 cellspacing=0 width=800 height=400>
									<tr>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176) >Posición</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>Equipo</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>PJ</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>V</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>E</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>D</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>GF</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>GC</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>+/-</font></td>
										<th bgcolor=#A4A4A4><font color=rgb(182,182,176)>PTS</font></td>
									</tr>
							<?php
								echo '<tr>';
									echo '<td bgcolor=#F7E6CE><font color=rgb(182,182,176)>1</font></td>';	
								foreach ($primero as $id) {
									echo '<td bgcolor=#F7E6CE><font color=rgb(182,182,176)>' . $id . '</font></td>';
								}
								echo '</tr>';
	
								echo '<tr>';
									echo '<td bgcolor=#CEF7E4><font color=rgb(182,182,176)>2</font></td>';
								foreach ($segundo as $id) {
									echo '<td bgcolor=#CEF7E4><font color=rgb(182,182,176)>' .$id . '</font></td>';
								}
								echo '</tr>';
	
								echo '<tr>';
									echo '<td bgcolor=white><font color=rgb(182,182,176)>3</font></td>';
								foreach ($tercero as $id) {
									echo '<td bgcolor=white><font color=rgb(182,182,176)>' .$id . '</font></td>';
								}
								echo '</tr>';
	
								echo '<tr>';
									echo '<td bgcolor=white><font color=rgb(182,182,176)>4</font></td>';
								foreach ($cuarto as $id) {
									echo '<td bgcolor=white><font color=rgb(182,182,176)>' .$id . '</font></td>';
								}
								echo '</tr>';
	
							echo '</table>';
	
							echo '<br>';
							
							// FIN :'V
							
							$clasificados[$GRUPO][0] = $primero[0];
							$clasificados[$GRUPO][1] = $segundo[0];
						
					}		
					
				}
				
				echo '<hr>';
				
				?>

				
					
						<h1 >CLASIFICADOS</h1>
					
						
	
				<?php
				
				for ($contador=0; $contador<=7; $contador++) {
					
				
					switch ($contador) {
						case 0:
							$grupo = "A";
							break;
						case 1:
							$grupo = "B";
							break;
						case 2:
							$grupo = "C";
							break;
						case 3:
							$grupo = "D";
							break;
						case 4:
							$grupo = "E";
							break;
						case 5:
							$grupo = "F";
							break;
						case 6:
							$grupo = "G";
							break;
						case 7:
							$grupo = "H";
							break;
					}
		
					
				echo '<td>';
					// No se si borrarlo
					?>
					<table border=1 cellspacing=0 width=250 background="imagenes/dorado.jpg">
					<tr>
					<?php
					echo '<td colspan=2 ><font color=black><strong>GRUPO ' . $grupo . '</strong></font></td>';
					echo '</tr>';
					//echo '<tr>';
					
					foreach ($clasificados[$grupo] as $id) {
						
						echo '<tr>';
						?>
						<td width=70><img src="imagenes/Banderas 2/<?php echo $id;?>.png" width="70" height=60></td>
						<?php
						echo '<td><font color=black>' . $id . '</font></td>';
						//echo '<br>';
					}
					echo '</tr>';
					echo '</table>';
					echo '</br>';
					
				?>
				
				
					
				
				<?php	
					//	Hasta aca que no se sirve o no
					
					$A1 = $clasificados["A"][0];
					$A2 = $clasificados["A"][1];
					$B1 = $clasificados["B"][0];
					$B2 = $clasificados["B"][1];
					$C1 = $clasificados["C"][0];
					$C2 = $clasificados["C"][1];
					$D1 = $clasificados["D"][0];
					$D2 = $clasificados["D"][1];
					$E1 = $clasificados["E"][0];
					$E2 = $clasificados["E"][1];
					$F1 = $clasificados["F"][0];
					$F2 = $clasificados["F"][1];
					$G1 = $clasificados["G"][0];
					$G2 = $clasificados["G"][1];
					$H1 = $clasificados["H"][0];
					$H2 = $clasificados["H"][1];
				
				}
				echo '<hr>';

				?>
					
					<h1 align=center> <span class="blanco-negro">&nbspOCTAVOS DE FINAL&nbsp</span>  </h1>
					<div align=center>
					<?php
					for ($contador = 0; $contador <= 7; $contador++) {
						$marcadorA = rand(0,5);
						$marcadorB = rand(0,5);
						$TEA = rand(0,2);
						$TEB = rand(0,2);
						$ganadorOctavos = true;
						$golA = 0;
						$golB = 0;
						$tiros = 0;
						
						switch($contador) {
							case 0:
								$equipoA = $C1;
								$equipoB = $D2;
								break;
							case 1:
								$equipoA = $A1;
								$equipoB = $B2;
								break;
							case 2:
								$equipoA = $B1;
								$equipoB = $A2;
								break;
							case 3:
								$equipoA = $D1;
								$equipoB = $C2;
								break;
							case 4:
								$equipoA = $E1;
								$equipoB = $F2;
								break;
							case 5:
								$equipoA = $G1;
								$equipoB = $H2;
								break;
							case 6:
								$equipoA = $F1;
								$equipoB = $E2;
								break;
							case 7:
								$equipoA = $H1;
								$equipoB = $G2;
								break;
						}
		
						if ($marcadorA > $marcadorB) {
							?>
								<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
									<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
									<td width=125><strong><?php echo $equipoA?></strong></td>
									<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
									<td width=125><?php echo $equipoB?></td>
									<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
								</table>
							<?php

							echo '<br>';
							$cuartosDeFinal[$contador] = $equipoA;
						}
						else if ($marcadorA < $marcadorB) {
							?>
								<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
									<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
									<td width=125><?php echo $equipoA?></td>
									<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
									<td width=125><strong><?php echo $equipoB?></strong></td>
									<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
								</table>
							<?php
							
							echo '<br>';
							$cuartosDeFinal[$contador] = $equipoB;
						}
						else if ($marcadorA == $marcadorB) {
							if ($TEA > $TEB) {
								?>
									<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
										<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
										<td width=125><strong><?php echo $equipoA?></strong></td>
										<td width=150>
										<?php echo $marcadorA . ' - ' . $marcadorB?>
										<br>
										<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
										</td>
										<td width=125><?php echo $equipoB?></td>
										<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
									</table>
								<?php
								
								echo '<br>';
								$cuartosDeFinal[$contador] = $equipoA;
							}
							else if ($TEA < $TEB) {
								?>
									<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
										<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
										<td width=125><?php echo $equipoA?></td>
										<td width=150>
										<?php echo $marcadorA . ' - ' . $marcadorB?>
										<br>
										<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
										</td>
										<td width=125><strong><?php echo $equipoB?></strong></td>
										<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
									</table>
								<?php
								
								echo '<br>';
								$cuartosDeFinal[$contador] = $equipoB;
							}
							else if ($TEA == $TEB) {
				
								while ($ganadorOctavos = true) {
					
									$tiroA = rand(0,5);
									$tiroB = rand(0,5);
									if ($tiroA > 2) {
										$golA = $golA + 1;
									}	
									else {
										$golA = $golA + 0;
									}
									if ($tiroB > 2) {
										$golB = $golB + 1;
									}
									else {
										$golB = $golB + 0;
									}
									if ($tiros == 3) {
										if ($golA == 3 && $golB == 0) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><strong><?php echo $equipoA?></strong></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><?php echo $equipoB?></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoA;
											break;
											$ganadorOctavos = false;
							
										}
										else if ($golA == 0 && $golB == 3) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><?php echo $equipoA?></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><strong><?php echo $equipoB?></strong></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoB;
											break;
											$ganadorOctavos = false;
										}
									}
					
									if ($tiros == 4) {
										if ($golA == 2 && $golB == 0) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><strong><?php echo $equipoA?></strong></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><?php echo $equipoB?></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoA;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 4 && $golB == 2) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><strong><?php echo $equipoA?></strong></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><?php echo $equipoB?></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoA;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 3 && $golB == 1) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><strong><?php echo $equipoA?></strong></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><?php echo $equipoB?></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoA;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 4 && $golB == 1) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><strong><?php echo $equipoA?></strong></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><?php echo $equipoB?></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoA;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 3 && $golB == 0) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><strong><?php echo $equipoA?></strong></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><?php echo $equipoB?></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoA;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 0 && $golB == 2) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><?php echo $equipoA?></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><strong><?php echo $equipoB?></strong></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoB;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 2 && $golB == 4) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><?php echo $equipoA?></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><strong><?php echo $equipoB?></strong></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoB;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 1 && $golB == 3) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><?php echo $equipoA?></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><strong><?php echo $equipoB?></strong></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoB;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 1 && $golB == 4) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><?php echo $equipoA?></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><strong><?php echo $equipoB?></strong></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoB;
											break;
											$ganadorOctavos = false;
										}
										else if ($golA == 0 && $golB == 3) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><?php echo $equipoA?></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><strong><?php echo $equipoB?></strong></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoB;
											break;
											$ganadorOctavos = false;
										}
						
						
									}							
					
									if ($tiros >=5) {
										if ($golA > $golB) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><strong><?php echo $equipoA?></strong></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><?php echo $equipoB?></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoA;
											break;
											$ganadorOctavos = false;
										}
										else if ($golB > $golA) {
											?>
												<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
													<td width=125><?php echo $equipoA?></td>
													<td width=150>
													<?php echo $marcadorA . ' - ' . $marcadorB?>
													<br>
													<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
													<br>
													<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
													</td>
													<td width=125><strong><?php echo $equipoB?></strong></td>
													<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
												</table>
											<?php
											
											echo '<br>';
											$cuartosDeFinal[$contador] = $equipoB;
											break;
											$ganadorOctavos = false;
										}
									}
									$tiros = $tiros + 1;
								}
				
				
							}
			
						}
					}
	
					echo '</div>';
	
					
					//echo '<br>';
	

						echo '<hr>';
						?>
					
					<h1 align=center> <span class="blanco-negro">&nbspCUARTOS DE FINAL&nbsp</span>  </h1>
					<div align=center>
					<?php
						//CUARTOS
						$ganadorA = $cuartosDeFinal[0];
						$ganadorB = $cuartosDeFinal[1];
						$ganadorC = $cuartosDeFinal[2];
						$ganadorD = $cuartosDeFinal[3];
						$ganadorE = $cuartosDeFinal[4];
						$ganadorF = $cuartosDeFinal[5];
						$ganadorG = $cuartosDeFinal[6];
						$ganadorH = $cuartosDeFinal[7];
						
						$semifinal =array(4);
	
						for ($contador = 0; $contador <= 3; $contador++) {
							$marcadorA = rand(0,5);
							$marcadorB = rand(0,5);
							$TEA = rand(0,2);
							$TEB = rand(0,2);
							$ganadorOctavos = true;
							$golA = 0;
							$golB = 0;
							$tiros = 0;
							switch($contador) {
								case 0:
									$equipoA = $ganadorA;
									$equipoB = $ganadorB;
									break;
								case 1:
									$equipoA = $ganadorC;
									$equipoB = $ganadorD;
									break;
								case 2:
									$equipoA = $ganadorE;
									$equipoB = $ganadorF;
									break;
								case 3:
									$equipoA = $ganadorG;
									$equipoB = $ganadorH;
									break;
							}
		
							if ($marcadorA > $marcadorB) {
								?>
									<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
										<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
										<td width=125><strong><?php echo $equipoA?></strong></td>
										<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
										<td width=125><?php echo $equipoB?></td>
										<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
									</table>
								<?php
								echo '<br>';
								$semifinal[$contador] = $equipoA;
							}
							else if ($marcadorA < $marcadorB) {
								?>
									<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
										<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
										<td width=125><?php echo $equipoA?></td>
										<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
										<td width=125><strong><?php echo $equipoB?></strong></td>
										<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
									</table>
								<?php
								echo '<br>';
								$semifinal[$contador] = $equipoB;
							}
							else if ($marcadorA == $marcadorB) {
								if ($TEA > $TEB) {
									?>
										<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
											<td width=125><strong><?php echo $equipoA?></strong></td>
											<td width=150>
											<?php echo $marcadorA . ' - ' . $marcadorB?>
											<br>
											<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
											</td>
											<td width=125><?php echo $equipoB?></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
										</table>
									<?php
									echo '<br>';
									$semifinal[$contador] = $equipoA;
								}
								else if ($TEA < $TEB) {
									?>
										<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
											<td width=125><?php echo $equipoA?></td>
											<td width=150>
											<?php echo $marcadorA . ' - ' . $marcadorB?>
											<br>
											<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
											</td>
											<td width=125><strong><?php echo $equipoB?></strong></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
										</table>
									<?php
									echo '<br>';
									$semifinal[$contador] = $equipoB;
								}
								else if ($TEA == $TEB) {
									
									while ($ganadorOctavos = true) {
										
										$tiroA = rand(0,5);
										$tiroB = rand(0,5);
										if ($tiroA > 2) {
											$golA = $golA + 1;
										}
										else {
											$golA = $golA + 0;
										}
										if ($tiroB > 2) {
											$golB = $golB + 1;
										}
										else {
											$golB = $golB + 0;
										}
										if ($tiros == 3) {
											if ($golA == 3 && $golB == 0) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><strong><?php echo $equipoA?></strong></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><?php echo $equipoB?></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoA;
												break;
												$ganadorOctavos = false;
								
											}
											else if ($golA == 0 && $golB == 3) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><?php echo $equipoA?></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><strong><?php echo $equipoB?></strong></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoB;
												break;
												$ganadorOctavos = false;
											}
										}
						
										if ($tiros == 4) {
											if ($golA == 2 && $golB == 0) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><strong><?php echo $equipoA?></strong></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><?php echo $equipoB?></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoA;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 4 && $golB == 2) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><strong><?php echo $equipoA?></strong></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><?php echo $equipoB?></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoA;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 3 && $golB == 1) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><strong><?php echo $equipoA?></strong></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><?php echo $equipoB?></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoA;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 4 && $golB == 1) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><strong><?php echo $equipoA?></strong></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><?php echo $equipoB?></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoA;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 3 && $golB == 0) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><strong><?php echo $equipoA?></strong></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><?php echo $equipoB?></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoA;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 0 && $golB == 2) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><?php echo $equipoA?></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><strong><?php echo $equipoB?></strong></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoB;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 2 && $golB == 4) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><?php echo $equipoA?></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><strong><?php echo $equipoB?></strong></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoB;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 1 && $golB == 3) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><?php echo $equipoA?></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><strong><?php echo $equipoB?></strong></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoB;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 1 && $golB == 4) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><?php echo $equipoA?></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><strong><?php echo $equipoB?></strong></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoB;
												break;
												$ganadorOctavos = false;
											}
											else if ($golA == 0 && $golB == 3) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><?php echo $equipoA?></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><strong><?php echo $equipoB?></strong></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoB;
												break;
												$ganadorOctavos = false;
											}
							
							
										}
						
										if ($tiros >=5) {
											if ($golA > $golB) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><strong><?php echo $equipoA?></strong></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><?php echo $equipoB?></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoA;
												break;
												$ganadorOctavos = false;
											}
											else if ($golB > $golA) {
												?>
													<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
														<td width=125><?php echo $equipoA?></td>
														<td width=150>
														<?php echo $marcadorA . ' - ' . $marcadorB?>
														<br>
														<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
														<br>
														<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
														</td>
														<td width=125><strong><?php echo $equipoB?></strong></td>
														<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
													</table>
												<?php
												echo '<br>';
												$semifinal[$contador] = $equipoB;
												break;
												$ganadorOctavos = false;
											}
										}
										$tiros = $tiros + 1;
									}	
								}
							}
						}
						echo '</div>';
						
						echo '<hr>';
						
						
							
							$ganadorI = $semifinal[0];
							$ganadorJ = $semifinal[1];
							$ganadorK = $semifinal[2];
							$ganadorL = $semifinal[3];
							
							$final = array(2);
							$tercerLugar = array(2);
							
							?>
					
					<h1 align=center> <span class="blanco-negro">&nbspSEMIFINAL&nbsp</span>  </h1>
					<div align=center>
					<?php
	
							for ($contador = 0; $contador <= 1; $contador++) {
								$marcadorA = rand(0,5);
								$marcadorB = rand(0,5);
								$TEA = rand(0,2);
								$TEB = rand(0,2);
								$ganadorOctavos = true;
								$golA = 0;
								$golB = 0;
								$tiros = 0;
								switch($contador) {
									case 0:
										$equipoA = $ganadorI;
										$equipoB = $ganadorJ;
										break;
									case 1:
										$equipoA = $ganadorK;
										$equipoB = $ganadorL;
										break;
								}
		
								if ($marcadorA > $marcadorB) {
									?>
										<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
											<td width=125><strong><?php echo $equipoA?></strong></td>
											<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=125><?php echo $equipoB?></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
										</table>
									<?php
									echo '<br>';
									$final[$contador] = $equipoA;
									$tercerLugar[$contador] = $equipoB;
								}
								else if ($marcadorA < $marcadorB) {
									?>
										<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
											<td width=125><?php echo $equipoA?></td>
											<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=125><strong><?php echo $equipoB?></strong></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
										</table>
									<?php
									echo '<br>';
									$final[$contador] = $equipoB;
									$tercerLugar[$contador] = $equipoA;
								}
								else if ($marcadorA == $marcadorB) {
									if ($TEA > $TEB) {
										?>
											<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
												<td width=125><strong><?php echo $equipoA?></strong></td>
												<td width=150>
												<?php echo $marcadorA . ' - ' . $marcadorB?>
												<br>
												<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
												</td>
												<td width=125><?php echo $equipoB?></td>
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
											</table>
										<?php
										echo '<br>';
										$final[$contador] = $equipoA;
										$tercerLugar[$contador] = $equipoB;
									}
									else if ($TEA < $TEB) {
										?>
											<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
												<td width=125><?php echo $equipoA?></td>
												<td width=150>
												<?php echo $marcadorA . ' - ' . $marcadorB?>
												<br>
												<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
												</td>
												<td width=125><strong><?php echo $equipoB?></strong></td>
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
											</table>
										<?php
										echo '<br>';
										$final[$contador] = $equipoB;
										$tercerLugar[$contador] = $equipoA;
									}
									else if ($TEA == $TEB) {
										
										while ($ganadorOctavos = true) {
											
											$tiroA = rand(0,5);
											$tiroB = rand(0,5);
											if ($tiroA > 2) {
												$golA = $golA + 1;
											}
											else {
												$golA = $golA + 0;
											}
											if ($tiroB > 2) {
												$golB = $golB + 1;
											}
											else {
												$golB = $golB + 0;
											}
											if ($tiros == 3) {
												if ($golA == 3 && $golB == 0) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoA;
													$tercerLugar[$contador] = $equipoB;
													break;
													$ganadorOctavos = false;
													
												}
												else if ($golA == 0 && $golB == 3) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoB;
													$tercerLugar[$contador] = $equipoA;
													break;
													$ganadorOctavos = false;
												}
											}
					
											if ($tiros == 4) {
												if ($golA == 2 && $golB == 0) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoA;
													$tercerLugar[$contador] = $equipoB;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 4 && $golB == 2) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoA;
													$tercerLugar[$contador] = $equipoB;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 3 && $golB == 1) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoA;
													$tercerLugar[$contador] = $equipoB;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 4 && $golB == 1) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoA;
													$tercerLugar[$contador] = $equipoB;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 3 && $golB == 0) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoA;
													$tercerLugar[$contador] = $equipoB;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 0 && $golB == 2) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoB;
													$tercerLugar[$contador] = $equipoA;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 2 && $golB == 4) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoB;
													$tercerLugar[$contador] = $equipoA;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 1 && $golB == 3) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoB;
													$tercerLugar[$contador] = $equipoA;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 1 && $golB == 4) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoB;
													$tercerLugar[$contador] = $equipoA;
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 0 && $golB == 3) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoB;
													$tercerLugar[$contador] = $equipoA;
													break;
													$ganadorOctavos = false;
												}	
											}
					
											if ($tiros >=5) {
												if ($golA > $golB) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoA;
													$tercerLugar[$contador] = $equipoB;
													break;
													$ganadorOctavos = false;
												}
												else if ($golB > $golA) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													$final[$contador] = $equipoB;
													$tercerLugar[$contador] = $equipoA;
													break;
													$ganadorOctavos = false;
												}
											}
											$tiros = $tiros + 1;
										}	
									}
								}
							}
	
							
							//echo '<br>';
							
							//TERCER LUGAR
						echo '</div>';
							
							echo '<hr>';
								?>
					
					<h1 align=center> <span class="blanco-negro">&nbspTERCER LUGAR&nbsp</span>  </h1>
					<div align=center>
					<?php
								
									$marcadorA = rand(0,5);
									$marcadorB = rand(0,5);
									$TEA = rand(0,2);
									$TEB = rand(0,2);
									$ganadorOctavos = true;
									$golA = 0;
									$golB = 0;
									$tiros = 0;
									
									$equipoA = $tercerLugar[0];
									$equipoB = $tercerLugar[1];
			
		
								if ($marcadorA > $marcadorB) {
									?>
										<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
											<td width=125><strong><?php echo $equipoA?></strong></td>
											<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=125><?php echo $equipoB?></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
										</table>
									<?php
									echo '<br>';
								}
								else if ($marcadorA < $marcadorB) {
									?>
										<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
											<td width=125><?php echo $equipoA?></td>
											<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=125><strong><?php echo $equipoB?></strong></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
										</table>
									<?php
									echo '<br>';
									
								}
								else if ($marcadorA == $marcadorB) {
									if ($TEA > $TEB) {
										?>
											<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
												<td width=125><strong><?php echo $equipoA?></strong></td>
												<td width=150>
												<?php echo $marcadorA . ' - ' . $marcadorB?>
												<br>
												<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
												</td>
												<td width=125><?php echo $equipoB?></td>
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
											</table>
										<?php
										echo '<br>';
									
									}
									else if ($TEA < $TEB) {
										?>
											<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
												<td width=125><?php echo $equipoA?></td>
												<td width=150>
												<?php echo $marcadorA . ' - ' . $marcadorB?>
												<br>
												<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
												</td>
												<td width=125><strong><?php echo $equipoB?></strong></td>
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
											</table>
										<?php
										echo '<br>';

									}
									else if ($TEA == $TEB) {
										
										while ($ganadorOctavos = true) {
											
											$tiroA = rand(0,5);
											$tiroB = rand(0,5);
											if ($tiroA > 2) {
												$golA = $golA + 1;
											}
											else {
												$golA = $golA + 0;
											}
											if ($tiroB > 2) {
												$golB = $golB + 1;
											}
											else {
												$golB = $golB + 0;
											}
											if ($tiros == 3) {
												if ($golA == 3 && $golB == 0) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													break;
													$ganadorOctavos = false;
													
												}
												else if ($golA == 0 && $golB == 3) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
											}
					
											if ($tiros == 4) {
												if ($golA == 2 && $golB == 0) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 4 && $golB == 2) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 3 && $golB == 1) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 4 && $golB == 1) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 3 && $golB == 0) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 0 && $golB == 2) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 2 && $golB == 4) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
							
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 1 && $golB == 3) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 1 && $golB == 4) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 0 && $golB == 3) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												
												
											}
					
											if ($tiros >=5) {
												if ($golA > $golB) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golB > $golA) {
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
											}
											$tiros = $tiros + 1;
										}	
									}
								}

								echo '</div>';
							
							
							echo '<hr>';
								//FINAL
							
							
								?>
							<div align="center">
								<img src="imagenes/copa.gif">
							</div>
					<h1 align=center> <span class="blanco-negro">&nbspFINAL&nbsp</span>  </h1>
					<div align=center>
					<?php
								
									$marcadorA = rand(0,5);
									$marcadorB = rand(0,5);
									$TEA = rand(0,2);
									$TEB = rand(0,2);
									$ganadorOctavos = true;
									$golA = 0;
									$golB = 0;
									$tiros = 0;
									
									$equipoA = $final[0];
									$equipoB = $final[1];
			
		
								if ($marcadorA > $marcadorB) {
									$campeon = $equipoA;
									?>
										<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
											<td width=70 ><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
											<td width=125><strong><?php echo $equipoA?></strong></td>
											<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=125><?php echo $equipoB?></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
										</table>
									<?php
									echo '<br>';
								}
								else if ($marcadorA < $marcadorB) {
									$campeon = $equipoB;
									?>
										<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
											<td width=125><?php echo $equipoA?></td>
											<td width=150><?php echo $marcadorA . ' - ' . $marcadorB?></td>
											<td width=125><strong><?php echo $equipoB?></strong></td>
											<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
										</table>
									<?php
									echo '<br>';
									
								}
								else if ($marcadorA == $marcadorB) {
									if ($TEA > $TEB) {
										$campeon = $equipoA;
										?>
											<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
												<td width=125><strong><?php echo $equipoA?></strong></td>
												<td width=150>
												<?php echo $marcadorA . ' - ' . $marcadorB?>
												<br>
												<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
												</td>
												<td width=125><?php echo $equipoB?></td>
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
											</table>
										<?php
										echo '<br>';
									
									}
									else if ($TEA < $TEB) {
											$campeon = $equipoB;
										?>
											<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
												<td width=125><?php echo $equipoA?></td>
												<td width=150>
												<?php echo $marcadorA . ' - ' . $marcadorB?>
												<br>
												<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
												</td>
												<td width=125><strong><?php echo $equipoB?></strong></td>
												<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
											</table>
										<?php
										echo '<br>';

									}
									else if ($TEA == $TEB) {
										
										while ($ganadorOctavos = true) {
											
											$tiroA = rand(0,5);
											$tiroB = rand(0,5);
											if ($tiroA > 2) {
												$golA = $golA + 1;
											}
											else {
												$golA = $golA + 0;
											}
											if ($tiroB > 2) {
												$golB = $golB + 1;
											}
											else {
												$golB = $golB + 0;
											}
											if ($tiros == 3) {
												if ($golA == 3 && $golB == 0) {
													$campeon = $equipoA;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
													break;
													$ganadorOctavos = false;
													
												}
												else if ($golA == 0 && $golB == 3) {
													$campeon = $equipoB;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
											}
						
											if ($tiros == 4) {
												if ($golA == 2 && $golB == 0) {
													$campeon = $equipoA;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 4 && $golB == 2) {
													$campeon = $equipoA;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 3 && $golB == 1) {
													$campeon = $equipoA;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 4 && $golB == 1) {
													$campeon = $equipoA;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 3 && $golB == 0) {
													$campeon = $equipoA;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 0 && $golB == 2) {
													$campeon = $equipoB;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 2 && $golB == 4) {
													$campeon = $equipoB;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';
							
													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 1 && $golB == 3) {
													$campeon = $equipoB;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 1 && $golB == 4) {
													$campeon = $equipoB;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golA == 0 && $golB == 3) {
													$campeon = $equipoB;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}	
											}
						
											if ($tiros >=5) {
												if ($golA > $golB) {
													$campeon = $equipoA;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><strong><?php echo $equipoA?></strong></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><?php echo $equipoB?></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
												else if ($golB > $golA) {
													$campeon = $equipoB;
													?>
														<table border=1 cellspacing=0 height=50 width=540 background="imagenes/fondo4.jpg">
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoA;?>.png" width="70" height=60></td>
															<td width=125><?php echo $equipoA?></td>
															<td width=150>
															<?php echo $marcadorA . ' - ' . $marcadorB?>
															<br>
															<sub>PROLOGO: <?php echo $TEA . ' - ' . $TEB?></sub>
															<br>
															<sub>PENALES: <?php echo $golA . ' - ' . $golB?></sub>
															</td>
															<td width=125><strong><?php echo $equipoB?></strong></td>
															<td width=70><img src="imagenes/Banderas 2/<?php echo $equipoB;?>.png" width="70" height=60></td>
														</table>
													<?php
													echo '<br>';

													break;
													$ganadorOctavos = false;
												}
											}
											$tiros = $tiros + 1;
										}	
									}
								}

								echo '</div>';

							
			?>
				<br>
				<div align=center>
				<table border=1 width=100 height=250 cellspacing=0 background="imagenes/fra.png">
					<tr>
						<td width=50 height=50>CAMPEÓN:</td>
						<td width=50 height=50><?php echo $campeon; ?></td>
					</tr>
					<tr>
						<td width=50><img src="imagenes/copa2.gif" height=200></td>
						<td width=50 ><img src="imagenes/Banderas 2/<?php echo $campeon;?>.png" width=250 height=200></td>
					</tr>
				</table>
				</div>
				
		</body>
	</html>