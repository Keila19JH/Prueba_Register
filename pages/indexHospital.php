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
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script src="../js/area_Ambuatory/buttonBack.js"></script>
    
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

        <div class="shift" id="shift">
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


        <div class="gender" id="gender">
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
                <button type="button" onclick="buttongoBackShift()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="ageUser" id="ageUser">
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
                <button type="button" onclick="buttongoBackGender()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="satisfaction_attention" id="satisfaction_attention">
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
                <button type="button" onclick="buttongoBackAge()" class="back-button">Regresar</button>
            </div>
        </div>


        <div class="feedbackSection" id="feedbackSection" style="text-align: center; margin-top: 20px;">
            <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 40px;">
                Gracias por tomarse el tiempo para compartir sus opiniones.
            </p>
            <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 40px;">
                Su retroalimentación es muy valiosa para nosotros y nos ayuda a mejorar continuamente.
            </p>
            <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 60px;">
                ¡Hasta la próxima!
            </p>
            <a type="submit" id="endSurveySatisfaction" class="button-link" href="../index.php">Terminar Encuesta</a>
        </div>
    </form>

</body>
</html>