
<!DOCTYPE html>
<html>
<head>
<script>

var shoppingCart = (function() {
    cart = [];

    function Item(name, price, count) 
    {
        this.name = name;
        this.price = price;
        this.count = count;
    }

    function saveCart() 
    {
        sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
    }

    function loadCart() 
    {
        cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
    }

    if (sessionStorage.getItem("shoppingCart") != null) 
    {
        loadCart();
    }

    var obj = {};

    obj.addItemToCart = function(name, price, count) 
    {
        for(var item in cart) 
        {
            if(cart[item].name === name) 
            {
                cart[item].count ++;
                saveCart();
                return;
            }
        }
        var item = new Item(name, price, count);
        cart.push(item);
        saveCart();
    }
    // Set count from item
    obj.setCountForItem = function(name, count) 
    {
        for(var i in cart) 
        {
            if (cart[i].name === name) 
            {
                cart[i].count = count;
                break;
            }
        }
    };

    obj.removeItemFromCart = function(name) 
    {
        for(var item in cart) 
        {
            if(cart[item].name === name) 
            {
                cart[item].count --;
                if(cart[item].count === 0) 
                {
                    cart.splice(item, 1);
                }
                break;
            }
        }
        saveCart();
    }

    obj.removeItemFromCartAll = function(name) 
    {
        for(var item in cart) 
        {
            if(cart[item].name === name) 
            {
            cart.splice(item, 1);
            break;
            }
        }
        saveCart();
    }

    obj.clearCart = function() 
    {
        cart = [];
        saveCart();
    }

    obj.totalCount = function() 
    {
        var totalCount = 0;
        for(var item in cart) 
        {
            totalCount += cart[item].count;
        }
        return totalCount;
    }

    obj.totalCart = function() 
    {
        var totalCart = 0;
        for(var item in cart) 
        {
            totalCart += cart[item].price * cart[item].count;
        }
        return Number(totalCart.toFixed(2));
    }

    obj.listCart = function() 
    {
        var cartCopy = [];
        for(i in cart) 
        {
            item = cart[i];
            itemCopy = {};
            for(p in item) 
            {
                itemCopy[p] = item[p];
            }
            itemCopy.total = Number(item.price * item.count).toFixed(2);
            cartCopy.push(itemCopy)
        }
        return cartCopy;
    }

    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
})();


// *****************************************
// Triggers / Events
// ***************************************** 
// Add item
$('.add-to-cart').click(function(event) {
event.preventDefault();
var name = $(this).data('name');
var price = Number($(this).data('price'));
shoppingCart.addItemToCart(name, price, 1);
displayCart();
});

// Clear items
$('.clear-cart').click(function() {
shoppingCart.clearCart();
displayCart();
});


function displayCart() {
var cartArray = shoppingCart.listCart();
var output = "";
for(var i in cartArray) {
output += "<tr>"
+ "<td>" + cartArray[i].name + "</td>" 
+ "<td>(" + cartArray[i].price + ")</td>"
+ "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
+ "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
+ "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
+ "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
+ " = " 
+ "<td>" + cartArray[i].total + "</td>" 
+  "</tr>";
}
$('.show-cart').html(output);
$('.total-cart').html(shoppingCart.totalCart());
$('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
var name = $(this).data('name')
shoppingCart.removeItemFromCartAll(name);
displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
var name = $(this).data('name')
shoppingCart.removeItemFromCart(name);
displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
var name = $(this).data('name')
shoppingCart.addItemToCart(name);
displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
var name = $(this).data('name');
var count = Number($(this).val());
shoppingCart.setCountForItem(name, count);
displayCart();
});

displayCart();

</script>
<meta charset = "utf-8">
<link rel = "stylesheet"
type = "text/css"
href = "shopping_cart.css" >
<title>Shopping Cart - W03 Prove</title>
<!-- Nav -->
<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
<div class="row">
<div class="col">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button></div>
</div>
</nav>


<!-- Main -->
<div class="container">
<div class="row">
<div class="col">
<div class="card" style="width: 20rem;">
<img class="card-img-top" src="cabbage.JPG" alt="Cabbages">
<div class="card-block">
<h4 class="card-title">Cabbage</h4>
<p class="card-text">Price: $0.5</p>
<a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>
</div>
</div>
</div>
<div class="col">
<div class="card" style="width: 20rem;">
<img class="card-img-top" src="carrot.jpg" alt="Carrots">
<div class="card-block">
<h4 class="card-title">Carrot</h4>
<p class="card-text">Price: $1.22</p>
<a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to cart</a>
</div>
</div>
</div>
<div class="col">
<div class="card" style="width: 20rem;">
<img class="card-img-top" src="lemon.jpg" alt="Card image cap">
<div class="card-block">
<h4 class="card-title">Lemon</h4>
<p class="card-text">Price: $5</p>
<a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>
</div>
</div>
</div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Cart</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<table class="show-cart table">

</table>
<div>Total price: $<span class="total-cart"></span></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Order now</button>
</div>
</div>
</div>
</div> 


</body>
<html>
