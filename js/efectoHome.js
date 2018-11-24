$(document).ready(function () {

    var m1 = $("#m1");
    var m2 = $("#m2");
    var m3 = $("#m3");
    var m4 = $("#m4");
   

function volver(){
        m1 = $("#m1").css("width", "25%");
        m2 = $("#m2").css("width", "25%");
        m3 = $("#m3").css("width", "25%");
        m4 = $("#m4").css("width", "25%");
       
}
    m1.mouseover(function () {
        m1 = $("#m1").css("width", "28%");
        m2 = $("#m2").css("width", "24%");
        m3 = $("#m3").css("width", "24%");
        m4 = $("#m4").css("width", "24%");
       
    });
    m1.mouseleave(function () {
        volver();
    });
    
    m2.mouseover(function () {
        m1 = $("#m1").css("width", "24%");
        m2 = $("#m2").css("width", "28%");
        m3 = $("#m3").css("width", "24%");
        m4 = $("#m4").css("width", "24%");
       
    });
    m2.mouseleave(function () {
       volver();
    });
    m3.mouseover(function () {
        m1 = $("#m1").css("width", "24%");
        m2 = $("#m2").css("width", "24%");
        m3 = $("#m3").css("width", "28%");
        m4 = $("#m4").css("width", "24%");
       
    });
    m3.mouseleave(function () {
        volver();
    });
    m4.mouseover(function () {
        m1 = $("#m1").css("width", "24%");
        m2 = $("#m2").css("width", "24%");
        m3 = $("#m3").css("width", "24%");
        m4 = $("#m4").css("width", "28%");
       
    });
    m4.mouseleave(function () {
        volver();
    });
   
});

