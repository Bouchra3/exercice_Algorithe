$(function(){

$("#formulaire").on("submit", function(e){
    e.preventDefault();
    var input = $("#bouchra").val();
   console.log(input);
    var array = input.split(" ");
   //console.log($array);
    if(array.length>3 || array.length<3){
        console.log("erreur");
    }
    else{
        if(array[0] != "Mike"){
            console.log("le premier paramètre doit être Mike");
        }
        else{
            console.log("le premier paramètre est : "+array[1]); 
            console.log("le deuxième paramètre est : "+array[2]);
            } 

        }
    })
})

