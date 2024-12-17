
<?php
    include("../connection.php");

    if ( $_SERVER[ "REQUEST_METHOD" ] === "POST" ) {
        
        $turno_user    = isset( $_POST[ 'turno_user' ] )   ? mysqli_real_escape_string( $connection, $_POST[ 'turno_user' ] ) : null;
        $genero_user   = isset( $_POST[ 'genero_user' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'genero_user' ] ) : null;
        $edad_user     = isset( $_POST[ 'edad_user' ] )    ? mysqli_real_escape_string( $connection, $_POST[ 'edad_user' ] ) : null;
        $satisfaccion_atencion = isset( $_POST[ 'satisfaccion_atencion' ] ) ? mysqli_real_escape_string( $connection, $_POST[ 'satisfaccion_atencion' ] ) : null;
        $tiempo_espera   = isset( $_POST[ 'tiempo_espera' ] )    ? mysqli_real_escape_string( $connection, $_POST[ 'tiempo_espera' ] ) : null;
        $nombre_servicio = isset( $_POST[ 'nombre_servicio' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'nombre_servicio' ] ) : null;
        $tipo_servicio   = isset( $_POST[ 'tipo_servicio' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'tipo_servicio' ] ) : null;
        $maltratoRecibido_personal = isset( $_POST[ 'maltratoRecibido_personal' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'maltratoRecibido_personal' ] ) : null;
        $trato_amable    = isset( $_POST[ 'trato_amable' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'trato_amable' ] ) : null;
        $atencion_medico = isset( $_POST[ 'atencion_medico' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'atencion_medico' ] ) : null;
        $atencion_enfermeria  = isset( $_POST[ 'atencion_enfermeria' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'atencion_enfermeria' ] ) : null;
        $tramites_continuidad = isset( $_POST[ 'tramites_continuidad' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'tramites_continuidad' ] ) : null;
        $derechos_paciente    = isset( $_POST[ 'derechos_paciente' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'derechos_paciente' ] ) : null;
        $satisfaccion_hiegeneHospital    = isset( $_POST[ 'satisfaccion_hiegeneHospital' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'satisfaccion_hiegeneHospital' ] ) : null;
        $satisfaccion_HRAEI    = isset( $_POST[ 'satisfaccion_HRAEI' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'satisfaccion_HRAEI' ] ) : null;

        if (!empty( $turno_user )  && 
            !empty( $genero_user ) && 
            !empty( $edad_user )   && 
            !empty( $satisfaccion_atencion ) &&
            !empty( $tiempo_espera ) &&
            !empty( $nombre_servicio ) &&
            !empty( $tipo_servicio ) &&
            !empty( $maltratoRecibido_personal ) &&
            !empty( $trato_amable ) &&
            !empty( $atencion_medico ) &&
            !empty( $atencion_enfermeria ) &&
            !empty( $tramites_continuidad ) &&
            !empty( $derechos_paciente ) &&
            !empty( $satisfaccion_hiegeneHospital ) &&
            !empty( $satisfaccion_HRAEI )){

            $query = "INSERT INTO 
                        areas_ambulatorias(turno_user, genero_user, edad_user, satisfaccion_atencion, tiempo_espera, nombre_servicio, 
                        tipo_servicio, maltratoRecibido_personal, trato_amable, atencion_medico, atencion_enfermeria, tramites_continuidad, 
                        derechos_paciente, satisfaccion_hiegeneHospital, satisfaccion_HRAEI)
                      VALUES 
                        ('$turno_user', '$genero_user', '$edad_user', '$satisfaccion_atencion', '$tiempo_espera', '$nombre_servicio', 
                        '$tipo_servicio', '$maltratoRecibido_personal', '$trato_amable', '$atencion_medico', '$atencion_enfermeria', 
                        '$tramites_continuidad', '$derechos_paciente', '$satisfaccion_hiegeneHospital', '$satisfaccion_HRAEI')";

            if ( mysqli_query( $connection, $query ) ) {
                echo json_encode( [ "status" => "success", "message" => "Gracias por tomarse el tiempo para compartir sus opiniones.
                                                                         Su retroalimentación es muy valiosa para nosotros. ¡Hasta la próxima!" ] );
            } else {
                echo json_encode( ["status" => "error", "message" => "Error al guardar datos: " . mysqli_error( $connection ) ] );
            }
        } else {
            // Responder si faltan datos
            echo json_encode( [ "status" => "error", "message" => "Campos seleccionados incompletos." ] );
        }
    } else {
        // Si el método no es POST
        echo json_encode( [ "status" => "error", "message" => "Método no permitido." ] );
    }


?>