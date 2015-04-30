$(document).ready( function () {
    $("#skillsaccordion").accordion({
        collapsible: true,
        heightStyle: "content"
    });
    $("#title1").addClass("slideLeft");
    $("#title2").addClass("slideRight");
    $("hr").addClass("fadeIn");
    $("#navbar ul li").addClass("bigEntrance");
    $(document).scroll(function () {
        console.log($(document).scrollTop());
            if($(document).scrollTop() >= $(window).height() && !$("about").hasClass("pullDown")){
                $("#about").addClass("pullDown");
                $("#skills").addClass("pullUp");
            }
    });
});
