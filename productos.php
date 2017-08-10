<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
				<span class="glyphicon glyphicon-gift"></span> Ver Productos				
			</a>
			<button class="btn btn-warning btn-lg my-2 my-sm-0" type="submit" id="cartArea" data-toggle="modal" data-target="#modalCarrito"> 
				<span class="glyphicon glyphicon-shopping-cart"></span>
					Ver Carrito
			</button>
		</nav>
		<section class="text-center">
			<div style="width:50%;margin:0 auto;">
				<table class="table table-stripped table-bordered">
					<thead> 
						<tr class="bg-primary">
							<th class="text-center">Libro</th>
							<th class="text-center">Descripción</th>
							<th class="text-center">Precio</th>
							<!--<th class="text-center"><span class="glyphicon glyphicon-shopping-cart"></span></th>-->
						</tr>						
					</thead>
					<tbody>
						<tr>
							<td style="width:30%">
								<b>Lobos <br/> Donato Carrisi <br/></b>
								<img id="lobos" src="resources/images/Lobos.jpg" height="135" width="93"   data-quantity="Lobos|190.00" class="product"/>
							</td>
							<td style="width:50%">
								El criminólogo Goran Gavila y el equipo de homicidios se enfrentan a un caso perturbador: se han hallado enterrados los brazos derechos correspondientes a niñas desaparecidas durante la última semana. Sin embargo, las desaparecidas eran cinco y se han encontrado seis brazos. El equipo pronto halla los cadáveres de las cinco niñas identificadas, pero creen que la sexta sigue con vida. Mila Vasquez, investigadora especializada en personas desaparecidas, entra en escena y, junto con Goran, van a la caza del culpable.
							</td>
							<td style="width:10%">
							Q 190.00
							</td>
							<!--<td style="width:10%">
								<a href="productos.php" class="btn btn-warning btn-lg" style="-webkit-border-radius:25%;">
									<span class="glyphicon glyphicon-plus"></span> 				
								</a>
							</td>-->
						</tr>	
						<tr>
							<td style="width:30%">
								<b>La hipótesis del mal <br/> Donato Carrisi <br/></b>
								<img id="la_hipotesis_del_mal" src="resources/images/La_hipotesis_del_mal.jpg" height="135" width="93"  data-quantity="La hipótesis del mal|95.00" class="product"/>
							</td>
							<td style="width:50%">
								Mila Vázquez sabe ver donde otros no suelen prestar atención. Por eso, dentro del cuerpo de policía, escogió como destino el Limbo: la oficina de personas desaparecidas. Todo empieza con un asesinato. Un hombre mata a toda la familia de un conocido empresario, excepto a su hijo menor: Roger Valin, quien desapareció una mañana sin dejar rastro y ahora, diecisiete años después, todo parece indicar que ha regresado convertido en un asesino en masa.
							</td>
							<td style="width:10%">
							Q 95.00
							</td>
							<!--<td style="width:10%">
							
							</td><-->
						</tr>	
						<tr>
							<td style="width:30%">
								<b>El guardián entre el centeno <br/> J. D. Salinger <br/></b>
								<img id="el_guardian_entre_el_centeno" src="resources/images/Guardian_entre_el_centeno.jpg" height="135" width="93" data-quantity="El guardián entre el centeno|80.00" class="product"/>
							</td>
							<td style="width:50%">
								Las peripecias del adolescente Holden Cauldfiel en una Nueva York que se recupera de la guerra influyeron en sucesivas generaciones de todo el mundo. En su confesión sincera y sin tapujos, muy lejos de la visión almibarada de la adolescencia que imperó hasta entonces, Holden nos desvela la realidad de un muchacho enfrentado al fracaso escolar, a las rígidas normas de una familia tradicional, a la experiencia de la sexualidad más allá del mero deseo.
							</td>
							<td style="width:10%">
							Q 80.00
							</td>
							<!--<td style="width:10%">
							
							</td><-->
						</tr>		
						<tr>
							<td style="width:30%">
								<b>Ventajas de ser invisible <br/> Stephen Chbosky <br/></b>
								<img id="ventajas_de_ser_invisible" src="resources/images/Ventajas_de_ser_invisible.jpg" height="135" width="93" data-quantity="Las ventajas de ser invisible|120.00" class="product"/>
							</td>
							<td style="width:50%">
								Charlie es un chico realmente especial: lee muchísimo, no sale con chicos ni con chicas y reflexiona sobre el mundo desde un punto de vista muy particular. Su ingenuidad, su incapacidad para relacionarse normalmente y su extrema sinceridad le crean más de un problema, especialmente ahora que su único amigo ha muerto. Conocer a Sam y Patrick, los chicos más populares y vitales del colegio, provocara un giro radical en su vida que lo sumergirá de pleno en la adolescencia.
							</td>
							<td style="width:10%">
							Q 120.00
							</td>
							<!--<td style="width:10%">
							
							</td><-->
						</tr>								
					<tbody>
				</table>
			</div>						
		</section>
		<div id="modalCarrito" class="modal fade" role="dialog" >
			<div class="modal-dialog">				
				<div class="modal-content">
				  <div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Detalle Carrito</h4>
				  </div>
				  <div class="modal-body">
					<table class="table table-stripped table-bordered">
						<thead> 
							<tr class="bg-primary">
								<th class="text-center">Libro</th>
								<th class="text-center">Precio</th>								
								<th class="text-center"><span class="glyphicon glyphicon-shopping-remove"></span></th>
							</tr>						
						</thead>
						<tbody id="tblCarrito">
						</tbody>
						<tfoot>
							<tr>
								<td colspan="2" class="right">
									<strong>Total: </strong>
								</td>
								<td id="tdTotal">
								0.00
								</td>
							</tr>
						</tfoot>
					</table>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
				  </div>
				</div>
			</div>
		</div>
		<footer>
		
		</footer>
		<script>
		var cartArea = document.querySelector('#cartArea'); 
        var prods = document.querySelectorAll('.product');
        var itemPriceElement;
        for(var i = 0; i < prods.length; i++) 
		{
            itemPriceElement = document.createElement("span");
            itemPriceElement.className = "itemPrice";
            itemPriceElement.innerHTML = prods[i].getAttribute("data-price");
            prods[i].parentNode.insertBefore(itemPriceElement, prods[i].nextSibling);
            prods[i].setAttribute('draggable', 'true');  // optional with images
            prods[i].addEventListener('dragstart', function(evnt) 
			{
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
            if (evnt.stopPropagation) {					
				evnt.stopPropagation();
			} 			
            var id = evnt.dataTransfer.getData('text');   			
            var theitem = document.getElementById(id); 
            ////theitem.parentNode.removeChild(el);   
            ////theitem.className='itemblurred';
            theitem.classList.add('itemblurred');
            //var y  = document.createElement('img');
            //y.src = theitem.src;
            //cartArea.appendChild(y);
			
            evnt.preventDefault(); // for Firefox			
            updateCart(theitem.getAttribute("data-quantity"));
            return false;
        }, false);
        function updateCart(info){
			var fila = document.createElement("tr");
			var celdaLibro = document.createElement("td");
			var celdaPrecio = document.createElement("td");			
			var celdaEliminar = document.createElement("td");
			var tabla = document.getElementById("tblCarrito");	
				
			celdaLibro.innerHTML = info.split("|")[0];
			celdaPrecio.innerHTML = info.split("|")[1];		
			celdaEliminar.innerHTML = "<button onclick='EliminarElementoCarrito(this, " + celdaPrecio.innerHTML + ")' class='btn-danger'><span class='glyphicon glyphicon-remove'></span></button>";			
			
			fila.appendChild(celdaLibro);
			
			fila.appendChild(celdaPrecio);
			fila.appendChild(celdaEliminar);
			
			tabla.appendChild(fila);
			alert("Libro agregado al carrito");
			var celdaTotal = document.getElementById("tdTotal");
			celdaTotal.innerHTML = parseFloat(celdaTotal.innerHTML) + parseFloat(celdaPrecio.innerHTML);
           /* var the_total = document.getElementById("the_total").innerHTML;
            the_total = parseInt(the_total);
            the_total = the_total + parseInt(price);
            document.getElementById("the_total").innerHTML = the_total;*/
			
        }
		function EliminarElementoCarrito(elemento, precio)
		{			
			elemento.parentNode.parentNode.parentNode.removeChild(elemento.parentNode.parentNode);
			alert("Libro eliminado");
			var celdaTotal = document.getElementById("tdTotal");
			celdaTotal.innerHTML = parseFloat(celdaTotal.innerHTML) - parseFloat(precio);
			
		}
		</script>
	</body>

</html>
