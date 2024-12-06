

function buttongoBackSectionFloors(){
    document.getElementById( "floors" ).style.display                  = "none";
    document.getElementById( "satisfaction_attention" ).style.display  = "block";
}

function buttongoBackFloors(){
    const hiddenElements = document.querySelectorAll( "#firstFloor_Service , #secondFloor_Service, #thirdFloor_Service, #fourthFloor_Service, #DQReceiveAbuse");
    hiddenElements.forEach( element => {
        element.style.display = "none";
    });

    document.getElementById( "floors" ).style.display = "block";
}



function buttongoBackMenuFloors(){
    document.getElementById( "typeStaff" ).style.display = "none";
    document.getElementById( "floors" ).style.display = "block";
}


function buttongoBackSatisfactionMedicalCare(){
    document.getElementById( "nurseExplication_care" ).style.display = "none";
    document.getElementById( "satisfactionMedicalCare" ).style.display = "block";
}

function buttongoBackNurseExplication_care(){
    document.getElementById( "orientationContinuity" ).style.display = "none";
    document.getElementById( "nurseExplication_care" ).style.display = "block";
}


function buttongoBackOrientationContinuity(){
    document.getElementById( "patientRights" ).style.display = "none";
    document.getElementById( "orientationContinuity" ).style.display = "block";
}

function buttongoBackPatientRights(){
    document.getElementById( "satisfactionCleaning" ).style.display = "none";
    document.getElementById( "patientRights" ).style.display = "block";
}

function buttongoBackSatisfactionCleaning(){
    document.getElementById( "satisfaction_foodHospitalization" ).style.display = "none";
    document.getElementById( "satisfactionCleaning" ).style.display = "block";
}

function buttongoBackFoodHospitalization(){
    document.getElementById( "satisfactionExperienceHRAEI" ).style.display = "none";
    document.getElementById( "satisfaction_foodHospitalization" ).style.display = "block";
}

