<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>uso de index</title>
  </head>
  <body>
  <div class = 'container'>
    <div class='raw justify-content-center'>
    </div class='col- 6 p-5 bg-write sadown-lg rouded'>
    <form method='POST' action='recibe_datos.php'>
      <div class="form_grup">
        <label for='materia'>Materia</label>
        <input id='materia'class='form_control'type=text name='materia'>
        
     </div>
     <div class="form_grup">
        <label for='provincia'>provincia</label>
       <input id='provincia'class='form_control'type=text name='provincia'>
     </div><br>
     <button class= 'btn btn_primary'type ='submit'>Enviar</button>
   </form>
 </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
  </body>
</html>