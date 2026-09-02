<?php
$red_color = "rgba(255, 0, 0, 0.2);";
$yellow_color = "rgba(251, 255, 0, 0.2);";
$green_color = "rgba(44, 138, 31, 0.2);";

$segundos = date('s');
echo $segundos;
if($segundos<=28){
    $red_color = "rgba(255, 0, 0, 0.9);";
    $yellow_color = "rgba(251, 255, 0, 0.2);";
    $green_color = "rgba(44, 138, 31, 0.2);";
}
if($segundos>28 && $segundos<=32){
    $red_color = "rgba(255, 0, 0, 0.2);";
    $yellow_color = "rgba(251, 255, 0, 0.9);";
    $green_color = "rgba(44, 138, 31, 0.2);";
}

if($segundos>=33){
    $red_color = "rgba(255, 0, 0, 0.2);";
    $yellow_color = "rgba(251, 255, 0, 0.2);";
    $green_color = "rgba(44, 138, 31, 0.9);";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="semaforo">
        <div style="background-color: <?php echo $red_color;?>" class="luces" id="red"></div>
        <div style="background-color: <?php echo $yellow_color;?>" class="luces" id="amarilla"></div>
        <div style="background-color: <?php echo $green_color;?>" class="luces" id="verde"></div>
    </div>

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