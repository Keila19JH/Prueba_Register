
const sectionHistory = [];

function goBackAmbulatory() {
    if ( sectionHistory.length > 0 ) {
        const previousSection = sectionHistory.pop(); // Obtener la sección anterior
        $( ".section" ).hide(); 
        $( `#${ previousSection }` ).show(); 
    } else {
        Swal.fire( "Aviso", "No puedes regresar más atrás.", "info" );
    }
}


$( document ).ready( function() {
    const surveyData = {
        turno_user: null,
        genero_user: null,
        edad_user: null, 
        satisfaccion_atencion: null,
        tiempo_espera: null,
        nombre_servicio: null,
        tipo_servicio: null,
        maltratoRecibido_personal: null,
        trato_amable: null,
        atencion_medico: null,
        area: "ambulatoria",
    };

    function navigateSections( currentSection, nextSection ) {
        $( ".section" ).hide(); 
        $( `#${ nextSection }` ).show(); 
        sectionHistory.push( currentSection ); // Guardar section_actual en historial
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
        //console.log("Satisfacción de atención seleccionada: ", surveyData.satisfaccion_atencion);
        navigateSections( "satisfaction_attention", "timeAtt" );
    });

    $( "#timeAtt .card" ).on( "click", function() {
        surveyData.tiempo_espera = $( this ).data( "info" ); 
        //console.log("Satisfacción de atención seleccionada: ", surveyData.satisfaccion_atencion);
        navigateSections( "timeAtt", "typeService" );
    });


    $( "#tipoConsultaExterna_Service .card" ).on( "click", function() {
        const selectService = $( this ).data( "info" );

        surveyData.nombre_servicio = selectService;

        switch ( selectService ) {
            case "Consulta Externa Adultos":
                navigateSections("tipoConsultaExterna_Service", "consultaExtAdultos_Service");
            break;

            case "Consulta Externa Pediátrica":
                navigateSections("tipoConsultaExterna_Service", "consultaExtPediatrica_Service");
            break;

            case "Unidad de apoyo":
                navigateSections("typeService", "unidadApoyo_Service");
            break;

            case "Clínicas":
                navigateSections("typeService", "clinicas_Service");
            break;

            case "Cirugía Ambulatoria":
                navigateSections("typeService", "receiveAbuse");
            break;

            case "Auxiliares":
                navigateSections("typeService", "auxiliares_Service"); 
            break;

            default:
                Swal.fire("Error", "Servicio no válido.", "error");
        }
    });


    $( "#consultaExtAdultos_Service .card, #consultaExtPediatrica_Service .card" ).on( "click", function () {
        const selectedInfo = $( this ).data( "info" );
        surveyData.tipo_servicio = selectedInfo;
        navigateSections( $( this ).closest( ".section" ).attr( "id" ), "receiveAbuse" );
    });
    

    $( "#receiveAbuse .card" ).on( "click", function() {
        const res = $( this ).data( "info" );
        surveyData.maltratoRecibido_personal = res;

        if( res === "Si" ){
            navigateSections( "receiveAbuse", "typeStaff" );
        } else{ 
            navigateSections( "receiveAbuse", "treatmentFriendly");
        }
    });

    $( "#typeStaff .card" ).on( "click", function() {
        
        const whatTypeStaff = $( this ).data( "info" );
        surveyData.maltratoRecibido_personal = whatTypeStaff;
        navigateSections( "typeStaff", "treatmentFriendly" )

    });


    $( "#treatmentFriendly .card" ).on( "click", function() {
        surveyData.trato_amable = $( this ).data( "info" ); 
        navigateSections( "treatmentFriendly", "satisfactionMedicalCare" );
    });
    
    $( "#satisfactionMedicalCare .card" ).on( "click", function() {
        surveyData.nombre_servicio = $( this ).data( "info" );

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
                    url: "../php/handlers/registerAmbulatory.php",
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

