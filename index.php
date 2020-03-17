<?php 
    include('includes/db.php');

    $sql = "select * from persona";
    $result = DB::query($sql);
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            Listado de Usuarios
        </h1>
    </div>

    <div>
        <table border="1px" class="table">
            <thead>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Nombre</b></td>
                    <td><b>Apellido</b></td>
                    <td><b>Email</b></td>
                    <td><b>Estado</b></td>
                    <td><b>Acciones</b></td>     
                </tr>
           
            </thead>

            <tbody class="center">

            <?php while($mostrar=mysqli_fetch_array($result)){ //cuando se quiere recorrer varios objetos, array?> 
                <tr>
                    <td><?= $mostrar['id'] ?></td>
                    <td><?= $mostrar['nombre'] ?></td>
                    <td><?= $mostrar['apellido'] ?></td>
                    <td><?= $mostrar['email'] ?></td>
                    
                    <td class = "<?=$mostrar['estado'] ?>"><?=$mostrar['estado']?></td>
                    <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">

                    <td>
                    
                        <?php if($mostrar['estado'] == "activo"){ ?>
                            <a href="guardarpersona.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">inactivar</a>
                        <?php }else{ ?>
                            <a href="guardarpersona.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">activar</a>
                        <?php } ?>
                            <a href="editarpersona.php?id=<?= $mostrar['id']?>">Editar</a>
                    </td>
                    
                    
                </tr>
                
            <?php } ?>
                 
            </tbody>
        </table>
        <center>
        <br><a href="crear.php">Nuevo</a>
        </center>
        
    </div>
</div>

</body>
</html>