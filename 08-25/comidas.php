<?php
$comidas = ["picante", "milaneza", "picante", "silpancho", "mondongo", "saltenias"];
$platoEscodigo = $_GET["platillo"];


echo "<div style='display: flex; justify-content: center; align-content: center; text-align: center;'>";
foreach($comidas as $com ){
    if($platoEscodigo== $com){
        echo "
            <div style='border-radius: 60px; height: 60px;background-color: rgb(89, 98, 107); width: 80px; '>
                $com
            </div>
        ";
    }else{
        echo "
            <div style='border-radius: 60px; height: 60px;background-color: rgb(235, 139, 14); width: 80px; '>
                $com
            </div>
        ";
    }
   
}
echo "</div>";
?>


<!-- <div style="display: flex; justify-content: center; align-content: center; text-align: center;">
        <div style="border-radius: 60px; height: 60px;background-color: rgb(235, 139, 14); width: 80px;">
            Picante
         </div>
    </div> -->