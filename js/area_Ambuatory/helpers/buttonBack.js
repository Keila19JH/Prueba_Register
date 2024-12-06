
    function buttongoBackPreviousSection(){
        
        const hiddeSectionQuestion = document.getElementById( "DQReceiveAbuse" );
        hiddeSectionQuestion.style.display = "none";

        const previousClickId = hiddeSectionQuestion.getAttribute( "previousSectionData" );

        const witchSectionShow = previousClickId === "CirugiaAmbulatoria"
            ? "typeService"
            : previousClickId || "typeService";

        document.getElementById( witchSectionShow ).style.display = "block";
    }
