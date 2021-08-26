<!doctype html>
<html lang="en">
  <head>
    <title>Empleados</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootswhatch CSS--->
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">


    <!-- Bootstrap CSS v5
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    -->
<style>
    body {
        background: #02AAB0;  
        background: -webkit-linear-gradient(to left, #00CDAC, #02AAB0); 
        background: linear-gradient(to left, #00CDAC, #02AAB0); 
    }
    h1{
        text-align: center;
    }
</style>
  </head>
  <body>
    <h1>Formulario Empleados</h1>

    <!-- Modal -->
    <div class="modal" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Empleados</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
      <form class="d-flex" action="crud_empleado.php" method="post">

<div class="col">
    <div class="mb-3">
       
        <input type="hidden" name="txt_id" id="txt_id" class="form-control" placeholder="0"  readonly>
    </div>
    <div class="mb-3">
        <label for="lbl_codigo" class="form-label"><b>Código</b></label>
        <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="Código: E001" required>
    </div>

    <div class="mb-3">
        <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
        <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="Nombres: Nombre1 nombre2" required>
    </div>

    <div class="mb-3">
        <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
        <input type="text" name="txt_apellidos" id="txt_apellidos" class="form-control" placeholder="Apellidos: Apellido1 Apellido2" required>
    </div>

    <div class="mb-3">
        <label for="lbl_direccion" class="form-label"><b>Dirección</b></label>
        <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Dirección: Ciudad..." required>
    </div>

    <div class="mb-3">
        <label for="lbl_telefono" class="form-label"><b>Teléfono</b></label>
        <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="Teléfono: 45656787" required>
    </div>

    <div class="mb-3">
      <label for="lbl_puesto" class="form-label"><b>Puesto</b></label>
      <select class="form-select" name="drop_puesto" id="drop_puesto">
        <option value=0>--- Puesto ---</option>
       <?php 
            //CONEXION Y SELECT
            include("datos_conexion.php");
            $db_conexion = mysqli_connect($db_host, $db_usr, $db_pass,$db_name);

            $db_conexion->real_query("SELECT id_puesto as id, puesto FROM puestos");
            $resultado=$db_conexion->use_result();


            while ($fila = $resultado->fetch_assoc()) {
               echo "<option value=". $fila['id'].">".$fila['puesto']."</option>";
            }

            $db_conexion->close();
       ?>
     
      </select>
    </div>

    <div class="mb-3">
        <label for="lbl_fn" class="form-label"><b>Fecha de Nacimiento</b></label>
        <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="dd-mm-aaaa" required>
    </div>

    <div class="mb-3">
        <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
        <input type="submit" name="btn_editar" id="btn_editar" class="btn btn-warning" value="Editar">
        <input type="submit" name="btn_eliminar" id="btn_eliminar" class="btn btn-danger" value="Eliminar">

    </div>


   

</div>

</form>
      </div>
      <!-- <div class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
    <div class="container">
        <!-- <form class="d-flex" action="" method="post">

            <div class="col">
                <div class="mb-3">
                    <label for="lbl_codigo" class="form-label"><b>Código</b></label>
                    <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="Código: E001" required>
                </div>

                <div class="mb-3">
                    <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
                    <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="Nombres: Nombre1 nombre2" required>
                </div>

                <div class="mb-3">
                    <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
                    <input type="text" name="txt_apellidos" id="txt_apellidos" class="form-control" placeholder="Apellidos: Apellido1 Apellido2" required>
                </div>

                <div class="mb-3">
                    <label for="lbl_direccion" class="form-label"><b>Dirección</b></label>
                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Dirección: Ciudad..." required>
                </div>

                <div class="mb-3">
                    <label for="lbl_telefono" class="form-label"><b>Teléfono</b></label>
                    <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="Teléfono: 45656787" required>
                </div>

                <div class="mb-3">
                  <label for="lbl_puesto" class="form-label"><b>Puesto</b></label>
                  <select class="form-select" name="drop_puesto" id="drop_puesto">
                    <option value=0>--- Puesto ---</option>
                   <?php 
                        //CONEXION Y SELECT
                        // include("datos_conexion.php");
                        // $db_conexion = mysqli_connect($db_host, $db_usr, $db_pass,$db_name);

                        // $db_conexion->real_query("SELECT id_puesto as id, puesto FROM puestos");
                        // $resultado=$db_conexion->use_result();


                        // while ($fila = $resultado->fetch_assoc()) {
                        //    echo "<option value=". $fila['id'].">".$fila['puesto']."</option>";
                        // }

                        // $db_conexion->close();
                   ?>
                 
                  </select>
                </div>

                <div class="mb-3">
                    <label for="lbl_fn" class="form-label"><b>Fecha de Nacimiento</b></label>
                    <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="dd-mm-aaaa" required>
                </div>

                <div class="mb-3">
                    <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
                </div>
               

            </div>
          
        </form> -->
                        
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>

        <table class="table table-striped table-inverse table-responsive table-dark">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>Código</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Puesto</th>
                    <th>Nacimiento</th>
                </tr>
                </thead>
                <tbody id="tbl_empleados">
                    <?php
                        include("datos_conexion.php");
                        $db_conexion = mysqli_connect($db_host, $db_usr, $db_pass,$db_name);

                         $db_conexion->real_query("select e.id_empleado,e.codigo,e.nombres,e.apellidos,e.direccion,e.telefono,e.fecha_nacimiento,e.id_puesto, p.puesto from db_empresa_2021.empleados as e inner join db_empresa_2021.puestos as p on e.id_puesto = p.id_puesto ;");
                         $resultado=$db_conexion->use_result();
 
                         while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr data-id=".$fila['id_empleado']." data-id_p=".$fila['id_puesto']. ">";
                                echo "<td>".$fila['codigo']."</td>";
                                echo "<td>".$fila['nombres']."</td>";
                                echo "<td>".$fila['apellidos']."</td>";
                                echo "<td>".$fila['direccion']."</td>";
                                echo "<td>".$fila['telefono']."</td>";
                                echo "<td>".$fila['puesto']."</td>";                            
                                echo "<td>".$fila['fecha_nacimiento']."</td>";                           
                            echo "</tr>";
                         }
                          $db_conexion->close();
                    ?>
                   
                </tbody>
        </table>
        
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('#tbl_empleados').on('click', 'tr td',function(evt){
            var target,id,id_p,codigo,nombres,apellidos,direccion,telefono,nacimiento;
            target = $(event.target);
            id=target.parent().data('id');
            id_p=target.parent().data('id_p');
            codigo=target.parent("tr").find("td").eq(0).html();
            nombres=target.parent("tr").find("td").eq(1).html();
            apellidos=target.parent("tr").find("td").eq(2).html();
            direccion=target.parent("tr").find("td").eq(3).html();
            telefono=target.parent("tr").find("td").eq(4).html();
            nacimiento=target.parent("tr").find("td").eq(6).html();
            $("#txt_id").val(id);

            $("#txt_codigo").val(codigo);

            $("#txt_nombres").val(nombres);

            $("#txt_apellidos").val(apellidos);

            $("#txt_direccion").val(direccion);

            $("#txt_telefono").val(telefono);

            $("#txt_fn").val(nacimiento);

            $("#drop_puesto").val(id_p);

            $("#exampleModal").modal('show');
           
        });
    </script>

</body>
</html>