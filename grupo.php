<!DOCTYPE html>
<html>
<head>
	<title>Mundial 2018</title>
	<meta charset="utf-8">
	<link rel="icon" href="imagenes/copa.png"> 
	<link rel="stylesheet" type="style.css">
	<style>
		legend {
			color:blue;
		}

      .boton{
        font-size:10px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color:white;
        background:#638cb5;
        border:0px;
        width:80px;
        height:19px;
       }
	</style>
</head>
<body style="background-image: url(imagenes/2.jpg);">
<form method="post" action="prueba.php" autocomplete=off>
<center>
<img src="imagenes/icono.png" width="200">
</center>
	<div style="background-image:url(imagenes/fra.png) ;">	
	<center>	 
	<h1>
	<p> 2018 FIFA WORLD CUP RUSSIA</p>
    <p> 14 JUNIO - 15 JULIO</p>
    </h1>
    </center>
    </div>     
<table align="center">
   <tr>
      <td>
         <table width="240">
            <tr>
               <td>
                  <fieldset>
                        <legend>GRUPO A</legend>
                        <p><img src="imagenes/Rusia.png" width="30">
                        <input type="radio" name="pais"
                        <?php
                        if (isset($pais) && $pais=="Rusia") echo "checked";?>
                           value="Rusia" required>Rusia
                        <br>
                        <br>
                        <img src="imagenes/Arabia Saudita.png" width="30">
                        <input type="radio" name="pais"
                        <?php
                        if (isset($pais) && $pais=="Arabia Saudita") echo "checked";?>
                           value="Arabia Saudita" required>Arabia Saudita
                        <br>   
                        <br>

                        <img src="imagenes/Egipto.png" width="30">
                        <input type="radio" name="pais"
                        <?php
                        if (isset($pais) && $pais=="Egipto") echo "checked";?>
                           value="Egipto" required>Egipto
                        <br>
                        <br>   
                        <img src="imagenes/Uruguay.png" width="30">
                        <input type="radio" name="pais"
                        <?php
                        if (isset($pais) && $pais=="Uruguay") echo "checked";?>
                           value="Uruguay" required>Uruguay
                  </fieldset>

               </td>
            </tr>       
         </table>
      </td>
   
      <td>
            <table width="240">
               <tr>
                  <td>

                  <fieldset>
                          <legend>GRUPO B</legend>
                        <p>
                        <img src="imagenes/Portugal.png" width="30">
                        <input type="radio" name="pais"
                        <?php
                        if (isset($pais) && $pais=="Portugal") echo "checked";?>
                           value="Portugal" required>Portugal
                        <br>
                        <br>
                        <img src="imagenes/España.png" width="30">
                        <input type="radio" name="pais"
                        <?php
                        if (isset($pais) && $pais=="España") echo "checked";?>
                           value="España" required>España
                        <br>   
                        <br>
                        <img src="imagenes/Marruecos.png" width="30">
                        <input type="radio" name="pais"
                        <?php
                        if (isset($pais) && $pais=="Marruecos") echo "checked";?>
                           value="Marruecos" required>Marruecos
                        <br>
                        <br>   
                        <img src="imagenes/Irán.png" width="30">
                        <input type="radio" name="pais"
                        <?php
                        if (isset($pais) && $pais=="Iran") echo "checked";?>
                           value="Iran" required>Irán
                  </fieldset>

                  </td>
               </tr>
            </table>
      </td>

      <td>
          <table width="240">
                 <tr>
                 <td>
               <fieldset>
      <legend>GRUPO C</legend>
      <p>
      <img src="imagenes/Francia.png" width="30">  
      <input type="radio" name="pais"
      <?php
      if (isset($pais) && $pais=="Francia") echo "checked";?>
         value="Francia" required>Francia
      <br>
      <br>
      <img src="imagenes/Australia.png" width="30">
      <input type="radio" name="pais"
      <?php
      if (isset($pais) && $pais=="Australia") echo "checked";?>
         value="Australia" required>Australia
      <br>   
      <br>
      <img src="imagenes/Perú.png" width="30">
      <input type="radio" name="pais"
      <?php
      if (isset($pais) && $pais=="Peru") echo "checked";?>
         value="Peru" required>Perú
      <br>
      <br>   
      <img src="imagenes/Dinamarca.png" width="30">
      <input type="radio" name="pais"
      <?php
      if (isset($pais) && $pais=="Dinamarca") echo "checked";?>
         value="Dinamarca" required>Dinamarca
               </fieldset>
               </td>
               </tr>
            </table>
      </td>

      <td>
            <table width="240">
               <tr>
                  <td>

                  <fieldset>
               <legend>GRUPO D</legend>
      <p>
      <img src="imagenes/Argentina.png" width="30">   
      <input type="radio" name="pais"
      <?php
      if (isset($pais) && $pais=="Argentina") echo "checked";?>
         value="Argentina" required>Argentina
      <br>
      <br>
      <img src="imagenes/Islandia.png" width="30">
      <input type="radio" name="pais"
      <?php
      if (isset($pais) && $pais=="Islandia") echo "checked";?>
         value="Islandia" required>Islandia
      <br>   
      <br>
      <img src="imagenes/Croacia.png" width="30">
      <input type="radio" name="pais"
      <?php
      if (isset($pais) && $pais=="Croacia") echo "checked";?>
         value="Croacia" required>Croacia
      <br>
      <br>   
      <img src="imagenes/Nigeria.png" width="30">
      <input type="radio" name="pais"
      <?php
      if (isset($pais) && $pais=="Nigeria") echo "checked";?>
         value="Nigeria" required>Nigeria
               </fieldset>
               </td>
               </tr>
               </table>
      </td>    
   </tr>      
<br>
<br>
   <tr>
      <td>
         
         <table width="240">
                        <tr>
                           <td>
            <fieldset>
            <legend>GRUPO E</legend>
               <p>
               <img src="imagenes/Brasil.png" width="30">   
               <input type="radio" name="pais"
               <?php
               if (isset($pais) && $pais=="Brasil") echo "checked";?>
                  value="Brasil" required>Brasil
               <br>
               <br>
               <img src="imagenes/Suiza.png" width="30">
               <input type="radio" name="pais"
               <?php
               if (isset($pais) && $pais=="Suiza") echo "checked";?>
                  value="Suiza" required>Suiza
               <br>   
               <br>
               <img src="imagenes/Costa Rica.png" width="30">
               <input type="radio" name="pais"
               <?php
               if (isset($pais) && $pais=="Costa Rica") echo "checked";?>
                  value="Costa Rica" required>Costa Rica
               <br>
               <br>   
               <img src="imagenes/Serbia.png" width="30">
               <input type="radio" name="pais"
               <?php
               if (isset($pais) && $pais=="Serbia") echo "checked";?>
                  value="Serbia" required>Serbia
         </fieldset>
         </td>
         </tr>
         </table>

      </td>


      <td>
             <table width="240">
               <tr>
                  <td>
              <fieldset>
              <legend>GRUPO F</legend>
            <p>
            <img src="imagenes/Alemania.png" width="30"> 
            <input type="radio" name="pais"
            <?php
            if (isset($pais) && $pais=="Alemania") echo "checked";?>
               value="Alemania" required>Alemania
            <br>
            <br>
            <img src="imagenes/México.png" width="30">
            <input type="radio" name="pais"
            <?php
            if (isset($pais) && $pais=="Mexico") echo "checked";?>
               value="Mexico" required>México
            <br>   
            <br>
            <img src="imagenes/Suecia.png" width="30">
            <input type="radio" name="pais"
            <?php
            if (isset($pais) && $pais=="Suecia") echo "checked";?>
               value="Suecia" required>Suecia
            <br>
            <br>   
            <img src="imagenes/República de Corea.png" width="30">
            <input type="radio" name="pais"
            <?php
            if (isset($pais) && $pais=="Republica de Corea") echo "checked";?>
               value="Republica de Corea" required>República de Corea
      </fieldset>
                </tr>
                </td>
                </table>
                </td>

      <td>        
         <table width="240">
           <tr>
            <td>
   <fieldset>
           <legend>GRUPO G</legend>
         <p>
         <img src="imagenes/Bélgica.png" width="30">
         <input type="radio" name="pais"
         <?php
         if (isset($pais) && $pais=="Belgica") echo "checked";?>
            value="Belgica" required>Bélgica
         <br>
         <br>
         <img src="imagenes/Panamá.png" width="30">
         <input type="radio" name="pais"
         <?php
         if (isset($pais) && $pais=="Panama") echo "checked";?>
            value="Panama" required>Panamá
         <br>   
         <br>
         <img src="imagenes/Túnez.png" width="30">
         <input type="radio" name="pais"
         <?php
         if (isset($pais) && $pais=="Tunez") echo "checked";?>
            value="Tunez" required>Túnez
         <br>
         <br>   
         <img src="imagenes/Inglaterra.png" width="30">
         <input type="radio" name="pais"
         <?php
         if (isset($pais) && $pais=="Inglaterra") echo "checked";?>
            value="Inglaterra" required>Inglaterra
   </fieldset>
   </tr>
   </td>
   </table>
   </td>

   <td>
      <table width="240">
           <tr>
            <td>
      <fieldset>
              <legend>GRUPO H</legend>
            <p>
            <img src="imagenes/Polonia.png" width="30">  
            <input type="radio" name="pais"
            <?php
            if (isset($pais) && $pais=="Polonia") echo "checked";?>
               value="Polonia" required>Polonia
            <br>
            <br>
            <img src="imagenes/Senegal.png" width="30">
            <input type="radio" name="pais"
            <?php
            if (isset($pais) && $pais=="Senegal") echo "checked";?>
               value="Senegal" required>Senegal
            <br>   
            <br>
            <img src="imagenes/Colombia.png" width="30">
            <input type="radio" name="pais"
            <?php
            if (isset($pais) && $pais=="Colombia") echo "checked";?>
               value="Colombia" required>Colombia
            <br>
            <br>   
            <img src="imagenes/Japón.png" width="30">
            <input type="radio" name="pais"
            <?php
            if (isset($pais) && $pais=="Japon") echo "checked";?>
               value="Japon" required>Japon
      </fieldset>
      </tr>
      </td>
      </table>
      </td>
   </tr>
<br>
<br>
</table>

	<div>
		<h1>Ingresar marcadores:</h1>
		<table width="500">
			<tr>
				<td>Primer partido:</td>
				<td>Segundo partido:</td>
				<td>Tercer partido:</td>
			</tr>
			<tr>
				<td><input type="number" min=0 max=7 name="marcadorA1" required></td>
				<td><input type="number" min=0 max=7 name="marcadorA2" required></td>
				<td><input type="number" min=0 max=7 name="marcadorA3" required></td>
			</tr>
		</table>
	</div>

	<input type="submit" value="Simular" class="boton">
</form>
</body>
</html>