<?php 
include_once('con_db.php');

    $cedulaC = $_POST['cedulaC'];
    $nombreC = $_POST['nombreC'];
    $telefonoC = $_POST['telefonoC'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $cantidad = $_POST['cantidad'];

        $query = "insert into registros(cedulaC, nombreC, telefonoC, fecha, hora, cantidad) values ('$cedulaC','$nombreC','$telefonoC','$fecha', '$hora', '$cantidad')"; 
        $resultado = mysqli_query($conn, $query);
 
        $query = "SELECT * FROM registros"; 
        $resultado = mysqli_query($conn, $query);
 
        while ($fila = mysqli_fetch_assoc($resultado)) { 
            ?>
                <tr> 
                    <td><?php echo $fila['cedulaC']; ?> </td>
                    <td><?php echo $fila['nombreC']; ?> </td>
                    <td><?php echo $fila['telefonoC']; ?> </td>
                    <td><?php echo $fila['fecha']; ?> </td>
                    <td><?php echo $fila['hora']; ?> </td>
                    <td><?php echo $fila['cantidad']; ?> </td>
    
                 </tr> 
            <?php
            
                } 
?>       