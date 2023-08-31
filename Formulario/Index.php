<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Reto globant</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $tipoId = $_POST['tipoId'];
        $numeroDoc = $_POST['numeroDoc'];
        $consulta = $_POST['consulta'];
    }
    ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
 <section class="form">
    <h4>Formulario</h4>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese Su Nombre Completo"  value="<?php if(isset($nombre)) echo $nombre ?>">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese Su Correo Electronico"  value="<?php if(isset($correo)) echo $correo ?>">
    <input class="controls" type="number" name="telefono" id="telefono" placeholder="Ingreso Su Numero De Telefono"  value="<?php if(isset($telefono)) echo $telefono ?>">
    <select class="controls" type="text" name="tipoId" id="tipo-id" placeholder="Tipo De Identificacion">
        <option value="T.I">T.I</option>
        <option value="C.I">C.C</option>
        <option value="C.E">C.E</option>              
    </select>
    <input class="controls" type="number" name="numeroDoc" id="" placeholder="Ingrese Su Numero De Identificacion"  value="<?php if(isset($numeroDoc)) echo $numeroDoc ?>">
            
    <textarea rows="5"   class="controls" type="text" name="consulta" id="consulta" placeholder="Consultas"  value="<?php if(isset($consulta)) echo $consulta ?>">
    </textarea>
    <input class="botons" type="submit" name="submit">
    <?php
      include ("validar.php");
      ?>
 </section>
 
 </form>
 
</body>
</html> 