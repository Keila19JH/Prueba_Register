
function showSectionDQReceiveAbuse( previousClickId ){
    // Ocultar sección previa
    document.getElementById( previousClickId ).style.display = "none";
    //Mostrar sección de maltratoPersonal
    document.getElementById( "DQReceiveAbuse" ).style.display = "block";
    // Almacenar id previo en atributoData
    document.getElementById( "DQReceiveAbuse" ).setAttribute( "previousSectionData", previousClickId );
}



function showSectionTypeStaff( isReceiveAbuse ){
    
    document.getElementById( "DQReceiveAbuse" ).style.display = "none";

    if( isReceiveAbuse ){
        document.getElementById( "typeStaff" ).style.display = "block";
    }else{
       document.getElementById( "DQTreatmentFriendly" ).style.display = "block";
    }
}

function showSectionDQTreatmentFriendly( previousClickId ){
    // Ocultar sección previa
    document.getElementById( previousClickId ).style.display = "none";
    //Mostrar sección de maltratoPersonal
    document.getElementById( "DQTreatmentFriendly" ).style.display = "block";
    // Almacenar id previo en atributoData
    document.getElementById( "DQReceiveAbuse" ).setAttribute( "previousSectionData", previousClickId );
}



