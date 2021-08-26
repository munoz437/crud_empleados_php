<?php
    if (isset($_POST["btn_agregar"])) {
        include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host, $db_usr, $db_pass,$db_name);
        $txt_codigo = utf8_decode($_POST["txt_codigo"]);
        $txt_nombres =utf8_decode($_POST["txt_nombres"]);
        $txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
        $txt_direccion = utf8_decode($_POST["txt_direccion"]);
        $txt_telefono = utf8_decode($_POST["txt_telefono"]);
        $drop_puesto = utf8_decode($_POST["drop_puesto"]);
        $txt_fn = utf8_decode($_POST["txt_fn"]);
        $sql = "INSERT INTO empleados(codigo, nombres, apellidos, direccion, telefono, fecha_nacimiento, id_puesto) VALUES ('".$txt_codigo."','".$txt_nombres."','".$txt_apellidos."','".$txt_direccion."','".$txt_telefono."','".$txt_fn."',".$drop_puesto.");";
        if ($db_conexion->query($sql)===true) {
            $db_conexion ->close();
           // header("Refresh:0");
            header('location: index.php');
            //ob_end_flush();
        }else{
            echo"Error".$sql."<br>".$db_conexion->close();
        }
    }

    if (isset($_POST["btn_editar"])) {
        include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host, $db_usr, $db_pass,$db_name);
        $txt_id= utf8_decode($_POST["txt_id"]);
        $txt_codigo = utf8_decode($_POST["txt_codigo"]);
        $txt_nombres =utf8_decode($_POST["txt_nombres"]);
        $txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
        $txt_direccion = utf8_decode($_POST["txt_direccion"]);
        $txt_telefono = utf8_decode($_POST["txt_telefono"]);
        $drop_puesto = utf8_decode($_POST["drop_puesto"]);
        $txt_fn = utf8_decode($_POST["txt_fn"]);

        $sql = "update empleados set codigo='".$txt_codigo."', nombres='".$txt_nombres."', apellidos='".$txt_apellidos."', direccion='".$txt_direccion."', telefono='".$txt_telefono."', fecha_nacimiento='".$txt_fn."', id_puesto=".$drop_puesto." WHERE id_empleado=".$txt_id.";";
        if ($db_conexion->query($sql)===true) {
            $db_conexion ->close();
            header('location: index.php');
        }else{
            echo"Error".$sql."<br>".$db_conexion->close();
        }
    }





    if (isset($_POST["btn_eliminar"])) {
        include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host, $db_usr, $db_pass,$db_name);
        $txt_id=utf8_decode($_POST["txt_id"]);
     
         $sql = "delete from empleados where id_empleado =".$txt_id.";";
        if ($db_conexion->query($sql)===true) {
            $db_conexion ->close();
            header('location: index.php');
        }else{
            echo"Error".$sql."<br>".$db_conexion->close();
        }
    }
?>