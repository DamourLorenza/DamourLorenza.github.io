/*var figure = ["ciseaux.png","feuille.png","pierre.png"];

function aleatoire(){

  carteAleatoire = figure[Math.floor(Math.random()*figure.length)];

 return carteAleatoire;

}

console.log(aleatoire());*/


$(document).ready(function(){
    $('div').click(function(){
        $('div').effect('bounce',{times:3},500);
    });
});
