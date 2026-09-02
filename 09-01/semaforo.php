<?php
$red_color = "rgba(255, 0, 0, 0.2);";
$yellow_color = "rgba(251, 255, 0, 0.2);";
$green_color = "rgba(44, 138, 31, 0.2);";


if(isset($_POST["opcion"])){
    if($_POST["opcion"]=="red"){
        $red_color = "rgba(255, 0, 0, 0.9);";
        $yellow_color = "rgba(251, 255, 0, 0.2);";
        $green_color = "rgba(44, 138, 31, 0.2);";
    }
    if($_POST["opcion"]=="yellow"){
        $red_color = "rgba(255, 0, 0, 0.2);";
        $yellow_color = "rgba(251, 255, 0, 0.9);";
        $green_color = "rgba(44, 138, 31, 0.2);";
    }
    if($_POST["opcion"]=="green"){
        $red_color = "rgba(255, 0, 0, 0.2);";
        $yellow_color = "rgba(251, 255, 0, 0.2);";
        $green_color = "rgba(44, 138, 31, 0.9);";
    }
}


?>
<body>
    <div class="semaforo">
        <div style="background-color: <?php echo $red_color;?>" class="luces" id="red"></div>
        <div style="background-color: <?php echo $yellow_color;?>" class="luces" id="amarilla"></div>
        <div style="background-color: <?php echo $green_color;?>" class="luces" id="verde"></div>
    </div>

    <form action="" method="POST">
        <button type="submit" name="opcion" value="red">Red</button>
        <button type="submit" name="opcion" value="yellow">Amarillo</button>
        <button type="submit" name="opcion" value="green">Green</button>
    </form>
</body>
</html>
<style>
    .semaforo{
        border: 1px black double;
        width: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        padding: 10px;
        background-color: rgb(36, 47, 68);
    }
    .luces{
        background-color: rgb(255, 255, 255);
        border: 1px red double;
        border-radius: 50%;
        width: 50px;
        height: 50px;
    }
</style>