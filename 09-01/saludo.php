<?php
$saludo = "Seleccione una opcion";
$color = "skyblue";
$url_de_imagen = "";

if(isset($_POST['opcion'])){
    if($_POST['opcion'] == "dia" ){
        $saludo = "Buenos dias companero";
        $color = "skyblue";
        $url_de_imagen = "./images/images.jpg";
    }
    if($_POST['opcion'] == "tarde"){
        $saludo = "Buenas Tarde Compadre";
        $color = "rgb(224, 110, 3)";
        $url_de_imagen = "./images/images1.jpg";
    }
    if($_POST['opcion'] == "noche"){
        $saludo = "Ya vete a domir compadre";
        $color = "rgb(36, 47, 68);";
        $url_de_imagen = "./images/images2.jpg";
    }

}

echo $url_de_imagen;

?>

<body style="background-color: <?php echo $color; ?>;">
    <h1> <?php echo $saludo; ?></h1>
    <form method="POST" action="">
        <button type="submit" name="opcion" value="dia">Maniana</button>
        <button type="submit" name="opcion" value="tarde">Tarde</button>
        <button type="submit" name="opcion" value="noche">Noche</button>
    </form>

    <img src="<?php echo $url_de_imagen; ?>" alt="Escoja una opcion">
</body>