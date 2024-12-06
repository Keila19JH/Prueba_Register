<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuestas de Satisfacción</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
</head>

<body>

    <header>
        <div class="header-container">
            <h1>Inicio Encuesta de Satisfacción Áreas Ambulatorias y Hospitalarias</h1>
            <div class="header-actions">
                <button class="login-btn"><i class="fas fa-sign-in-alt"></i> </button>
            </div>
        </div>
    </header>

    <form id="typeArea" method="POST">

        <div id="containerMain" class="button-container">
            <button type="button" id="startButton" class="button-link">Iniciar Encuesta</button>
        </div>

        <div class="section1" id="section1" style="display: none;">
            <div class="gender">
                <h2 class="form-title"> Área </h2>
                <div class="gender-container">

                    <a href="pages/indexAmbulatory.php" class="card-link">
                        <div class="card">
                            <img src="img/Aten.Ambulatoria.png" alt="Ambulatoria">
                            <div class="card-body" card-info="Ambulatoria">
                                <strong>Ambulatoria</strong>
                            </div>
                        </div>
                    </a>

                    <a href="pages/indexHospital.php" class="card-link">
                        <div class="card">
                            <img src="img/Aten.Hospitalaria.png" alt="Hospitalaria">
                            <div class="card-body" card-info="Hospitalaria">
                                <strong>Hospitalaria</strong>
                            </div>
                        </div>
                    </a>
                </div>
                <button onclick="buttongoBackIndex()" class="back-button">Regresar</button>
            </div>
        </div>

        <script>
            document.getElementById( "startButton" ).addEventListener( "click", function(){
                document.getElementById( "containerMain" ).style.display = "none";
                document.getElementById( "section1" ).style.display      = "block";
            });
        </script>

        <script>
            document.addEventListener( "DOMContentLoaded", function(){
                
                const startButton = document.getElementById( "startButton" );
                const containerMain = document.getElementById( "containerMain" );
                const section1 = document.getElementById( "section1" );

                // Maneja el caso de hash en la URL
                if ( window.location.hash === "#section1" && section1 ) {
                    section1.style.display      = "block";      // Muestra section1
                    containerMain.style.display = "none";       // Oculta el contenedor principal
                    section1.scrollIntoView({ behavior: "smooth" });    // Desplaza hacia la sección 1
                }
        
                // Agrega el evento click al botón
                if ( startButton ) {
                    startButton.addEventListener( "click", function () {
                        containerMain.style.display = "none";
                        section1.style.display      = "block";
                    });
                }
            });
        </script>

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