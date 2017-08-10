<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--
http://html5doctor.com/introducing-web-sql-databases/
-->
<html>
	<head>
		<title>
			Inicio
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-toggleable-md navbar-light bg-primary text-right">
			<a href="index.php" class="btn btn-info btn-lg pull-left">
				<span class="glyphicon glyphicon-home"></span> 				
			</a>
			<a href="productos.php" class="btn btn-danger btn-lg">
				<span class="glyphicon glyphicon-gift"></span> Comprar Productos				
			</a>
			<!--<button class="btn btn-warning btn-lg my-2 my-sm-0" type="submit" id="cartArea">
				<span class="glyphicon glyphicon-shopping-cart"></span>
					Ver Carrito
			</button>-->
		</nav>
		<section>
			<div class="jumbotron text-center">
				<h1>Luis Fernando Beltrán</h1>
				<h1>Jhosemar López de León</h1>
				<p>Aqui está nuestro sitio tío, tú no vales, tenemos principios pero no finales <br/>
				¡LOS PRO, LOS PRO, LOS PROFESIONALES!</p> 
			</div>
		</section>
		<footer>
		
		</footer>
		<script>
		var cartArea = document.querySelector('#cartArea'); 
        var prods = document.querySelectorAll('.product');
        var itemPriceElement;
        for(var i = 0; i < prods.length; i++) {
            itemPriceElement = document.createElement("span");
            itemPriceElement.className = "itemPrice";
            itemPriceElement.innerHTML = prods[i].getAttribute("data-price");
            prods[i].parentNode.insertBefore(itemPriceElement, prods[i].nextSibling);
            prods[i].setAttribute('draggable', 'true');  // optional with images
            prods[i].addEventListener('dragstart', function(evnt) {
                //this.className = 'itemchoosen';
                this.classList.add('itemchoosen');
                evnt.dataTransfer.effectAllowed = 'copy';
                evnt.dataTransfer.setData('text', this.id);
                return false;  
            }, false);
        }   
        cartArea.addEventListener('dragover', function(evnt) {
            if (evnt.preventDefault) evnt.preventDefault();
            evnt.dataTransfer.dropEffect = 'copy';
            return false;   
        }, false);
        cartArea.addEventListener('dragenter', function(evnt) {
            return false;   
        }, false);
        cartArea.addEventListener('dragleave', function(evnt) {
            return false;
        }, false);
        cartArea.addEventListener('drop', function(evnt) {
            if (evnt.stopPropagation) evnt.stopPropagation();
            var id = evnt.dataTransfer.getData('text');     
            var theitem = document.getElementById(id); 
            //theitem.parentNode.removeChild(el);   
            //theitem.className='itemblurred';
            theitem.classList.add('itemblurred');
            var y  = document.createElement('img');
            y.src = theitem.src;
            cartArea.appendChild(y);
            evnt.preventDefault(); // for Firefox
            updateCart(theitem.getAttribute("data-price"));
            return false;
        }, false);
        function updateCart(price){
            var the_total = document.getElementById("the_total").innerHTML;
            the_total = parseInt(the_total);
            the_total = the_total + parseInt(price);
            document.getElementById("the_total").innerHTML = the_total;
        }
		</script>
	</body>

</html>