<br><br><br>
 <?php
// Definir variables
$PmesantErr = $IngresosErr = $SentenciasErr = $AutosErr = $TipomoviErr= "";
$Pmesant = $Ingresos  = $Sentencias  = $Autos = $Pmesactual = $Tipomovi = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["tipomovi"])) {
   $TipomoviErr = "Nombre es requerido";
   }else {
   $Tipomovi = validar_input($_POST["tipomovi"]);
   }

   if (empty($_POST["pmesant"])) {
   $PmesantErr = "Nombre es requerido";
   }else {
   $Pmesant = validar_input($_POST["pmesant"]);
   }

   if (empty($_POST["ingresos"])) {
   $IngresosErr = "Nombre es requerido";
   }else {
   $Ingresos = validar_input($_POST["ingresos"]);
   }

   if (empty($_POST["sentencias"])) {
   $SentenciasErr = "Nombre es requerido";
   }else {
   $Sentencias = validar_input($_POST["sentencias"]);
   }

   if (empty($_POST["autos"])) {
   $AutosErr = "Nombre es requerido";
   }else {
   $Autos = validar_input($_POST["autos"]);
   }

}
function validar_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['tipomovi'][0])) {
    $errorsAsun = "\n Debe seleccionar un materia";
  } else {
    $Tipomovi = dataForm($_POST['tipomovi']);
  
  }

}

function dataForm($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
<div class="container">
<br>
<div class="card bg-light">

<div class="card-body">


<div class="row">
     <div class="col-md-6">
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <label class="col-form-label"><span class="error"> </span>TIPO DE MOVIMIENTO</label>
            <select name="tipomovi" id="tipomovi">
              <option value="">Seleccione tipo movimiento</option>
              <option value="AMPARO DE GARANTIAS">AMPARO DE GARANTIAS</option>
              <option value="ORDINARIOS">ORDINARIOS</option>
              <option value="ORALES">ORALES</option>
              <option value="SUMARIO">SUMARIO</option>
              <option value="SUCESIONES">SUCESIONES"></option>
              <option value="PROCESOS NO CONTENCIOSOS">PROCESOS NO CONTENCIOSOS</option>
              <option value="EJECUTIVOS SIMPLES">EJECUTIVOS SIMPLES</option>
              <option value="EJECUTIVOS HIPOTECARIOS">EJECUTIVOS HIPOTECARIOS</option>
              <option value="EJECUTIVOS PRENDARIOS">EJECUTIVOS PRENDARIOS</option>
              <option value="PROCESOS DE QUIEBRAS Y CONCURSOS DE ACREEDORES">PROCESOS DE QUIEBRAS Y CONCURSOS DE ACREEDORES</option>
              <option value="QUEJAS">QUEJAS</option>
              <option value="REINICIADOS / REACTIVADOS">REINICIADOS / REACTIVADOS</option>
              <option value="SEGUNDA INSTANCIA">SEGUNDA INSTANCIA</option>
           </select>
           
           <br><br><br>

          <div class="form-group">
          <label class="col-form-label"><span class="error"> </span>PENDIENTE DEL MES ANTERIOR</label>
          <input name="pmesant" type="number" class="form-control" value="<?php if (!empty($_POST["pmesant"])) {
           echo $Pmesant; }else {echo "";}?>">
          <span class="error invalid-feedback"> <?php echo $PmesantErr;?></span>
          </div>

         
         <div class="form-group">
          <label class="col-form-label"><span class="error"></span>INGRESOS</label>
          <input name="ingresos" type="number" class="form-control" value="<?php if (!empty($_POST["ingresos"])) {
           echo $Ingresos; }else {echo "";}?>">
          <span class="error invalid-feedback"> <?php echo $IngresosErr;?></span>
          </div>

          <div class="form-group">
          <label class="col-form-label"><span class="error"></span>SENTENCIAS</label>
          <input name="sentencias" type="number" class="form-control" value="<?php if (!empty($_POST["sentencias"])) {
           echo $Sentencias; }else {echo "";}?>">
          <span class="error invalid-feedback"> <?php echo $SentenciasErr;?></span>
          </div>

          <div class="form-group">
          <label class="col-form-label"><span class="error"></span>AUTOS</label>
          <input name="autos" type="number" class="form-control" value="<?php if (!empty($_POST["autos"])) {
           echo $Autos; }else {echo "";}?>">
          <span class="error invalid-feedback"> <?php echo $AutosErr;?></span>
          </div>
           
    </div>
    <div class="form-group">
      <br><br><br><br>
      <br><br><br><br>
      <br><br><br><br>
      <br><br><br><br>
      <br><br><br><br>
      
    <button class="btn btn btn-primary " name="submit">Enviar</button>
    </div>
</form>
</div>

</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($PmesantErr) and empty($IngresosErr) and empty($SentenciasErr) and empty($AutosErr) ) {


echo "<br><h6>Tus valores son:</h6>";
echo "<strong>Movimiento</strong>: ".$Tipomovi;
echo "<br>";
echo "<strong>Pendiente del mes anterior</strong>: ".$Pmesant;
echo "<br>";
echo "<strong>Ingresos</strong>: ".$Ingresos;

echo "<br>";
echo "<strong>Sentencias</strong>: ".$Sentencias;
echo "<br>";
echo "<strong>Autos</strong>: ".$Autos;
echo "<br>";
}
}
?>
</div>
</div>
</div>
</body>
</html>

