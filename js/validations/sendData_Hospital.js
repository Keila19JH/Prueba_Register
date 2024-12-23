

const sectionHistory = [];

function goBack() {
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
        numero_piso: null,
        servicio_piso: null,
        maltratoRecibido_personal: null,
        trato_amable: null,
        atencion_medico: null,
        explicacion_cuidados: null,
        tramites_continuidad: null,
        derechos_paciente: null,
        satisfaccion_hiegeneHospital: null,
        satisfaccion_comidaHospital: null,
        satisfaccion_HRAEI: null,
        area: "hospitalaria",
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
        surveyData.atencion_medico = $( this ).data( "info" ); 
        navigateSections( "satisfactionMedicalCare", "nurseExplication_care" );
    });


    $( "#nurseExplication_care .card" ).on( "click", function() {
        surveyData.explicacion_cuidados = $( this ).data( "info" ); 
        navigateSections( "nurseExplication_care", "orientationContinuity" );
    });


    $( "#orientationContinuity .card" ).on( "click", function() {
        surveyData.tramites_continuidad = $( this ).data( "info" ); 
        navigateSections( "orientationContinuity", "patientRights" );
    });


    $( "#patientRights .card" ).on( "click", function() {
        surveyData.derechos_paciente = $( this ).data( "info" ); 
        navigateSections( "patientRights", "satisfactionCleaning" );
    });


    $( "#satisfactionCleaning .card" ).on( "click", function() {
        surveyData.satisfaccion_hiegeneHospital = $( this ).data( "info" ); 
        navigateSections( "satisfactionCleaning", "satisfaction_foodHospitalization" );
    });

    
    $( "#satisfaction_foodHospitalization .card" ).on( "click", function() {
        surveyData.satisfaccion_comidaHospital = $( this ).data( "info" ); 
        navigateSections( "satisfaction_foodHospitalization", "satisfactionExperienceHRAEI" );
    });


    $( "#satisfactionExperienceHRAEI .card" ).on( "click", function() {
        surveyData.satisfaccion_HRAEI = $( this ).data( "info" );

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
                    url: "../php/handlers/registerHospital.php",
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