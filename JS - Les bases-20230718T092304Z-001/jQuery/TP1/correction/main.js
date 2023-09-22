let solution;
let tentatives;
let proposition;

$("#send").click(function () {
    proposition = $("input").val();

    if (tentatives >= 0) {
        if (proposition > solution) {
            $("#msg").text("C'est plus petit");
        }
        if (proposition < solution) {
            $("#msg").text("C'est plus grand");
        }
        if (proposition == solution) {
            $("#msg").text("Bravo ! Tu as trouvé le nombre mystère");
            $("#intro").show();
            $("#jeu").hide();
        }
        tentatives--;
        $("#tentative").text(tentatives);
    }
    if (tentatives === 0 && proposition != solution) {
        $("#msg").text("Perdu ! Le nombre mystère était " + solution);
        $("#intro").show();
        $("#jeu").hide();
    }
})

$("#yes").on("click", function () {
    solution = Math.floor(Math.random() * 100) + 1;
    tentatives = 7;
    $("#tentative").text(tentatives);
    $("input").val("");
    $("#msg").text("Faites nous une proposition !");
    $("#intro").hide();
    $("#jeu").show();
})


$("#no").on("click", function () {
    $("#intro").hide();
    $("#fin-jeu").show();
})
