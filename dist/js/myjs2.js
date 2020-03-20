function prod(){
 
    var entre = document.getElementById("nombre").value;
    console.log(entre);
    var cout = 600;
    var totalapaye = entre*cout;
    document.getElementById("pri").value = totalapaye + " FCFA";
    
    }
    document.getElementById('ok').addEventListener("click",prod);