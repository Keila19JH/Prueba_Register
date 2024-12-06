
        
$( document ).ready( function() {
    const surveyData = {
        area: $( "body" ).data( "area" ),
        turno_user: null
    };

    // Click event for select shift
    $( ".card" ).on( "click", function(){
        surveyData.turno_user = $( this ).data( "info" );
        Swal.fire( "¡Turno Guardado!", "Continúa contestando :)", "info" );
        $( "#shift" ).hide();
        $( "#feedbackSection" ).show();
    });

    // Send data for end survey
    $( "#endSurveySatisfaction" ).on( "click", function( event ) {
        event.preventDefault();
        if( surveyData.turno_user ){
            $.ajax({
                url: "../php/register.php",
                method: "POST",
                data: surveyData,
                dataType: "json",
                success: function( res ){
                    if( res.status === "success" ){
                        Swal.fire("¡Enviado!", res.message, "success").then( () => {
                            window.location.href = "../index.php";
                        });
                    } else{
                        Swal.fire( "Error", res.message, "error" );
                    }
                },
                error: function(){
                    Swal.fire( "Error", "No se enviaron los datos.", "error" );
                }
            });
        } else {
            Swal.fire( "Error", "Selecciona una opción por favor.", "warning" );
        }
    });
});