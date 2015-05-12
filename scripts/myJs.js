$(document).ready( function () {
    $("#skillsaccordion").accordion({
        collapsible: true,
        heightStyle: "content"
    });
    $("#title1").addClass("slideLeft");
    $("#title2").addClass("slideRight");
    $("hr").addClass("fadeIn");
    if(window.width > 768){
        $("#navbar ul li").addClass("bigEntrance");
    }
    $(document).scroll(function () {
        if(window.width > 768){
            $("#socialmedia").css("top", $(document).scrollTop());
        }
        console.log($(document).scrollTop());
/*        if($(document).scrollTop() >= (1.5*$(window).height()) && !$("#projects").hasClass("pullDown")){
            $("#projects").addClass("pullDown");
            $("#edu").addClass("pullUp");
        }
        else if($(document).scrollTop() >= $(window).height() && !$("#about").hasClass("pullDown")){
            $("#about").addClass("pullDown");
            $("#skills").addClass("pullUp");
        }*/
    });
});

