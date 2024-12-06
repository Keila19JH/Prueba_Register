
function showSectionFloors(){
    document.getElementById( "satisfaction_attention" ).style.display = "none";
    document.getElementById( "floors" ).style.display = "block";
}


function showSectionFloorServices( floor ){      // Definición de parámetro floor - Indicador del piso
    //Ocultar todos los pisos
    document.getElementById( "floors" ).style.display = "none";
    //Generar el ID de la sección que se desea mostrar
    const IDconstruction = `${floor}Floor_Service`;
    //Busca el elemento generado con el ID
    const getGeneratedID = document.getElementById( IDconstruction );

    if( getGeneratedID ){
        getGeneratedID.style.display = "block";
    }else{
        alert(`No se encontró el piso ${floor}` )
    }
}


function showSectionReceiveAbuseQuestion(){
    document.getElementById( "floors" ).style.display = "none";
    document.getElementById( "DQReceiveAbuse" ).style.display = "block";
}

function showSatisfactionMedicalCare(){
    document.getElementById( "satisfactionMedicalCare" ).style.display = "none";
    document.getElementById( "nurseExplication_care" ).style.display = "block";
}

function showOrientationContinuity(){
    document.getElementById( "nurseExplication_care" ).style.display = "none";
    document.getElementById( "orientationContinuity" ).style.display = "block";
}

function showSatisfactionFoodHospitalization(){
    document.getElementById( "satisfactionCleaning" ).style.display = "none";
    document.getElementById( "satisfaction_foodHospitalization" ).style.display = "block";
}

function showSatisfactionExperienceHRAEI(){
    document.getElementById( "satisfaction_foodHospitalization" ).style.display = "none";
    document.getElementById( "satisfactionExperienceHRAEI" ).style.display = "block";
}



