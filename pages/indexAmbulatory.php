<?php
    include( "../php/connection.php" )
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas Hospitalarias Encuesta de Satisfacción</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../js/validations/sendData_Ambulatory.js"></script>

</head>

<body data-area="ambulatoria">
    <header>
        <div class="header-container">
            <h1>Encuesta de Satisfacción de Áreas Ambulatorias</h1>
            <div class="header-actions">
                <button class="login-btn"><i class="fas fa-sign-in-alt"></i> </button>
            </div>
        </div>
    </header>
    
    <form id="formAmbulatory" action="../index.php" method="POST">

    <div class="section" id="shift">
            <div class="shiftsContainer">
                <h2 class="form-title">Turno</h2>
                <div class="gender-container">

                    <div class="card" data-info="Matutino">
                        <img src="../img/Matutino.png" alt="Matutino">
                        <div class="card-body" card-info="Matutino">
                            <strong>Matutino</strong>
                        </div>
                    </div>

                    <div class="card" data-info="Vespertino">
                        <img src="../img/Vespertino.png" alt="Vespertino">
                        <div class="card-body" card-info="Vespertino">
                            <strong>Vespertino</strong>
                        </div>
                    </div>

                    <div class="card" data-info="Fin de semana">
                        <img src="../img/Fin.png" alt="Fin de semana">
                        <div class="card-body" card-info="Fin de semana">
                            <strong>Fin de semana</strong>
                        </div>
                    </div>

                </div>

                <a href="../index.php#section1">
                    <button type="button" class="back-button">Regresar</button>
                </a>

            </div>
        </div>


        <div class="section" id="gender">
            <div class="gendersContainer">
                <h2 class="form-title"> Género </h2>
                <div class="gender-container">

                    <div class="card" data-info="Masculino">
                        <img src="../img/hombre.png" alt="Masculino">
                        <div class="card-body" card-info="Masculino">
                            <strong> Masculino </strong>
                        </div>                       
                    </div>
                                
                    <div class="card" data-info="Femenino">
                        <img src="../img/mujer.png" alt="Femenino">
                        <div class="card-body" card-info="Femenino">
                            <strong> Femenino </strong>
                        </div>
                    </div>
                                        
                    <div class="card" data-info="Otro">
                        <img src="../img/otro.png" alt="Otro">
                        <div class="card-body" card-info="Otro">
                            <strong> Otro </strong>
                        </div>       
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="ageUser">
            <div class="agesUserContainer">
                <h2 class="form-title"> Edad </h2>
                <div class="age-container">

                    <div class="card" data-info="Menor de 18 años">
                        <img src="../img/niño.png" alt="Menor de 18 años">
                        <div class="card-body" card-info="Menor de 18 años">
                            <strong> Igual o menor de 18 años </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Entre 19 y 30 años">
                        <img src="../img/joven.png" alt="Entre 19 y 30 años">
                        <div class="card-body" card-info="Entre 19 y 30 años">
                            <strong> Entre 19 y 30 años </strong>
                        </div>
                    </div>
                    
                    <div class="card" data-info="Entre 31 y 49 años">
                        <img src="../img/adulto1.png" alt="Entre 31 y 49 años">
                        <div class="card-body" card-info="Entre 31 y 49 años">
                            <strong> Entre 31 y 49 años </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Entre 50 y 65 años">
                        <img src="../img/viejito.png" alt="Entre 50 y 65 años">
                        <div class="card-body" card-info="Entre 50 y 65 años">
                            <strong> Entre 50 y 65 años </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="satisfaction_attention">
            <div class="satisfactionAttContainer">
                <h2 class="form-title"> ¿Qué tan satisfecho quedó con la atención recibida? </h2>
                <div class="attention-container">

                    <div class="card" data-info="Totalmente Satisfecho">
                        <img src="../img/totalmentesatisfecho.png" alt="Totalmente Satisfecho">
                        <div class="card-body" card-info="Totalmente Satisfecho">
                            <strong> Totalmente Satisfecho </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Satisfecho">
                        <img src="../img/Satisfecho2.png" alt="Satisfecho">
                        <div class="card-body" card-info="Satisfecho">
                            <strong> Satisfecho </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Nada Satisfecho">
                        <img src="../img/nada.png" alt="Nada Satisfecho">
                        <div class="card-body" card-info="Nada Satisfecho">
                            <strong> Nada Satisfecho </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button"> Regresar </button>
            </div>
        </div>

        <div class="section" id="timeAtt">
            <div class="timeAttContainer">
                <h2 class="form-title"> ¿Cuál fue el tiempo aproximado de espera para su atención? </h2>
                <div class="attention-container">

                    <div class="card" data-info="0-15 min">
                        <img src="../img/15min.png" alt="0-15 min">
                        <div class="card-body" card-info="0-15 min">
                            <strong> 0-15 min </strong>
                        </div>
                    </div>

                    <div class="card" data-info="16-30 min">
                        <img src="../img/30min.png" alt="16-30 min">
                        <div class="card-body" card-info="16-30 min">
                            <strong> 16-30 min </strong>
                        </div>
                    </div>

                    <div class="card" data-info="31-45 min">
                        <img src="../img/45min.png" alt="31-45 min">
                        <div class="card-body" card-info="31-45 min">
                            <strong> 31-45 min </strong>
                        </div>
                    </div>

                    <div class="card" data-info="46-60 min">
                        <img src="../img/60min.png" alt="46-60 min">
                        <div class="card-body" card-info="46-60 min">
                            <strong> 46-60 min </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Más de 60 min">
                        <img src="../img/mas60min.png" alt="Más de 60 min">
                        <div class="card-body" card-info="Más de 60 min">
                            <strong> Más de 60 min </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button"> Regresar </button>
                
            </div>
        </div>


        <div class="section" id="typeService">
            <div class="typeServiceContainer">
                <h2 class="form-title"> Servicio en el que fue atendido </h2>
                <div class="service-container">

                    <div class="card" data-info="Consulta Externa">
                        <img src="../img/CE.png" alt="Consulta Externa">
                        <div class="card-body" card-info="Consulta Externa">
                            <strong> Consulta Externa </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Unidad de apoyo">
                        <img src="../img/UA.png" alt="Unidad de Apoyo">
                        <div class="card-body" card-info="Unidad de Apoyo">
                            <strong> Unidad de apoyo </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Clínicas">
                        <img src="../img/Clinicas.png" alt="Clinicas">
                        <div class="card-body" card-info="Clinicas">
                            <strong> Clínicas </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Cirugía Ambulatoria">
                        <img src="../img/Cirugia.png" alt="Cirugia Ambulatoria">
                        <div class="card-body" card-info="Cirugia Ambulatoria">
                            <strong> Cirugía Ambulatoria </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Auxiliares">
                        <img src="../img/Auxiliares.png" alt="Auxiliares">
                        <div class="card-body" card-info="Auxiliares">
                            <strong> Auxiliares </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="tipoConsultaExterna_Service">

            <div class="consultaExternaContainer">
                <h2 class="form-title"> Servicio en el que fue atendido </h2>
                <div class="service-container">
        
                    <div class="card" data-info="Consulta Externa Adultos">
                        <img src="../img/C.E.A.png" alt="Consulta Externa Adultos">
                        <div class="card-body" card-info="Consulta Externa Adultos">
                            <strong> Consulta Externa Adultos </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Consulta Externa Pediátrica">
                        <img src="../img/C.E.P.png" alt="Consulta Externa Pediatrica">
                        <div class="card-body" card-info="Consulta Externa Pediatrica">
                            <strong> Consulta Externa Pediátrica </strong>
                        </div>
                    </div>
        
                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="consultaExtAdultos_Service">
            <div class="consultaExtAdultsContainer">
                <h2 class="form-title"> Consulta Externa Adultos </h2>
                <div class="service-container">

                    <div class="card" data-info="Algología">
                        <img src="../img/Algologia.png" alt="Algologia">
                        <div class="card-body" card-info="Algologia">
                            <strong> Algología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Anestesiología">
                        <img src="../img/anestesiologia.png" alt="Anestesiologia">
                        <div class="card-body" card-info="Anestesiologia">
                            <strong> Anestesiología </strong>
                        </div>
                    </div>
                    
                    <div class="card" data-info="Cardiología">
                        <img src="../img/cardiologia.png" alt="Cardiologia">
                        <div class="card-body" card-info="Cardiologia">
                            <strong> Cardiología </strong>
                        </div>
                    </div>
                
                    <div class="card" data-info="Ginecología">
                        <img src="../img/Ginecologia.png" alt="Ginecologia">
                        <div class="card-body" card-info="Ginecologia">
                            <strong> Ginecología </strong>
                        </div>
                    </div>
                
                    <div class="card" data-info="Hematología">
                        <img src="../img/Hematologia.png" alt="Hematologia">
                        <div class="card-body" card-info="Hematologia">
                            <strong> Hematología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Neurología">
                        <img src="../img/Neurologia.png" alt="Neurologia">
                        <div class="card-body" card-info="Neurologia">
                            <strong> Neurología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Nutrición">
                        <img src="../img/Nutricion.png" alt="Nutricion">
                        <div class="card-body" card-info="Nutricion">
                            <strong> Nutrición </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Oftalmología">
                        <img src="../img/Oftalmologia.png" alt="Oftalmologia">
                        <div class="card-body" card-info="Oftalmologia">
                            <strong> Oftalmología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Ortopedia">
                        <img src="../img/Ortopedia.png" alt="Ortopedia">
                        <div class="card-body" card-info="Ortopedia">
                            <strong> Ortopedia </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Psicología">
                        <img src="../img/psicologia.png" alt="Psicologia">
                        <div class="card-body" card-info="Psicologia">
                            <strong> Psicología </strong>
                        </div>
                    </div>
                
                    <div class="card" data-info="Audiología">
                        <img src="../img/audio.png" alt="Audiologia">
                        <div class="card-body" card-info="Audiologia">
                            <strong> Audiología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Angiología">
                        <img src="../img/Angiología.png" alt="Angiologia">
                        <div class="card-body" card-info="Angiologia">
                            <strong> Angiología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Otorrinolaringología">
                        <img src="../img/Otorrinolaringología.png" alt="Otorrinolaringologia">
                        <div class="card-body" card-info="Otorrinolaringologia">
                            <strong> Otorrinolaringología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Gastroenterología">
                        <img src="../img/Gastroenterología.png" alt="Gastroenterologia">
                        <div class="card-body" card-info="Gastroenterologia">
                            <strong> Gastroenterología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Coloproctología">
                        <img src="../img/Coloproctología.png" alt="Coloproctologia">
                        <div class="card-body" card-info="Coloproctologia">
                            <strong> Coloproctología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Endocrinología">
                        <img src="../img/Endocrinología.png" alt="Endocrinologia">
                        <div class="card-body" card-info="Endocrinologia">
                            <strong> Endocrinología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Neumología">
                        <img src="../img/Neumología.png" alt="Neumología">
                        <div class="card-body" card-info="Neumología">
                            <strong> Neumología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Infectología">
                        <img src="../img/Infectología.png" alt="Infectologia">
                        <div class="card-body" card-info="Infectologia">
                            <strong> Infectología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Geriatría">
                        <img src="../img/Geriatria.png" alt="Geriatria">
                        <div class="card-body" card-info="Geriatria">
                            <strong> Geriatría </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Psiquiatría">
                        <img src="../img/Psiquiatria.png" alt="Psiquiatria">
                        <div class="card-body" card-info="Psiquiatria">
                            <strong> Psiquiatría </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Urología">
                        <img src="../img/Urología.png" alt="Urologia">
                        <div class="card-body" card-info="Urologia">
                            <strong> Urología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Nefrología">
                        <img src="../img/Nefrología.png" alt="Nefrologia">
                        <div class="card-body" card-info="Nefrologia">
                            <strong> Nefrología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Reumatología">
                        <img src="../img/Reumatología.png" alt="Reumatologia">
                        <div class="card-body" card-info="Reumatologia">
                            <strong> Reumatología </strong>
                        </div>
                    </div> 

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="consultaExtPediatrica_Service">
            <div class="consultaExtPediatricaContainer">
                <h2 class="form-title"> Consulta Externa Pediátrica </h2>
                <div class="service-container">

                    <div class="card" data-info="Pediatría">
                        <img src="../img/Pediatria.png" alt="Pediatria">
                        <div class="card-body" card-info="Pediatria">
                            <strong> Pediatría </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Cardiología Pediátrica">
                        <img src="../img/cardiologia1.png" alt="Cardiologia Pediatrica">
                        <div class="card-body" card-info="Cardiologia Pediatrica">
                            <strong> Cardiología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Audiología Pediátrica">
                        <img src="../img/Audio1.png" alt="Audiologia Pediatrica">
                        <div class="card-body" card-info="Audiologia Pediatrica">
                            <strong> Audiología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Cirugía Pediátrica">
                        <img src="../img/C.P1.png" alt="Cirugia Pediatrica">
                        <div class="card-body" card-info="Cirugia Pediatrica">
                            <strong> Cirugía Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Endocrinología Pediátrica">
                        <img src="../img/E.P1.png" alt="Endocrinologia Pediatrica">
                        <div class="card-body" card-info="Endocrinologia Pediatrica">
                            <strong> Endocrinología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Gastroenterología Pediátrica">
                        <img src="../img/G.P1.png" alt="Gastroenterologia Pediatrica">
                        <div class="card-body" card-info="Gastroenterologia Pediatrica">
                            <strong> Gastroenterología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Infectología Pediátrica">
                        <img src="../img/I.P1.png" alt="Infectología Pediatrica">
                        <div class="card-body" card-info="Infectología Pediatrica">
                            <strong> Infectología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Nefrología Pediátrica">
                        <img src="../img/N.P1.png" alt="Nefrologia Pediatrica">
                        <div class="card-body" card-info="Nefrologia Pediatrica">
                            <strong> Nefrología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Neumología Pediátrica">
                        <img src="../img/Neumo.P1.png" alt="Neumologia Pediatrica">
                        <div class="card-body" card-info="Neumologia Pediatrica">
                            <strong> Neumología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Oncología Pediátrica">
                        <img src="../img/O.P1.png" alt="Oncologia Pediatrica">
                        <div class="card-body" card-info="Oncologia Pediatrica">
                            <strong> Oncología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Psicología Pediátrica">
                        <img src="../img/Psi.P1.png" alt="Psicologia Pediatrica">
                        <div class="card-body" card-info="Psicologia Pediatrica">
                            <strong> Psicología Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Rehabilitación Pediátrica">
                        <img src="../img/R.P1.png" alt="Rehabilitacion Pediatrica">
                        <div class="card-body" card-info="Rehabilitacion Pediatrica">
                            <strong> Rehabilitación Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Reumatología Pediátrica">
                        <img src="../img/Reuma.P1.png" alt="Reumatologia Pediatrica">
                        <div class="card-body" card-info="Reumatologia Pediatrica">
                            <strong> Reumatología Pediátrica </strong>
                        </div>
                    </div>

                </div>
            </div>
            <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>
        </div>


        <div class="section" id="unidadApoyo_Service">
            <div class="unidadApoyoContainer">
            <h2 class="form-title"> Unidad de Apoyo </h2>
                <div class="service-container">

                    <div class="card" data-info="Oncología">
                        <img src="../img/Oncologia.png" alt="Oncologia">
                        <div class="card-body" card-info="Oncologia">
                            <strong> Oncología  </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Braquiterapia">
                        <img src="../img/braquiterapia.png" alt="braquiterapia">
                        <div class="card-body" card-info="Braquiterapia">
                            <strong> Braquiterapia </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Cuidados Paliativos">
                        <img src="../img/cuidados_paliativos.png" alt="Cuidados Paliativos">
                        <div class="card-body" card-info="Cuidados Paliativos">
                            <strong> Cuidados Paliativos </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Medicina Nuclear">
                        <img src="../img/medicina_nuclear.png" alt="Medicina Nuclear">
                        <div class="card-body" card-info="Medicina Nuclear">
                            <strong> Medicina Nuclear </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Radioterapia">
                        <img src="../img/radioterapia.png" alt="Radioterapia">
                        <div class="card-body" card-info="Radioterapia">
                            <strong> Radioterapia </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Rehabilitación">
                        <img src="../img/rehabilitación.png" alt="rehabilitación">
                        <div class="card-body" card-info="Rehabilitación">
                            <strong> Rehabilitación </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Quimioterapia">
                        <img src="../img/quimioterapia.png" alt="quimioterapia">
                        <div class="card-body" card-info="Quimioterapia">
                            <strong> Quimioterapia </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Maxilofacial">
                        <img src="../img/maxilo.png" alt="Maxilofacial">
                        <div class="card-body" card-info="Maxilofacial">
                            <strong> Maxilofacial </strong>
                        </div>
                    </div>
        
                    <div class="card" data-info="Hemodiálisis">
                        <img src="../img/Hemo.png" alt="Hemodialisis">
                        <div class="card-body" card-info="Hemodialisis">
                            <strong> Hemodiálisis </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="clinicas_Service">
            <div class="clinicasContainer">
                <h2 class="form-title"> Clínicas </h2>
                <div class="service-container">

                    <div class="card" data-info="Clínica de Catéter">
                        <img src="../img/clinica_catetr.png" alt="Clinica cateter">
                        <div class="card-body" card-info="Clinica cateter">
                            <strong> Clínica de Catéter </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Clínica Heridas">
                        <img src="../img/clinica_heridas.png" alt="Clinica heridas">
                        <div class="card-body" card-info="Clinica heridas">
                            <strong> Clínica Heridas </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Clínica Mujer">
                        <img src="../img/clinica_mujer.png" alt="Clinica mujer">
                        <div class="card-body" card-info="Clinica mujer">
                            <strong> Clínica Mujer </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Clínica del Dolor">
                        <img src="../img/Clinica_Dolor1.png" alt="Clinica dolor">
                        <div class="card-body" card-info="Clinica dolor">
                            <strong> Clínica del Dolor </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Clínica del Sueño">
                        <img src="../img/ClinicaSueño.png" alt="Clinica sueño">
                        <div class="card-body" card-info="Clinica sueño">
                            <strong> Clínica del Sueño </strong>
                        </div>
                    </div>
                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>     
            </div>
        </div>



        <div class="section" id="auxiliares_Service">
            <div class="auxContainer">
                <h2 class="form-title"> Auxiliares </h2>
                <div class="service-container">

                    <div class="card" data-info="Imagenología">
                        <img src="../img/imagen.png" alt="Imagenologia">
                        <div class="card-body" card-info="Imagenologia">
                            <strong> Imagenología </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Laboratorio">
                        <img src="../img/laboratorio.png" alt="Laboratorio">
                        <div class="card-body" card-info="Laboratorio">
                            <strong> Laboratorio </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Farmacia">
                        <img src="../img/farmacia.png" alt="Farmacia">
                        <div class="card-body" card-info="Farmacia">
                            <strong> Farmacia </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Medicina Nuclear">
                        <img src="../img/MN.png" alt="Medicina Nuclear">
                        <div class="card-body" card-info="Medicina Nuclear">
                            <strong> Medicina Nuclear </strong>
                        </div>
                    </div>


                    <div class="card" data-info="Banco de Sangre">
                        <img src="../img/Banco_Sangre.png" alt="Banco Sangre">
                        <div class="card-body" card-info="Banco Sangre">
                            <strong> Banco de Sangre </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="receiveAbuse">
            <div class="questionContainer">
                <h2 class="form-title"> ¿Recibió algún tipo de maltrato por el personal? </h2>
                <div class="attention-container">

                    <br>
                        <div class="card" data-info="Si">
                            <img src="../img/muysatisfecho.png" alt="Si">
                            <div class="card-body" card-info="Si">
                                <strong> Si </strong>
                            </div>
                        </div>
                        <div class="card" data-info="No">
                            <img src="../img/muyinsatisfecho.png" alt="No">
                            <div class="card-body" card-info="No">
                                <strong> No </strong>
                            </div>
                        </div>
                    <br>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button"> Regresar </button>
            </div>
        </div>


        <div class="section" id="typeStaff">
            <div class="typeStaffContainer">
                <h2 class="form-title"> ¿De qué tipo de personal recibió maltrato? </h2>
                <div class="service-container">

                    <div class="card" data-info="Personal Médico">
                        <img src="../img/personalmedico.png" alt="Personal Medico">
                        <div class="card-body" card-info="Personal Medico">
                            <strong> Personal Médico </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Enfermería">
                        <img src="../img/enfermeria.png" alt="Personal Enfermeria">
                        <div class="card-body" card-info="Personal Enfermeria">
                            <strong> Personal de Enfermería </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Nutrición">
                        <img src="../img/Personal_Nutricion.png" alt="Personal Nutricion">
                        <div class="card-body" card-info="Personal Nutricion">
                            <strong> Personal de Nutrición </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Recepción">
                        <img src="../img/recepcion.png" alt=" Personal Recepcion ">
                        <div class="card-body" card-info=" Personal Recepcion ">
                            <strong> Personal de Recepción </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Trabajo Social">
                        <img src="../img/trabajosocial.png" alt="Personal TrabajoSocial">
                        <div class="card-body" card-info="Personal TrabajoSocial">
                            <strong> Personal de Trabajo Social </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Laboratorio">
                        <img src="../img/laboratorio1.png" alt="Personal Laboratorio">
                        <div class="card-body" card-info="Personal Laboratorio">
                            <strong> Personal de Laboratorio </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Imagen">
                        <img src="../img/personal_imagen1.png" alt="Personal Imagen">
                        <div class="card-body" card-info="Personal Imagen">
                            <strong> Personal de Imagen </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Vigilancia">
                        <img src="../img/personalvigielancia.png" alt="Personal Vigilancia">
                        <div class="card-body" card-info="Personal Vigilancia">
                            <strong> Personal de Vigilancia </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Kiosco">
                        <img src="../img/personal_kisoko.png" alt="Personal Kiosco">
                        <div class="card-body" card-info="Personal Kiosco">
                            <strong> Personal de Kiosco </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Limpieza">
                        <img src="../img/personal_limpieza.png" alt="Personal Limpieza">
                        <div class="card-body" card-info="Personal Limpieza">
                            <strong> Personal de Limpieza </strong>
                        </div>
                    </div>


                    <div class="card" data-info="Personal de Banco de Sangre">
                        <img src="../img/personal_banco_Sangre.png" alt="Personal BancoSangre">
                        <div class="card-body" card-info="Personal BancoSangre">
                            <strong> Personal de Banco de Sangre </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Quimioterapia">
                        <img src="../img/Personal_Quimioterapia.png" alt="Personal Quimioterapia">
                        <div class="card-body" card-info="Personal Quimioterapia">
                            <strong> Personal de Quimioterapia </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Radioterapia">
                        <img src="../img/Personal_Radioterapia.png" alt="Personal Radioterapia">
                        <div class="card-body" card-info="Personal Radioterapia">
                            <strong> Personal de Radioterapia </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Farmacia">
                        <img src="../img/Personal_Farmacia.png" alt="Personal Farmacia">
                        <div class="card-body" card-info="Personal Farmacia">
                            <strong> Personal de Farmacia </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal de Camilleria">
                        <img src="../img/Personal_camilleria.png" alt="Personal Camilleria">
                        <div class="card-body" card-info="Personal Camilleria">
                            <strong> Personal de Camilleria </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Personal Auxiliar">
                        <img src="../img/Personal_Auxiliar.png" alt="Personal Auxiliar">
                        <div class="card-body" card-info="Personal Auxiliar">
                            <strong> Personal Auxiliar </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button"> Regresar </button>
            </div>
        </div>


        <div class="section" id="treatmentFriendly">
            <div class="questionContainer">
                <h2 class="form-title"> ¿El trato que recibió del personal fue amable y respetuoso? </h2>
                <div class="attention-container">

                    <br>
                        <div class="card" data-info="Si">
                            <img src="../img/muysatisfecho.png" alt="Si">
                            <div class="card-body" card-info="Si">
                                <strong> Sí </strong>
                            </div>
                        </div>

                        <div class="card" data-info="No">
                            <img src="../img/muyinsatisfecho.png" alt="No">
                            <div class="card-body" card-info="No">
                                <strong> No </strong>
                            </div>
                        </div>
                    <br>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button"> Regresar </button>
            </div>
        </div>


        <div class="section" id="satisfactionMedicalCare">
            <div class="satisfactionContainer">
                <h2 class="form-title"> ¿Qué tan satisfecho quedo con la atención del Médico, (le brindo una atención amable y recibió información clara sobre su padecimiento)? </h2>
                <div class="attention-container">

                    <div class="card" data-info="Totalmente Satisfecho">
                        <img src="../img/totalmentesatisfecho.png" alt="Totalmente Satisfecho">
                        <div class="card-body" card-info="Totalmente Satisfecho">
                            <strong> Totalmente Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-info="Satisfecho">
                        <img src="../img/Satisfecho2.png" alt="Satisfecho">
                        <div class="card-body" card-info="Satisfecho">
                            <strong> Satisfecho </strong>
                        </div>
                    </div>
                    <div class="card" data-info="Nada Satisfecho">
                        <img src="../img/nada.png" alt="Nada Satisfecho">
                        <div class="card-body" card-info="Nada Satisfecho">
                            <strong> Nada Satisfecho </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBackAmbulatory()" class="back-button"> Regresar </button>
            </div>
        </div>


    
    </form>

</body>
</html>