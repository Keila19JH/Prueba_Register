
<?php
    include("connection.php");

    if ( $_SERVER[ "REQUEST_METHOD" ] === "POST" ) {
        
        $turno_user   = isset( $_POST[ 'turno_user' ] )   ? mysqli_real_escape_string( $connection, $_POST[ 'turno_user' ] ) : null;
        $genero_user  = isset( $_POST[ 'genero_user' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'genero_user' ] ) : null;
        $edad_user    = isset( $_POST[ 'edad_user' ] )    ? mysqli_real_escape_string( $connection, $_POST[ 'edad_user' ] ) : null;
        $satisfaccion_atencion = isset( $_POST[ 'satisfaccion_atencion' ] ) ? mysqli_real_escape_string( $connection, $_POST[ 'satisfaccion_atencion' ] ) : null;
        $area         = isset( $_POST[ 'area' ] )         ? $_POST[ 'area' ] : null;

        
        if (!empty( $turno_user )  && 
            !empty( $genero_user ) && 
            !empty( $edad_user )   && 
            !empty( $satisfaccion_atencion )){
            
            $area_table = $area === "hospitalaria" ? "areas_hospitalarias" : "areas_ambulatorias";

            $query = "INSERT INTO $area_table (turno_user, genero_user, edad_user, satisfaccion_atencion) 
                      VALUES ('$turno_user', '$genero_user', '$edad_user', '$satisfaccion_atencion')";

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

