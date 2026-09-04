<?php
session_start();

if(isset( $_POST['reiniciar'] )){
    session_destroy();
    header("location:");
    echo "Sigue ingresando";
}

if(isset( $_POST['contar'])){
    if(isset($_SESSION['clicks'])){
        $_SESSION['clicks'] = $_SESSION['clicks'] +1;
    }else{
        $_SESSION['clicks'] = 0;
    }
}


if(isset($_SESSION['visita'])){
    $_SESSION['visita'] = $_SESSION['visita'] +1;
}else{
    $_SESSION['visita']  =0;
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
    <h1>Contador de Visitas</h1>
    <h2><?php echo $_SESSION['visita'];?> veces</h2>
    <p>haz echo <?php echo $_SESSION['clicks']?> en este boton</p>
    <form action="" method="POST">
        <button type="submit" name="reiniciar"  >Destruir Session</button>
        <button type="submit" name="contar"  >Contar clicks</button>
    </form>
</body>
</html>