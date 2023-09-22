
// QUESTIO 1 
// mettre une class au p1 et p3 


$("#p1,#p3").addClass("newClass");


// QUESTION 2 
// mettre le p2  en gras 

$('#start').click(function () {
    $('#p2').addClass("bold");  
});
$('#p2').click(function () {
    $('#p2').removeClass("bold"); 
});
// ***************************************************

// $('#start').click(function () {
//     $('#p2').toggleClass("bold");  
// });

// QUESTION 3

// changer  le background du paragraphe 4 en jaune

$('#start').click(function () {
    $('#p4').css("background", "yellow");
});


