<?php
session_start();
if(isset($_POST['nombre'])){
    $_SESSION['nombre'] = $_POST['nombre'];
header("location:");
}

if(isset($_POST['raza'])){
    $_SESSION['raza'] = $_POST['raza'];
header("location:");
}

if(isset($_POST['arsenal'])){
    $_SESSION['arsenal'] = $_SESSION['arsenal']. $_POST['arsenal'];
header("location:");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a tu aventura</h1>

    <div>
        <span>Nombre: <?php echo $_SESSION['nombre'];?></span>
        <br>
        <span>Raza: <?php echo $_SESSION['raza']?></span>
        <br>
        <span>Arsenal: <?php echo $_SESSION['arsenal'];?></span>
    </div>
    <br>
    <form action="" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <button type="submit">Guardar</button>
    </form>

    <form action="" method="POST">
        <label for="">Escoge Tu raza</label>
        <button type="submit" name="raza" value="Elfo 🧝‍♂️">🧝‍♂️</button>
        <button type="submit" name="raza" value="Mago 🧙‍♂️">🧙‍♂️</button>
        <button type="submit" name="raza" value="Humano 👨">👨</button>
        <button type="submit" name="raza" value="Diablo 👿">👿</button>
    </form>

     <form action="" method="POST">
        <label for="">Recoge tus armas</label>
        <button type="submit" name="arsenal" value="🏹">🏹</button>
        <button type="submit" name="arsenal" value="⚔️">⚔️</button>
        <button type="submit" name="arsenal" value="🧰">🧰</button>
    </form>
</body>
</html>