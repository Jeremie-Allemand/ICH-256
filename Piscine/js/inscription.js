$(function () {

    $("#moniteur").click(function (){
        if($(this).prop("checked") == true){
            $("input#nombre_eleves").removeAttr("disabled");
            $("#nombre_eleves, input#nombre_eleves").show();

        }
        else if($(this).prop("checked") == false){
            $("input#nombre_eleves").attr("disabled", "");
            $("input#nombre_eleves").value='';
            $("#nombre_eleves, input#nombre_eleves").hide();
        }
    });

    $('input[name=club]').on('change', function() {
        $output=$("input[name=club]:checked", '#inscription_form').val();
        if($output=="autre"){
            $("#autre_nom, input#autre_nom").show();
            $("input#autre_nom").removeAttr("disabled");
        }
        else{
            $("#autre_nom, input#autre_nom").hide();
            $("input#autre_nom").attr("disabled", "");
        }
    });

    $.validator.addMethod("PWCHECK",
        function(value,element) {
            if(/^(?=.*?[A-Z]{1,})(?=(.*[a-z]){1,})(?=(.*[0-9]){1,})(?=(.*[$@$!%*?&]){1,}).{8,}$/.test(value)){
                return true;
            }else{
                return false;
            };
        }
    );
    $.validator.addMethod("check_nom",
        function(value,element) {
            if(/^[a-zA-ZÀ-ÿ-. ]*$/.test(value)){
                return true;
            }

            else{
                return false;
            };
        }
    );

    $.validator.addMethod("check_email",
        function(value,element) {

            if(/^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/.test(value)){
                return true;
            }

            else{
                return false;
            };
        }
    );

    $("#inscription_form").validate(
        {
            rules: {
                nom_per:{
                    required: true,
                    minlength: 2,
                    check_nom: true
                },
                prenom_per:{
                    required: true,
                    minlength: 2,
                    check_nom: true
                },
                tel_per: {
                    required : true,
                    phone : true
                },
                email_per: {
                    email: true
                },
            },
            messages:{
                nom_per: {
                    required: "Votre nom est indispensable à l'ouverture d'un compte",
                    minlength: "Votre nom doit être composé de 2 caractères au minimum",
                    check_nom: "Vous pouvez pas utiliser de chiffre"
                },
                prenom_per: {
                    required: "Votre prénom est indispensable à l'ouverture d'un compte",
                    minlength: "Votre prénom doit être composé de 2 caractères au minimum",
                    check_nom: "Vous pouvez pas utiliser de chiffre"
                },
                tel_per: {
                    required: "Votre numéro de téléphone est indispensable à l'ouverture d'un compte",
                    phone: "Votre numéro de téléphone n'est pas valide"
                },
                email_per: {
                    email: "Votre adresse e-mail doit avoir le format suivant : name@domain.com"
                }
            },

        }


    );
});