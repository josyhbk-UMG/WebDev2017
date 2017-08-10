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