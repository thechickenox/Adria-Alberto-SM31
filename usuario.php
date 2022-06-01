<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>usuario</title>
</head>
<body>
    <h3>Registrar usuarios</h3>
    <form action="registrousuario.php" method="POST">

        <div class="mb-3">
            <label class="from-lable">Ingrese su Nombre</label>
            <input type="text" class="form-control" name="codnombre" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su apellido paterno</label>
            <input type="text" class="form-control" name="codapellido_paterno" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su apellido materno </label>
            <input type="text" class="form-control" name="codapellido_materno" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su telefono</label>
            <input type="number" class="form-control" name="codtelefono" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su correo electronico </label>
            <input type="text" class="form-control" name="codcorreo" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Ingrese su nombre de usuario </label>
            <input type="text" class="form-control" name="codusuario" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">*Ingrese su contraseña</label>
            <input type="text" class="form-control" name="codcontrasena" required/>
        </div>
        
        <input type="submit" name="enviar" value="Registrar Usuario" class="btn btn-primary">
    </form>





    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Nombre</th>
                <th scope="col">apellidomaterno</th>
                <th scope="col">apellidopaterno</th>
                <th scope="col">telefono</th>
                <th scope="col">correo</th>
                <th scope="col">usuario</th>
                <th scope="col">constraseña</th>
            </tr>
        </thead>
        <!--aqui va la base de datos-->



        <tbody>
        <?php
            include('conec.php'); 
            $consulta = "SELECT * FROM usuario";

            $resultado =mysqli_query($conexion,$consulta);

            while($fila =mysqli_fetch_array($resultado)){

            
            ?>
                <tr>
                    <th scope="row"> <?php echo $fila["nombre"] ?></th>
                    <td> <?php echo $fila["apellido_paterno"] ?></td>
                    <td> <?php echo $fila["apeliido_materno"] ?></td>
                    <td> <?php echo $fila["telefono"] ?></td>
                    <td> <?php echo $fila["correo"] ?></td>
                    <td> <?php echo $fila["usuario"] ?></td>
                    <td> <?php echo $fila["contrasena"] ?></td>
                <tr>
            <?php } ?>
        </tbody>

    


    
</body>
</html>