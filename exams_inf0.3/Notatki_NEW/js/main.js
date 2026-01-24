var ul = document.getElementById("lista");
function delite(btn){
    btn.parentElement.style.textDecoration = "line-through";
    

}
function dodaj(){
    var wnew = document.getElementById("new").value;
    var li = document.createElement("li");
    li.innerHTML = `${wnew} <button class="wykonane" onclick="delite(this)"> Wykonane</button>`
    ul.appendChild(li);
}