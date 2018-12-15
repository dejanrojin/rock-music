var current=document.getElementById("current");

var slike=document.getElementsByClassName("thumb");

for(i=0;i<slike.length;i++){
slike[i].addEventListener('click',display);

}
function display(){
var src=this.getAttribute("src");
current.setAttribute("src",src)


}