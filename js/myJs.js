$(document).ready( function () {
    var today = new Date();
    var birthDate = new Date("1992/02/07");
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    $("#skillsaccordion").accordion({
        collapsible: true,
        heightStyle: "content"
    });
    $("#title_1").addClass("slideLeft");
    $("#title_2").addClass("slideRight");
    $("hr").addClass("fadeIn");
    $("#navbar ul li").addClass("bigEntrance");

    $("#age").text(age);
    console.log(age);
});

