var productimg = document.getElementById("product");
var small = document.getElementsByClassName("small");

small[0].onclick = function(){
    productimg.src = small[0].src;
}
small[1].onclick = function(){
    productimg.src = small[1].src;
}
small[2].onclick = function(){
    productimg.src = small[2].src;
}


