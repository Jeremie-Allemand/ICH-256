$(function (){


/*
    $("#input0").on("keyup", function (){
        $("#input1").val("");

        if($("#input0").val() != ""){
            let celsius= $("#input0").val();
            $("#input1").val(celsius * 1.8 + 32);
        }
    });

    $("#input1").on("keyup", function (){
        $("#input0").val("");

        if($("#input1").val() != ""){
            let fahrenheit= $("#input1").val();
            $("#input0").val((fahrenheit - 32) * (5/9));
        }
    });
*/
    switch ($("#choix").val){
        case "cf":
            console.log("cf");
            $("#valeur1, #valeur2").on("keyup", function () {
                if($(this).attr("id") == "#valeur1") {
                    console.log("a");
                    let celsius = $("#this").val();
                    let fahrenheit = celsius * 1.8 + 32;
                    $("#valeur2").val(fahrenheit);

                }

                else {
                    console.log("b");
                    let fahrenheit = $("#this").val();
                    let celsius = (fahrenheit - 32) * 1.8
                    $("#valeur1").val(celsius);

                }


            });

            break;
        }


});