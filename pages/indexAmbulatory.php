<?php
    include( "../php/connection.php" )
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas Ambulatorias Encuesta de Satisfacción</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <link rel="stylesheet" href="../CSS/style.css"> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../js/area_Ambuatory/buttonBack.js"></script>

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

    <form id="formAmbulatory" method="POST">

        <div class="shift" id="shift">
            <div class="shiftsContainer">
                <h2 class="form-title"> Turno </h2>
                <div class="gender-container">

                    <div class="card" data-id="1" onclick="showEndSection()">
                        <img src="../img/Matutino.png" alt="Matutino">
                        <div class="card-body" card-info="Matutino">
                            <strong>Matutino</strong>
                        </div>
                    </div>

                    <div class="card" data-id="2" onclick="showEndSection()">
                        <img src="../img/Vespertino.png" alt="Vespertino">
                        <div class="card-body" card-info="Vespertino">
                            <strong>Vespertino</strong>
                            <input type="hidden" id="selectedShift" name="Vespertino">
                        </div>
                    </div>

                    <div class="card" data-id="3" onclick="showEndSection()">
                        <img src="../img/Fin.png" alt="Fin de semana">
                        <div class="card-body" card-info="Fin de semana">
                            <strong> Fin de semana </strong>
                        </div>
                    </div>

                </div>
                <a href="../index.php#section1">
                    <button type="button" class="back-button">Regresar</button>
                </a>
            </div>
        </div>

        <script>
            // Enviar el turno seleccionado al servidor
            function submitTurn(area, turno) {
                $.ajax({
                    url: "../php/register.php", // Ruta al archivo PHP
                    method: "POST",
                    data: { area: area, turno: turno },
                    dataType: "json",
                    success: function (response) {
                        if (response.status === "success") {
                            Swal.fire("¡Éxito!", response.message, "success");
                        } else {
                            Swal.fire("Error", response.message, "error");
                        }
                    },
                    error: function () {
                        Swal.fire("Error", "No se pudo enviar el turno.", "error");
                    }
                });
            }

            // Asignar a cada card un evento de clic para enviar datos
            document.querySelectorAll(".card").forEach((card) => {
                card.addEventListener("click", function () {
                    const turno = this.getAttribute("data-id"); // ID del turno
                    const area = document.body.getAttribute("data-area"); // Área (hospitalaria o ambulatoria)
                    submitTurn(area, turno);
                });
            });
        </script>

    
        <div  class="feedbackSection" id="feedbackSection" style="text-align: center; margin-top: 20px;">
            <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 40px;">
                Gracias por tomarse el tiempo para compartir sus opiniones.
            </p>
            <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 40px;">
                Su retroalimentación es muy valioso para nosotros y nos ayuda a mejorar continuamente.
            </p>
            <p style="font-size: 30px; color: #44192B; font-family: 'Cooper Black', sans-serif; margin-bottom: 60px;">
                ¡Hasta la próxima!
            </p>
            <a id="endSurveySatisfaction" class="button-link" href="../index.php">Terminar Encuesta</a>
        </div>
    
    </form>


    <footer>
        <div class="footer-content">
            <p>Hospital Regional de Alta Especialidad de Ixtapaluca</p>
            <p>Gestión Digital en Salud - 2024</p>
        </div>
    </footer>


    <div id="loading-overlay" style="display: none;" class="loading">
        <svg width="128px" height="96px">
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="back"></polyline>
            <polyline points="0.157 47.907, 28 47.907, 43.686 96, 86 0, 100 48, 128 48" id="front"></polyline>
        </svg>
    </div>
 
</body>
</html>