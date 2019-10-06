<?php
    if(isset($_POST['cabbage_qty'])){
        $num_cabbage = (int)$_POST['cabbage_qty'];
        $price = 8*$num_cabbage;
        echo "<tr><td>Cabbage(s): ".$num_cabbage."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_POST['carrot_qty'])){
        $carrot_qty = (int)$_POST['carrot_qty'];
        $price = 8*$carrot_qty;
        echo "<br>Carrot(s): ".$carrot_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_POST['tomato_qty'])){
        $tomato_qty = (int)$_POST['tomato_qty'];
        $price = 8*$tomato_qty;
        echo "<br>Tomato(s): ".$tomato_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_POST['lemon_qty'])){
        $lemon_qty = (int)$_POST['lemon_qty'];
        $price = 8*$lemon_qty;
        echo "<br>Lemon(s): ".$lemon_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_POST['avacado_qty'])){
        $avacado_qty = (int)$_POST['avacado_qty'];
        $price = 8*$avacado_qty;
        echo "<br>Avacado(s): ".$avacado_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_POST['jalepeno_qty'])){
        $jalepeno_qty = (int)$_POST['jalepeno_qty'];
        $price = 8*$jalepeno_qty;
        echo "<br>Jalepeno(s): ".$jalepeno_qty."lbs<br>
                $".$price.".00<br>";
    }
    if(isset($_POST['watermelon_qty'])){
        $watermelon_qty = (int)$_POST['watermelon_qty'];
        $price = 8*$watermelon_qty;
        echo "<br>Watermelon(s): ".$watermelon_qty."lbs<br>
                $".$price.".00<br></td></tr>";
    }
?>