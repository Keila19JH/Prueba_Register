<?php

function connectDB(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "pruebass";
    $port = "3306";

    $connection = mysqli_connect( $server, $user, $password, $db, $port );


    if( !$connection ){
        die( "Failed to connect:".mysqli_connect_error() );
    }

    $connection->set_charset( 'utf8' );

    return $connection;
}

$connection = connectDB();


/*Verification of DB connection

if( $connection ){
    echo "Connection estableshied";
}else{
    echo "Error connecting";
}
*/

?>