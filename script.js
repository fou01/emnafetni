$(document).ready(function(){
    $("#moviemore").hide(); 
    $("#showbutton").click(function(){
        $("#moviemore").fadeIn().addClass("shown-movie"); 
        $("body").addClass("body-when-shown"); 

    })
    $("#hidebutton").click(function(){
        $("#moviemore").fadeOut().removeClass("shown-movie"); 
        $("body").removeClass("body-when-shown"); 

    })
})