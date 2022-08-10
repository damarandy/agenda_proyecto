  
   <Form>
    <table id="data_table" class="table table-striped">
        <thead>
            <tr>
                <th>Pendiente del mes anterior</th>
                <th>Ingresos</th>
                <th>Sentencias</th>
                <th>autos</th>   
                <th>Pendientes del mes actual</th>
            </tr>
        </thead>
        <tbody>
            
               
               <td><?php echo $Pmesant; ?></td>
               <td><?php echo $Ingresos; ?></td>
               <td><?php echo $Sentencias; ?></td>
               <td><?php echo $Autos; ?></td>   
               <td><?php echo $Pmesactual; ?></td>  
               </tr>
            
        </tbody>
    </table>  
    <button type="submit" id="btnAddState" name="btnAddState" class="btn btn-primary col-sm-2 col-3 mx-1"><i class="fas fa-save mr-2"></i> Regresar</button> 
    <button type="button" class="btn btn-primary col-sm-2 col-3 mx-1" data-dismiss="modal"><i class="fas fa-times mr-2"></i> Cancelar</button>
    
   
  

  