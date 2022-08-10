
<br><br><br>
<?php
// Definir variables
$descripcionmateriaErr = $nombrejuzgadoErr = $nombreprovinciaErr = $descripcionnivelErr =$mes =$año = $nombremoviErr= "";
$descripcionmateria = $nombrejuzgado  = $nombreprovincia  = $descripcionnivel = $mes =$año = $nombremovi = "";
if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['materia'][0])) {
    $errorsAsun = "\n Debe seleccionar un materia";
  } else {
    $descripcionmateria = dataForm($_POST['materia']);
  
  }


  if (empty($_POST['juzgado'][0])) {
    $errorsAsun = "\n Debe seleccionar un juzgado";
  } else {
    $nombrejuzgado = dataForm($_POST['juzgado']);
  }

  if (empty($_POST['provincia'][0])) {
    $errorsAsun = "\n Debe seleccionar un provincia";
  } else {
    $nombreprovincia = dataForm($_POST['provincia']);
  }
  if (empty($_POST['nivel'][0])) {
    $errorsAsun = "\n Debe seleccionar un nivel";
  } else {
    $descripcionnivel = dataForm($_POST['nivel']);
  }
  if (empty($_POST['mes'][0])) {
    $errorsAsun = "\n Debe seleccionar un mes";
  } else {
    $mes = dataForm($_POST['mes']);
  }
  if (empty($_POST['año'][0])) {
    $errorsAsun = "\n Debe seleccionar un año";
  } else {
    $año = dataForm($_POST['año']);
  }
  if (empty($_POST['tipomovi'][0])) {
    $errorsAsun = "\n Debe seleccionar un tipo de movi";
  } else {
    $nombremovi = dataForm($_POST['tipomovi']);
  }
  


}
function dataForm($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
		<h4><?php echo $titulo; ?></h4>

     <div class="col-md-6">
     <form id="datos" name="datos" method="POST" action="<?php echo base_url();?>nuevomovimientos.php/datos/registrar">

             <label class="col-form-label"><span class="error"> </span>MATERIA</label>
              <select name="materia" id="materia">
                <option value="">Seleccione la materia</option>
                <option value="CIVIL">Civil</option>
                <option value="PENAL">Penal</option>
                <option value="FAMILIA">Familia</option>
                <option value="TRABAJO">Trabajo</option>  
              </select>  
               <br><br><br>

              <span> <label class="col-form-label"><span class="error"> </span>JUZGADOS</label></span>
              <select name="juzgado" id="juzgado">
                <option value="">Seleccione el juzgado</option>
                <option>JUZGADO 1º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 2º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 3º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 4º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 5º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 6º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 7º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 11º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 12º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 13º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 14º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 15º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 16º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 17º DE CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>;
                <option>JUZGADO 18º CIRCUITO CIVIL DEL PRIMER CIRCUITO JUDICIAL</option>; 
              </select>  
               <br><br><br>

               
            <label><span class="error"> </span>PROCINCIA</label>
            <select name="provincia" id="provincia">
              <option value="">Seleccione la provincia</option>
              <option> Bocas del Toro</option>; 
              <option> Coclé</option>;
              <option> Colón</option>;
              <option> Chiriquí</option>;
              <option> Darién</option>;
              <option> Herrera</option>;
              <option> Los Santos</option>;
              <option> Panamá</option>;
              <option> San Miguelito</option>;
              <option> Panamá Oeste</option>;
              <option> Veraguas</option>;
            </select>
            <br><br>
            <label class="col-form-label"><span class="error"> </span>NIVEL</label>
             <select name="nivel" id="nivel">
                <option value="">Seleccione el nivel</option>
                <option>Tribunal</option>
                <option>Circuito</option>
                <option>Municipal</option>
                <option>Municipal Mixto</option>
             </select>
             <br><br>
           
              <label class="col-form-label"><span class="error"> </span>FECHA</label>
             <select name="mes" id="mes">
                <option value="">Seleccione el mes</option>
                <option>Enero</option>
                <option>Febrero</option>
                <option>Marzo</option>
                <option>Abril</option>
                <option>Mayo</option>
                <option>Junio</option>
                <option>Julio</option>
                <option>Agosto</option>
                <option>Septiembre</option>
               <option>Octubre</option>
               <option>Noviembre</option>
               <option>Diciembre</option>
            </select>

             <select name="ano" id="ano">
                <option value="">Seleccione el año</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
                <option>2028</option>
                <option>2029</option>
                <option>2030</option>
                <option>2031</option>
             </select>
              <br><br>
              <label class="col-form-label"><span class="error"> </span>TIPO DE MOVIMIENTO</label>
            <select name="tipomovi" id="tipomovi">
              <option value="">Seleccione tipo movimiento</option>
              <option>AMPARO DE GARANTIAS</option>
              <option>ORDINARIOS</option>
              <option>ORALES</option>
              <option>SUMARIOS</option>
              <option>SUCESIONES</option>
              <option>PROCESOS NO CONTENCIOSOS</option>
              <option>EJECUTIVOS SIMPLES</option>
              <option>EJECUTIVOS HIPOTECARIOS</option>
              <option>EJECUTIVOS PRENDARIOS</option>
              <option>PROCESOS DE QUIEBRAS Y CONCURSOS DE ACREEDORES</option>
              <option>QUEJAS</option>
              <option>REINICIADOS / REACTIVADOS</option>
              <option>SEGUNDA INSTANCIA</option>
            </select>
           
           <br><br><br>

      <div class="form-group">

			<input type="submit" class="btn btn-primary" value="registrar">
      
       <!-- <button class=" btn-primary  " name="submit">Enviar</button> -->
    </div>

    </div>
    </form> 
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($descripcionmateriaErr) and empty($nombrejuzgadoErr) and empty($nombreprovinciaErr) and empty($AutosErr) ) {


echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<br><h6>Tus valores son:</h6>";
echo "<strong>Materia</strong>: ".$descripcionmateria;
echo "<br>";
echo "<strong>Juzgado</strong>: ".$nombrejuzgado;
echo "<br>";
echo "<strong>Provincia</strong>: ".$nombreprovincia;
echo "<br>";
echo "<strong>Nivel</strong>: ".$descripcionnivel;
echo "<br>";
echo "<strong>Mes</strong>: ".$mes;
echo "<br>";
echo "<strong>Año</strong>: ".$año;
echo "<br>";
echo "<strong>Tipo de movimiento</strong>: ".$nombremovi;


}
}
?>
