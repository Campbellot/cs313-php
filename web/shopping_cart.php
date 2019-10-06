<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart - W03 Prove</title>
    </head>
<body>
<div class = "products">
<table border = 5 bordercolor = black align = center>
    <th colspan = 14>Please Fill out Order Form:</th>
    <tr>
        <th colspan = 4>Add:</th>
        <th colspan = 4>Qty:</th>
        <th colspan = 4>Product:</th>
    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "cabbage" name="cabbage" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "cabbage_qty" min = "1" max = "100"></td>
        <td colspan = 4><img src="cabbage.JPG" alt="cabbage" border=3 height=100 width=100 align = center></img></td>
    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "carrot" name="carrot" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "carrot_qty" min = "1" max = "100"></td>
        <td colspan = 4><img src="carrot.jpg" alt="carrot" border=3 height=100 width=100 align = center></img></td>    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "tomato" name="tomato" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "tomato_qty" min = "1" max = "100"></td>
        <td colspan = 4><img src="tomato.jpg" alt="tomato" border=3 height=100 width=100 align = center></img></td>    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "lemon" name="lemon" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "lemon_qty" min = "1" max = "100"></td>
        <td colspan = 4><img src="lemon.jpg" alt="lemon" border=3 height=100 width=100 align = center></img></td>    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "avacado" name="avacado" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "avacado_qty" min = "1" max = "100"></td>
        <td colspan = 4><img src="avacado.jpg" alt="avacado" border=3 height=100 width=100 align = center></img></td>
    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "jalepeno" name="jalepeno" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "jalepeno_qty" min = "1" max = "100"></td>
        <td colspan = 4><img src="jalepeno.jpg" alt="jalepeno" border=3 height=100 width=100 align = center></img></td>
    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "watermelon" name="watermelon" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "watermelon_qty" min = "1" max = "100"></td>
        <td colspan = 4><img src="watermelon.jpg" alt="watermelon" border=3 height=100 width=100 align = center></img></td>
    </tr>
</table>
 </body>
<html>
