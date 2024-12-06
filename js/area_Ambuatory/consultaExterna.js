    
    
    document.addEventListener( "DOMContentLoaded", function () {
        const consultaExternaCard       = document.getElementById( "consultaExternaCard" );
        const typeService               = document.getElementById( "typeService" );
        const tipoConsultaExterna       = document.getElementById( "tipoConsultaExterna" );

        consultaExternaCard.addEventListener( "click", function () {
            typeService.style.display         = "none";
            tipoConsultaExterna.style.display = "block";
        });
    });