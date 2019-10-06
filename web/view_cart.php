<?php
    if(isset($_SESSION['cabbage_qty'])){
        $num_cabbage = (int)$_GET['cabbage_qty'];
        $price = 8*$num_cabbage;
        echo "<tr><td>Cabbage(s): ".$num_cabbage."lbs<br>
                $".$price.".00</td></tr>";
    }
?>