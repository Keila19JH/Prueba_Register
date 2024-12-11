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
        surveyData.edad_user = $( this ).data( "info" ); // Corregido
        navigateSections( "ageUser", "satisfaction_attention" );
    });
    

    $( "#satisfaction_attention .card" ).on( "click", function() {
        surveyData.satisfaccion_atencion = $( this ).data( "info" );

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