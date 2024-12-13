<?php
    include("../php/connection.php");
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
    <script src="../js/validations/sendData.js"></script>

</head>

<body data-area="hospitalaria">
    <header>
        <div class="header-container">
            <h1>Encuesta de Satisfacción Áreas Hospitalarias</h1>
            <div class="header-actions">
                <button class="login-btn"><i class="fas fa-sign-in-alt"></i></button>
            </div>
        </div>
    </header>

    <form id="formHospital" action="../index.php" method="POST">

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

                    <div class="card" data-info="Nocturno">
                        <img src="../img/Nocturno.png" alt="Nocturno">
                        <div class="card-body" card-info="Nocturno">
                            <strong>Nocturno</strong>
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
                            <strong>Masculino</strong>
                        </div>                       
                    </div>
                                
                    <div class="card" data-info="Femenino">
                        <img src="../img/mujer.png" alt="Femenino">
                        <div class="card-body" card-info="Femenino">
                            <strong>Femenino</strong>
                        </div>
                    </div>
                                        
                    <div class="card" data-info="Otro">
                        <img src="../img/otro.png" alt="Otro">
                        <div class="card-body" card-info="Otro">
                            <strong>Otro</strong>
                        </div>       
                    </div>

                </div>
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="ageUser">
            <div class="agesUserContainer">
                <h2 class="form-title"> Edad </h2>
                <div class="age-container">

                    <div class="card" data-info="Menor de 18 años">
                        <img src="../img/niño.png" alt="Menor de 18 años">
                        <div class="card-body" card-info="Menor de 18 años">
                            <strong>Igual o menor de 18 años</strong>
                        </div>
                    </div>

                    <div class="card" data-info="Entre 19 y 30 años">
                        <img src="../img/joven.png" alt="Entre 19 y 30 años">
                        <div class="card-body" card-info="Entre 19 y 30 años">
                            <strong>Entre 19 y 30 años</strong>
                        </div>
                    </div>
                    
                    <div class="card" data-info="Entre 31 y 49 años">
                        <img src="../img/adulto1.png" alt="Entre 31 y 49 años">
                        <div class="card-body" card-info="Entre 31 y 49 años">
                            <strong>Entre 31 y 49 años</strong>
                        </div>
                    </div>

                    <div class="card" data-info="Entre 50 y 65 años">
                        <img src="../img/viejito.png" alt="Entre 50 y 65 años">
                        <div class="card-body" card-info="Entre 50 y 65 años">
                            <strong>Entre 50 y 65 años</strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
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
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>

        <div class="section" id="floors">
            <div class="floorContainer">
                <h2 class="form-title"> Piso en el que fue atendido </h2>
                <div class="service-container">

                    <div class="card" data-info="Primer piso">
                        <img src="../img/PP.png" alt="Primer_Piso">
                        <div class="card-body" card-info="Primer_Piso">
                            <strong> Primer piso </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Segundo piso">
                        <img src="../img/SP.png" alt="Segundo_Piso">
                        <div class="card-body" card-info="Segundo_Piso">
                            <strong> Segundo piso </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Tercer piso">
                        <img src="../img/TP.png" alt="Tercer_Piso">
                        <div class="card-body" card-info="Tercer_Piso">
                            <strong> Tercer piso </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Cuarto piso">
                        <img src="../img/CP.png" alt="Cuarto_Piso">
                        <div class="card-body" card-info="Cuarto_Piso">
                            <strong> Cuarto piso </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Urgencias">
                        <img src="../img/Urgencias.png" alt="Urgencias">
                        <div class="card-body" card-info="Urgencias">
                            <strong> Urgencias </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>
        

        <div class="section" id="firstFloor_Service">
            <div class="firstFloor_Container">
                <h2 class="form-title"> Servicio de Primer Piso </h2>
                <div class="service-container">

                    <div class="card" data-info="Ginecología y Obstetricia">
                        <img src="../img/Ginecoobstetricia.png" alt="Ginecologia y Obstetricia">
                        <div class="card-body" card-info="Ginecologia y Obstetricia">
                            <strong> Ginecología y Obstetricia </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Hematología">
                        <img src="../img/Hematología.png" alt="Hematologia">
                        <div class="card-body" card-info="Hematologia">
                            <strong> Hematología </strong>
                        </div>
                    </div>
                            
                    <div class="card" data-info="Oncología">
                        <img src="../img/Oncología.png" alt="Oncologia">
                        <div class="card-body" card-info="Oncologia">
                            <strong> Oncología </strong>
                        </div>
                    </div>
                        
                    <div class="card" data-info="Cirugía Oncológica">
                        <img src="../img/Cirugía Oncologíca.png" alt="Cirugia_Oncologica">
                        <div class="card-body" card-info="Cirugia_Oncologica">
                            <strong> Cirugía Oncológica </strong>
                        </div>
                    </div>
                                                    
                    <div class="card" data-info="Hospitalización Pediatría">
                        <img src="../img/HP.png" alt="Hospitalización_Pediatria">
                        <div class="card-body" card-info="Hospitalización_Pediatria">
                            <strong> Hospitalización Pediatría </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Unidad de Cuidados Intensivos Neonatales">
                        <img src="../img/UCIN.png" alt="Unidad de Cuidados Intensivos Neonatales">
                        <div class="card-body" card-info="Unidad de Cuidados Intensivos Neonatales">
                            <strong> Unidad de Cuidados Intensivos Neonatales </strong>
                        </div>
                    </div>
                        
                    <div class="card" data-info="Unidad de Terapia Intermedia Neonatal">
                        <img src="../img/UTIN.png" alt="Unidad de Terapia Intermedia Neonatal">
                        <div class="card-body" card-info="UUnidad de Terapia Intermedia Neonatal">
                            <strong> Unidad de Terapia Intermedia Neonatal </strong>
                        </div>
                    </div>
                            
                    <div class="card" data-info="Unidad de Cuidados Intensivos Pediátrica">
                        <img src="../img/UTIP.png" alt="Unidad de Cuidados Intensivos Pediatrica">
                        <div class="card-body" card-info="Unidad de Cuidados Intermedios Pediatrica">
                            <strong> Unidad de Cuidados Intensivos Pediátrica </strong>
                        </div>
                    </div>
                        
                        
                    <div class="card" data-info="Unidad de Terapia Intermedia Pediátrica">
                        <img src="../img/UTIP.png" alt="Unidad de Terapia Intermedia Pediatrica">
                        <div class="card-body" card-info="Unidad de Terapia Intermedia Pediatrica">
                            <strong> Unidad de Terapia Intermedia Pediátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Lactario">
                        <img src="../img/Lactario.png" alt="Lactario">
                        <div class="card-body" card-info="Lactario">
                            <strong> Lactario </strong>
                        </div>
                    </div>
                        
                    <div class="card" data-info="Unidad de Trasplantes de Progenitores Hematopoyeticos">
                        <img src="../img/UTPH.png" alt="Unidad de Trasplantes de Progenitores Hematopoyeticos">
                        <div class="card-body" card-info="Unidad de Trasplantes de Progenitores Hematopoyeticos">
                            <strong> Unidad de Trasplantes de Progenitores Hematopoyeticos </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="secondFloor_Service">
            <div class="secondFloor_Container">
                <h2 class="form-title"> Servicio de Segundo Piso </h2>
                <div class="service-container">
                    
                    <div class="card" data-info="Cirugía General">
                        <img src="../img/Cirugia General.png" alt="Cirugia_General">
                        <div class="card-body" card-info="Cirugia_General">
                            <strong> Cirugía General </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Cirugía Cardiotorácica">
                        <img src="../img/Cirugía Cardiotorácica.png" alt="Cirugia_Cardiotoracica">
                        <div class="card-body" card-info="Cirugia_Cardiotoracica">
                            <strong> Cirugía Cardiotorácica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Cirugía Bariátrica">
                        <img src="../img/CB.png" alt="Bariatria">
                        <div class="card-body" card-info="Bariatria">
                            <strong> Cirugía Bariátrica </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Hemodinamia">
                        <img src="../img/Hemodinamia.png" alt="Hemodinamia">
                        <div class="card-body" card-info="Hemodinamia">
                            <strong> Hemodinamia </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Unidad de Terapia Intermedia Adultos">
                        <img src="../img/UTIA.png" alt="Unidad de Terapia Intermedia Adultos">
                        <div class="card-body" card-info="Unidad de Terapia Intermedia Adultos">
                            <strong> Unidad de Terapia Intermedia Adultos </strong>
                        </div>
                    </div>

                    <div class="card" data-info="Unidad de Cuidados Intensivos Adultos">
                        <img src="../img/UCIA.png" alt="Unidad de Cuidados Intensivos Adultos">
                        <div class="card-body" card-info="Unidad de Cuidados Intensivos Adultos">
                            <strong> Unidad de Cuidados Intensivos Adultos </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="thirdFloor_Service">
            <div class="thirdFloor_Container">
                <h2 class="form-title"> Servicio de Tercer Piso </h2>
                <div class="service-container">
                    
                    <div class="card" data-info="Traumatología y Ortopedia">
                        <img src="../img/Traumatología y Ortopedia.png" alt="Traumatologia y Ortopedia">
                        <div class="card-body" card-info="Traumatología y Ortopedia">
                            <strong> Traumatología y Ortopedia </strong>
                        </div>
                    </div>
                                
                    <div class="card" data-info="Neurocirugía">
                        <img src="../img/Neurocirugía.png" alt="Neurocirugia">
                        <div class="card-body" card-info="Neurocirugia">
                            <strong> Neurocirugía </strong>
                        </div>
                    </div>         

                                
                    <div class="card" data-info="Urología">
                        <img src="../img/Uro.png" alt="Urologia">
                        <div class="card-body" card-info="Urologia">
                            <strong> Urología </strong>
                        </div>
                    </div>         
                                
                    <div class="card" data-info="Trasplantes">
                        <img src="../img/Trasplante.png" alt="Trasplantes">
                        <div class="card-body" card-info="Trasplantes">
                            <strong> Trasplantes </strong>
                        </div>
                    </div> 
                    
                </div>
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>

        <div class="section" id="fourthFloor_Service">
            <div class="thirdFloor_Container">
                <h2 class="form-title"> Servicio de Cuarto Piso </h2>
                <div class="service-container">
                    
                    <div class="card" data-info="Medicina Interna">
                        <img src="../img/Medicina Interna.png" alt="Medicina Interna">
                        <div class="card-body" card-info="Medicina Interna">
                            <strong> Medicina Interna </strong>
                        </div>
                    </div>

                </div>
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
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
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
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
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
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
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
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
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="nurseExplication_care">
            <div class="nurseExplicationContainer">
                <h2 class="form-title"> ¿La explicación que la enfermera le brindó sobre los cuidados que llevara en casa, fue clara y precisa? </h2>
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
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="section" id="orientationContinuity">
            <div class="questionContainer">
                <h2 class="form-title"> ¿Recibió orientación por parte del personal sobre los tramites a realizar para la continuidad de su atención? </h2>
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
                <button type="button" onclick="goBack()" class="back-button">Regresar</button>
            </div>
        </div>


    </form>

</body>
</html>