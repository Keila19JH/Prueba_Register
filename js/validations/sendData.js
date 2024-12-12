

const sectionHistory = [];

function goBack() {
    if (sectionHistory.length > 0) {
        const previousSection = sectionHistory.pop(); // Obtener la sección anterior
        $(".section").hide(); // Ocultar todas las secciones
        $(`#${previousSection}`).show(); // Mostrar la sección anterior
    } else {
        Swal.fire("Aviso", "No puedes regresar más atrás.", "info");
    }
}


$( document ).ready( function() {
    const surveyData = {
        turno_user: null,
        genero_user: null,
        edad_user: null, 
        satisfaccion_atencion: null,
        numero_piso: null,
        servicio_piso: null,
        maltratoRecibido_personal: null,
        area: "hospitalaria",
    };

    function navigateSections(currentSection, nextSection) {
        $(".section").hide(); // Ocultar todas las secciones
        $(`#${nextSection}`).show(); // Mostrar la sección siguiente
        sectionHistory.push(currentSection); // Guardar la sección actual en el historial
    }
    
    $( "#shift .card" ).on( "click", function() {
        surveyData.turno_user = $( this ).data( "info" );
        navigateSections( "shift", "gender" );
    });

    $( "#gender .card" ).on( "click", function() {
        surveyData.genero_user = $( this ).data( "info" );
        navigateSections( "gender", "ageUser" );
    });

    $( "#ageUser .card" ).on( "click", function() {
        surveyData.edad_user = $( this ).data( "info" ); 
        navigateSections( "ageUser", "satisfaction_attention" );
    });

    $( "#satisfaction_attention .card" ).on( "click", function() {
        surveyData.satisfaccion_atencion = $( this ).data( "info" ); 
        console.log("Satisfacción de atención seleccionada: ", surveyData.satisfaccion_atencion);
        navigateSections( "satisfaction_attention", "floors" );
    });
    

    $( "#floors .card" ).on( "click", function() {
        surveyData.numero_piso = $( this ).data( "info" );
        //console.log( "Piso seleccionado:", surveyData.numero_piso );
        
        switch (surveyData.numero_piso) {
            case "Primer piso":
                navigateSections("floors", "firstFloor_Service");
            break;

            case "Segundo piso":
                navigateSections("floors", "secondFloor_Service");
            break;

            case "Tercer piso":
                navigateSections("floors", "thirdFloor_Service");
            break;

            case "Cuarto piso":
                navigateSections("floors", "fourthFloor_Service");
            break;

            case "Urgencias":
                navigateSections("floors", "receiveAbuse"); 
            break;

            default:
                Swal.fire("Error", "Piso no válido.", "error");
        }
    });

    $( ".section[ id$='Floor_Service' ] .card" ).on( "click", function () {
       
        surveyData.servicio_piso = $( this ).data( "info" );
        //console.log("Servicio seleccionado:", surveyData.servicio_piso);
        navigateSections( $( this ).closest( ".section" ).attr( "id" ), "receiveAbuse" );
    });
    
    
    $( "#receiveAbuse .card" ).on( "click", function() {
        surveyData.maltratoRecibido_personal = $( this ).data( "info" );

        Swal.fire({
            title:  "Confirmar",
            text:   "¿Está seguro de enviar sus respuestas?",
            icon:   "question",
            showCancelButton: true,
            confirmButtonText: "Sí, enviar",
            cancelButtonText: "No, cancelar",
        }).then( ( result ) => {
            if( result.isConfirmed ){

                console.log( surveyData );

                $.ajax({
                    url: "../php/register.php",
                    method: "POST",
                    data: surveyData,
                    dataType: "json",
                    success: function( res ){
                        if( res.status  === "success" ){
                            Swal.fire( "¡Recibimos tus datos!", res.message, "success" ).then( () => {
                                window.location.href = "../index.php";
                            });
                        } else {
                            Swal.fire( "Error", res.message, "error" );
                        }
                    },
                    error: function(){
                        Swal.fire( "Error", "No se pudieron enviar los datos. :(", "error" );
                    },
                });
            }
        });
    });
});