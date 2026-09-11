<?php
    $filas = 5;//configurar con GET o POST
    $columnas = 2;//configurar con GET o POST
    $color = "red";
?>
<body>
    <table border="1" style="width: 600px;">
        <?php 
        for($i = 0;$i<$filas;$i++){
            
            if($i%3==0){
                $color = "red";
            }elseif($i%3==1){
                $color = "yellow";
            }else{
                $color = "green";
            }
            echo "<tr  style='background-color: $color;'>";
            for($j=0;$j<$columnas;$j++){
                echo "<td>_</td>";
            }
            echo    "</tr>";
        }
        
        ?>
    </table>
</body>
</html>