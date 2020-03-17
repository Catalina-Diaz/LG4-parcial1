<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>

<body>
    <center>
    <form action="guardarpersona.php" method="post">
        <div>
            <h2>Crear Usuario</h2>
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre">       
        </div>

        <div class="form-group">
        <br><label for="">Apellido</label>
            <input type="text" name="apellido">
        </div>

        <div class="form-group">
        <br><label for="">Email</label>
            <input type="text" name="email">
        </div>

        <div class="form-group">
        <br><label for="">Password</label>
            <input type="password" name="pasword">
        </div>

        <div>
        <br><button type="submit" name="guardar">Guardar</button>
            <a href="index.php">Volver</a>
        </div>


    </form>
    </center>

</body>
</html>