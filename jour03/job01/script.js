$(document).ready(function(){     
    $("#button").click(function(){
        $("h1").hide(3000, "linear", function(){
            alert("Titre bien caché");
        });
    });
    
    $("#b2").click(function(){
        $("h1").show();
    });
});