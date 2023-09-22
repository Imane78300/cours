// ====== JQUERY ET CSS ======

<style>
    .red {
        color:red;
         }
                  
    .bold {
        font-weight: bold;
         }
</style>

$('#start').click(function () {
    // $('#p1').addClass("red");
    $('#p1,#p2').addClass("red");
    // $('#p1,#p2').addClass("red bold"); 
});
// ====== index.html =====

<h1>Un Titre</h1>
<p id="p1" style= "background : yellow ">Mon paragraphe>1</p>
<p id="p2" style= "background : yellow ">Mon paragraphe 2</p>
<p id="p3" style= "background : yellow"> Mon paragraphe 3</p>
<p id="p4" style= "background : yellow"> Mon paragraphe 4</p>
<p id="p5" style= "background : red"> Mon paragraphe 5</p>


// ======= main.js ======

// I - AJOUTER UNE CLASS A UN ELEMENT
// addClass()


$('#start').click(function () {
    $('#p1').addClass("red");
    // tester $('#p1,#p2').addClass("red"); on modifie plusieurs element daffiler
    // tester $('#p1,#p2').addClass("red bold"); on ajoute plusieurs class d'affiler
});

// Rque: La virgule dans le selecteur $('#p1,#p2') signifie ET. 
// On selectionne donc le paragraphe avec l'id p1 et le paragraphe avec l'id p1 p2

// Créer un nouveau bouton
<button id="btn1">bouton1</button>
<button id="btn2">bouton2</button>


$('#btn1').click(function () {
    $('#p1').addClass("red");  // mettre la coleur rouge sur p1
});
$('#btn2').click(function () {
    $('#p1').removeClass("red"); // pour la retirez
});


$('#btn1').click(function () {
    $('#p1').toggleClass("red"); // si il est là il le retire si il n'est pas là il le met (la coleur rouge)
}); 



// II - AGIR DIRECTEMENT DS LE CSS SANS TOUCHER AU CLASS
//.css()


$('#btn1').click(function () {
    $('#p1').css("color", "blue");
});

// ajoutons au html
<p id="p4" style="color:blue">Mon paragraphe</p>
// il recupère la valeur (comme il le comprend code couleur)

$('#btn1').click(function () {
    alert($('#p4').css("color"));
});




// III - CHANGER PLUSIEURS PROPRIETES CSS EN UNE SEUL FOIS


$('#btn1').click(function () {
    $('#p1').css({
        "color": "red", // mettre css forme de string
        "font-weight": "bold",
        "background": "yellow "
    });
});

// changer une propriete avec un fct jQuery
// exemple changer largeur avec width()

$('#btn1').click(function () {
    alert($('#btn2').width(150));
    alert($('#btn2').height(150));
});

