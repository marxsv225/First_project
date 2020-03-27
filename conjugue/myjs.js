//indicatif
var presentdelindicatif="<p>Je XXXX<b>e</b></p><p>Tu XXXX<b>es</b></p><p>Il, elle XXXX<b>e</b></p><p>Nous XXXX<b>ons</b></p><p>Vous XXXX<b>ez</b></p>Ils, elles XXXX<b>ent</b></p>";
var futurdelindicatif="<p>Je XXXX<b>erai</b></p><p>Tu XXXX<b>eras</b></p><p>Il, elle XXXX<b>era</b></p><p>Nous XXXX<b>erons</b></p><p>Vous XXXX<b>erez</b></p>Ils, elles XXXX<b>eront</b></p>";
var passeedelindicatif="<p>Je XXXX<b>ai</b></p><p>Tu XXXX<b>as</b></p><p>Il, elle XXXX<b>a</b></p><p>Nous XXXX<b>âmes</b></p><p>Vous XXXX<b>âtes</b></p>Ils, elles XXXX<b>èrent</b></p>";
var imparfaitdelindicatif="<p>Je XXXX<b>ais</b></p><p>Tu XXXX<b>ais</b></p><p>Il, elle XXXX<b>ait</b></p><p>Nous XXXX<b>ions</b></p><p>Vous XXXX<b>iez</b></p>Ils, elles XXXX<b>aient</b></p>";
// //subjonctif
// var presentdusubjonctif="<p>Que je XXXX<b>e</b></p><p>Que tu XXXX<b>es</b></p><p>(Qu') il, elle XXXX<b>e</b></p><p>Que nous XXXX<b>ions</b></p><p>Que vous XXXX<b>iez</b></p>(Qu') ils, elles XXXX<b>ent</b></p>";
// var futurdusubjonctif="<p>Que je XXXX<b>e</b></p><p>Que tu XXXX<b>es</b></p><p>(Qu') il, elle XXXX<b>e</b></p><p>Que nous XXXX<b>ons</b></p><p>Que vous XXXX<b>ez</b></p>(Qu') ils, elles XXXX<b>ent</b></p>";
// /*var passeedusubjonctif="<p>Que je XXXX<b>e</b></p><p>Que tu XXXX<b>es</b></p><p>(Qu') il, elle XXXX<b>e</b></p><p>Que nous XXXX<b>assions</b></p><p>Que vous XXXX<b>assiez</b></p>(Qu') ils, elles XXXX<b>ent</b></p>";*/
// var imparfaitdusubjonctif="<p>Que je XXXX<b>asse</b></p><p>Que tu XXXX<b>asses</b></p><p>(Qu') il, elle XXXX<b>ât</b></p><p>Que nous XXXX<b>assions</b></p><p>Que vous XXXX<b>assiez</b></p>(Qu') ils, elles XXXX<b>assent</b></p>";
// // Même chose pour les autres groupes et sous-groupes
 function conjugue(){
     var vrb=document.getElementById('npt').value;
    // test surr la nature du verbe
    if (vrb.substr(-2)=="er") {
        document.getElementById('rsp').innerHTML=presentdelindicatif.replace(/XXXX/g,vrb.substr(0,vrb.length-2));
		document.getElementById('rsap').innerHTML=futurdelindicatif.replace(/XXXX/g,vrb.substr(0,vrb.length-2));
		document.getElementById('rsbp').innerHTML=passeedelindicatif.replace(/XXXX/g,vrb.substr(0,vrb.length-2));
		document.getElementById('rscp').innerHTML=imparfaitdelindicatif.replace(/XXXX/g,vrb.substr(0,vrb.length-2));
    }
    else alert("Je ne sais pas conjuguer ce verbe\n qui n'appartient pas au 1er groupe !");
}