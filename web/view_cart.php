<?php
    if(isset($_GET['cabbage_qty'])){
        $num_cabbage = (int)$_GET['cabbage_qty'];
        $price = 8*$num_cabbage;
        echo "<tr><td>Cabbage(s): ".$num_cabbage."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_GET['carrot_qty'])){
        $carrot_qty = (int)$_GET['carrot_qty'];
        $price = 8*$carrot_qty;
        echo "<br>Carrot(s): ".$carrot_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_GET['tomato_qty'])){
        $tomato_qty = (int)$_GET['tomato_qty'];
        $price = 8*$tomato_qty;
        echo "<br>Tomato(s): ".$tomato_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_GET['lemon_qty'])){
        $lemon_qty = (int)$_GET['lemon_qty'];
        $price = 8*$lemon_qty;
        echo "<br>Lemon(s): ".$lemon_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_GET['avacado_qty'])){
        $avacado_qty = (int)$_GET['avacado_qty'];
        $price = 8*$avacado_qty;
        echo "<br>Avacado(s): ".$avacado_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_GET['jalepeno_qty'])){
        $jalepeno_qty = (int)$_GET['jalepeno_qty'];
        $price = 8*$jalepeno_qty;
        echo "<br>Jalepeno(s): ".$jalepeno_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_GET['watermelon_qty'])){
        $watermelon_qty = (int)$_GET['watermelon_qty'];
        $price = 8*$watermelon_qty;
        echo "<br>Watermelon(s): ".$watermelon_qty."lbs<br>
                $".$price.".00<br></td></tr>";
    }
?>