INSERT INTO areas_hospitalarias(turno_user, genero_user, edad_user, satisfaccion_atencion) 
VALUES ('$turno_user','$genero_user','$edad_user','$satisfaccion_atencion');


INSERT INTO `areas_hospitalarias`(`id_hospitalaria`, `turno_user`, `genero_user`, `edad_user`, `satisfaccion_atencion`, `numero_piso`, `servicio_piso`, `maltratoRecibido_personal`, `trato_amable`, `atencion_medico`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]')

INSERT INTO areas_ambulatorias(turno_user, genero_user, edad_user, satisfaccion_atencion, tiempo_espera, nombre_servicio, nombre_servicio, tipo_servicio, maltratoRecibido_personal, trato_amable, atencion_medico) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')

INSERT INTO `areas_ambulatorias`(`id_ambulatoria`, `turno_user`, `genero_user`, `edad_user`, `satisfaccion_atencion`, `tiempo_espera`, `nombre_servicio`, `tipo_servicio`, `maltratoRecibido_personal`, `trato_amable`, `atencion_medico`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')






$( "#timeAtt .card" ).on( "click", function() {
        surveyData. = $( this ).data( "info" ); 
        navigateSections( "timeAtt", "typeService" );
    });


    $( "# .card" ).on( "click", function() {
        surveyData. = $( this ).data( "info" ); 
        navigateSections( "", "" );
    });

    $( "# .card" ).on( "click", function() {
        surveyData. = $( this ).data( "info" ); 
        navigateSections( "", "" );
    });


    $( "# .card" ).on( "click", function() {
        surveyData. = $( this ).data( "info" ); 
        navigateSections( "", "" );
    });