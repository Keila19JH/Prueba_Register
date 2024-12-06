<?php
    include( "connection.php" );

    if( $_SERVER[ "REQUEST_METHOD" ] === "POST" ){

        $turno_user  = isset( $_POST[ 'turno_user' ] )  ? mysqli_real_escape_string( $connection, $_POST[ 'turno_user' ] ) : null;
        $genero_user = isset( $_POST[ 'genero_user' ] ) ? mysqli_real_escape_string( $connection, $_POST[ 'genero_user' ] ) : null;
        $edad_user   = isset( $_POST[ 'edad_user' ] )   ? mysqli_real_escape_string( $connection, $_POST[ 'edad_user' ] ) : null;
        $satisfaccion_atencion = isset( $_POST[ 'satisfaccion_atencion' ] )   ? mysqli_real_escape_string( $connection, $_POST[ 'satisfaccion_atencion' ] ) : null;
        $area = isset( $_POST[ 'area' ] ) ? $_POST[ 'area' ] : null;
        
        if( $turno_user && $genero_user && $edad_user && $satisfaccion_atencion && $area  ){

            $area_table = $area === "hospitalaria" ? "areas_hospitalarias" : "areas_ambulatorias";

            $query = "INSERT INTO $area_table (turno_user, genero_user, edad_user, satisfaccion_atencion) 
                      VALUES ('$turno_user','$genero_user','$edad_user','$satisfaccion_atencion')";

            if( mysqli_query( $connection, $query ) ){
                
                echo json_encode( [ "status" => "success", "message" => "Turno registrado correctamente." ] );
                
            } else {
                echo json_encode( [ "status" => "error", "message" => "Error al guardar datos: " . mysqli_error( $connection ) ] );
            }
        } else {
            echo json_encode( [ "status" => "error", "message" => "Campos seleccionados incompletos." ] );
        }
    } else {
        echo json_encode( [ "status", "error", "message" => "Método no permitido."] );
    }

?>