<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart - W03 Prove</title>
<script>
function addCart() {
  var xhttp = new XMLHttpRequest();
    var cabbage_qty = document.getElementById('cabbage_qty').value;
    var carrot_qty = document.getElementById('carrot_qty').value;
    var tomato_qty = document.getElementById('tomato_qty').value;
    var lemon_qty = document.getElementById('lemon_qty').value;
    var avacado_qty = document.getElementById('avacado_qty').value;
    var jalepeno_qty = document.getElementById('jalepeno_qty').value;
    var watermelon_qty = document.getElementById('watermelon_qty').value;
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("cart").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "view_cart.php?cabbage_qty="+cabbage_qty+
                                   "carrot_qty="+carrot_qty+
                                   "tomato_qty="+tomato_qty+
                                   "lemon_qty="+lemon_qty+
                                   "avacado_qty="+avacado_qty+
                                   "jalepeno_qty="+jalepeno_qty+
                                   "watermelon_qty="+watermelon_qty, true);
  xhttp.send();
}
</script>
    </head>
<body>
<form action = "cart_update.php" method = "GET">
<table border = 5 bordercolor = black align = center>
    <th colspan = 14>Please Fill out Order Form:</th>
    <tr>
        <th colspan = 4>Add:</th>
        <th colspan = 4>Qty:</th>
        <th colspan = 4>Product:</th>
        <th colspan = 4>Items in Shopping Cart:</th>
    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "cabbage" name="cabbage" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "cabbage_qty" value=""min = "1" max = "100"></td>
        <td colspan = 4><img src="cabbage.JPG" alt="cabbage" border=3 height=100 width=100 align = center></img>
        <br><button type = "button" onClick = "addCart()">add to cart -></button></td>
        <td colspan = 4><p id = "cart"></p></td>
    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "carrot" name="carrot" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "carrot_qty" min = "1" max = "100" value=""; ?>"></td>
        <td colspan = 4><img src="carrot.jpg" alt="carrot" border=3 height=100 width=100 align = center></img>
        <br><button type = "button" onClick = "addCart()">add to cart -></button></td>    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "tomato" name="tomato" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "tomato_qty" min = "1" max = "100" value=""; ?>"></td>
        <td colspan = 4><img src="tomato.jpg" alt="tomato" border=3 height=100 width=100 align = center></img>
        <br><button type = "button" onClick = "addCart()">add to cart -></button></td>    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "lemon" name="lemon" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "lemon_qty" min = "1" max = "100" value=""></td>
        <td colspan = 4><img src="lemon.jpg" alt="lemon" border=3 height=100 width=100 align = center></img>
        <br><button type = "button" onClick = "addCart()">add to cart -></button></td>    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "avacado" name="avacado" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "avacado_qty" min = "1" max = "100" value=""></td>
        <td colspan = 4><img src="avacado.jpg" alt="avacado" border=3 height=100 width=100 align = center></img>
        <br><button type = "button" onClick = "addCart()">add to cart -></button></td>
    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "jalepeno" name="jalepeno" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "jalepeno_qty" min = "1" max = "100" value=""></td>
        <td colspan = 4><img src="jalepeno.jpg" alt="jalepeno" border=3 height=100 width=100 align = center></img>
        <br><button type = "button" onClick = "addCart()">add to cart -></button></td>
    </tr>
    <tr>
        <td colspan = 4><input type="checkbox" id = "watermelon" name="watermelon" value=""></td>
        <td colspan = 4>Quantity: <input type = "number" id = "watermelon_qty" min = "1" max = "100" value=""></td>
        <td colspan = 4><img src="watermelon.jpg" alt="watermelon" border=3 height=100 width=100 align = center></img>
        <br><button type = "button" onClick = "addCart()">add to cart -></button></td>
    </tr>
</table>
<button type = "submit">Checkout</button>
</form>
 </body>
<html>
