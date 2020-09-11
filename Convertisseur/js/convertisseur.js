$(function () {

    var tab_conversions = new Array();

    var tab_tmp = new Array();

    tab_tmp['nom'] = "Celsius - Fahrenheit";
    tab_tmp['unite_1'] = "°C";
    tab_tmp['unite_2'] = "°F";

    tab_conversions["cel_fahr"] = tab_tmp;

    var tab_tmp = new Array();

    tab_tmp['nom'] = "Centimètres - Pouces";
    tab_tmp['unite_1'] = "Cm";
    tab_tmp['unite_2'] = "\"";

    tab_conversions["cm_pouces"] = tab_tmp;

    function unite(){
        let key = $("#conversion_type").val();
        $("#unite_1").html(tab_conversions[key]["unite_1"]);
        $("#unite_2").html(tab_conversions[key]["unite_2"]);
    }

    for(var key in tab_conversions){
        item = tab_conversions[key];
        $("#conversion_type").append(new Option(item.nom, key))
    }
    tab_conversions.forEach(function (item, index){
        $("#conversion_type").append(new Option(item, key))
    });

    unite();

    $("#conversion_type").on("change", function (){
        unite();
    });

    $('#unit1_per, #unit2_per').on("keyup", function () {

        switch ($("#conversion_type").val()){
            case "cel_fahr":
                if ($(this).attr("id")=="unit1_per"){
                    var val1 = $('#unit1_per').val();
                    if ($('#unit1_per').val()==""){
                        $('#unit2_per').val("");
                    }
                    else {
                        $('#unit2_per').val((val1*9/5) + 32);
                    }
                }
                else {
                    var val1 = $('#unit2_per').val();
                    if ($('#unit2_per').val()==""){
                        $('#unit1_per').val("");
                    }
                    else {
                        $('#unit1_per').val((val1-32)*5/9);
                    }
                }
                break;
            case "cm_pouces":
                if ($(this).attr("id")=="unit1_per"){
                    var val1 = $('#unit1_per').val();
                    if ($('#unit1_per').val()==""){
                        $('#unit2_per').val("");
                    }
                    else {
                        $('#unit2_per').val((val1/2.54));
                    }
                }
                else {
                    var val1 = $('#unit2_per').val();
                    if ($('#unit2_per').val()==""){
                        $('#unit1_per').val("");
                    }
                    else {
                        $('#unit1_per').val((val1*2.54));
                    }
                }
                break;
        }



    })
});