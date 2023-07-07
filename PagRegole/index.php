<?php
        include "/xampp/htdocs/FantaCrash/PagAdmin/DB_Address.php";
        //include "/xampp/htdocs/Project_pHp/FantaCrash/adminPage/DB_Address.php";

        include "/xampp/htdocs/FantaCrash/pagine.php";
        //include "/xampp/htdocs/Project_pHp/FantaCrash/pagine.php";

        if( !isset($_SESSION["online"]) || $_SESSION["online"] == false){
                AccessPage();
            }

            $Profile = $_SESSION["nome"];
            $Profile_IMG = $_SESSION["user_IMG"];
            $Profile_LG = $_SESSION["user_LG"];

            $orario = date('Y-m-d H:i:s');
            $indirizzo = $_SERVER['REMOTE_ADDR'];
            $_SESSION['error']=insertdataLOG($_SESSION["nome"], $_SESSION["pass"], $orario, $indirizzo, $_SERVER["HTTP_USER_AGENT"]);
    

            if(isset($_SESSION['error']))
            {
                echo('<h2>'.$_SESSION['error'].'</h2>');
            }
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Regole FantaCrash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="CssCode.css">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
    <link rel="icon" href="/FantaCrash/PagRegole/img/Loghi/Nanoso_Limited.png">
</head>
<body>

    <video autoplay muted loop id="myVideo">
        <source src="img/KenBlock.mp4" type="video/mp4">
    </video>

    <div class="row mx-2 vh-100">
        <div class="col-8 vh-100 d-flex justify-content-center align-items-center" style="z-index: 999;">
            <div class="container text-center border border-white text-white rounded bg-black">
                <marquee scrollamount="15" scrolldelay="60" class="my-5"> 
                    <h3 >
                        Regole FantaCrash
                        <img src="img/Titolo/Grandi.jpg" alt="Ipposbirro" class="p-2" style="height: 100px; width: 150px;">
                        Regole FantaCrash
                        <img src="img/Titolo/Danilpolizia.png" alt="Ipposbirro" class="p-2" style="height: 100px; width: 150px;">
                        Regole FantaCrash
                        <img src="img/Titolo/Balle.jpg" alt="Ipposbirro" class="p-2" style="height: 100px; width: 150px;">
                        Regole FantaCrash
                        <img src="img/Titolo/fede.jpg" alt="Ipposbirro" class="p-2" style="height: 100px; width: 150px;">
                        Regole FantaCrash
                        <img src="img/Titolo/pozzi.jpg" alt="Ipposbirro" class="p-2" style="height: 100px; width: 150px;">
                        Regole FantaCrash
                        <img src="img/Titolo/Santo.jpg" alt="Ipposbirro" class="p-2" style="height: 100px; width: 150px;">
                        Regole FantaCrash
                        <img src="img/Titolo/Santa.jpg" alt="Ipposbirro" class="p-2" style="height: 100px; width: 150px;">
                        Regole FantaCrash
                        <img src="img/Titolo/Appo.jpg" alt="Ipposbirro" class="p-2" style="height: 100px; width: 150px;">

                    </h3>
                </marquee>
                
                <div class="container my-5">
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <h3 class="text-uppercase ">Regola N^1</h3>
                                </li>
                                <li class="mb-5">
                                    <p class="fs-4 fw-light" data-bs-toggle="tooltip" data-bs-title="-LA PARTECIPAZIONE ALLA GARA RICHIEDE UN VERSAMENTO DI 2€ PER OGNI GIOCATORE SI PREGA DI FARE RIFERIMENTO AI CASI SOTTOSTANTI PER EVENTUALI MODIFICHE ALL'IMPIMPORTO DEL VERSAMENTO.
                                    &nbsp; -Se il versamento viene effettuato con un ritardo superiore a tre giorni dall'inizio della gara, il partecipante dovrà versare una sommma di 10 centesimi aggiuntivi per ogni giorno di ritardo. Questi importi verrano aggiunti al montepremi della gara.
                                    &nbsp; -Se un partecipante propone un cambiamento dell'importo di partecipazione durante la prima settimana (+ di 2€), si terrà una votazione con tutti gli altri partecipanti. Nel caso in cui la votazione finisca all'unanimità con un 'si', tutti i giocatori saranno tenuti ad aggiungere la somma mancante
                                    &nbsp; -Se un giocatore desidera partecipare quando la gara è già in corso, dovrà versare un importo aggiuntivo di 50 centesimi insieme ai 2€ richiesti a tutti i giocatori. Questi 50 centesimi verranno aggiunti al montepremi della gara per consentire la registrazione al sito e quindi la partecipazione effettiva.
                                    &nbsp; -Se un giocatore decide di ritirarsi prima dell'inizio della gara e ha già versato i 2€, l'intera somma verrà rimborsata. Tuttavia, se la gara è già iniziata da almeno 3 giorni, il giocatore che intende ritirarsi riceverà un rimborso di -50 centesimi, che verranno trattenuti dall'amministratore del gioco per eliminare l'accesso del giocatore al sistema."  
                                    data-bs-placement="right">PARTECIPAZIONE DEL FANTACRASH</p>
                                </li>
                                <li class="mt-5">
                                    <h3 class="text-uppercase mt-4">Regola N^3</h3>
                                </li>
                                <li class="mb-5">
                                    <p class="fs-4 fw-light" data-bs-toggle="tooltip" data-bs-title="-OGNI INCIDENTE DEVE ESSERE RIPORTATO, SE POSSIBILE, CON UNA FOTO E UNA DESCRIZIONE OBBLIGATORIA.
                                    &nbsp; -BARO | Nel caso in cui la prima regola venga infranta e non venga segnalato un incidente, se uno dei giocatori lo rileva, verrà effettuata un'indagine sull'accaduto. Se l'accertamento conferma l'omissione, il 'Baro' sarà obbligato a versare 1€ al giorno, fino a un massimo di 15€, come aggiunta al montepremi della gara e sarà soggetto alla squalificazione.
                                    &nbsp; a) Se il 'Baro' non fornisce una data e i partecipanti non sono in grado di determinare il giorno dell'incidente, il versamento sarà pari alla metà dell'importo massimo, cioè 7,50€
                                    &nbsp; -Se un giocatore squalificato decide di rientrare nella gara, ha tempo una settimana dalla squalificazione per versare una penale di 5€. Al momento del pagamento, il giocatore avrà nuovamente accesso alla gara e al sito.
                                    &nbsp; -Gli incidenti validi per il gioco sono quelli che causano danni materiali o personali significativi.
                                    &nbsp; b) Incidente stradale: Qualisiasi incidente che si verifichi per strada, coinvolgendo uno o più veicoli e causando danni significativi.
                                    &nbsp; c) Incidente domestico: Se un partecipante subisce un incidente in casa, ad esempio una caduta che provoca lesioni gravi come: frattura ossea, lesione della pelle, abrasione o scottatura.
                                    &nbsp; d) Incidente su suolo scolastico: Se un partecipante subisce un incidente durante l'orario scolastico, causando danni materiali o lesioni" 
                                    data-bs-placement="right">VALIDAZIONE INCIDENTI</p>
                                </li>
                                <li class="mt-5">
                                    <h3 class="text-uppercase mt-4">Regola N^5</h3>
                                </li>
                                <li>
                                    <p class="fs-4 fw-light" data-bs-toggle="tooltip" data-bs-title="-IL VINCITORE È DECRETATO DAL PUNTEGGIO RAGGIUNTO DURANTE LA FASE DELLA GARA
                                    &nbsp; a) Il vincitore riceverà il 45% del montepremi. La divisione del montepremi avverrà in incrementi di 0,5 centesimi.
                                    &nbsp; b) Il restatnte 50% del montepremi verrà ripartito come segue: Il 10% andrà agli sviluppatori del sistema come compenso per la creazione e la gestione del gioco. Il 40% sarà assegnato alla persona che ha scommesso sul partecipante che ha subito o causato il maggior numero di incidenti.
                                    &nbsp; -Alla fine della gara, il giocatore che ha effettuato il maggior numero di incidenti riceverà un risarcimento pari al 15% del montepremi." data-bs-placement="right">SELEZIONE DEL VINCITORE</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <h3 class="text-uppercase">Regola N^2</h3>
                                </li>
                                <li class="mb-5">
                                    <p class="fs-4 fw-light" data-bs-toggle="tooltip" data-bs-title="-LA GARA DEL FANTACRASH TERMINERÀ IL PRIMO GIORNO DEL SECONDO QUADRIMESTRE.
                                    &nbsp; -Nel caso in cui ci sia un ritiro di giocatori che riduce il numero di partecipanti a 4, la gara verrà annullata e il montepremi verrà ripartito equamente tra i 4 giocatori rimanenti
                                    &nbsp; -Qualora si verifichi un incidente con gravi conseguenze per l'incidentato, la gara verrà annullata e l'intero montepremi verrà donato all'incidentato"
                                    data-bs-placement="left">DURATA DEL FANTACRASH</p>
                                </li>
                                <li class="mt-5">
                                    <h3 class="text-uppercase mt-4">Regola N^4</h3>
                                </li>
                                <li class="mb-5">
                                    <p class="fs-4 fw-light" data-bs-toggle="tooltip" data-bs-title="-IL FANTACRASH È REGOLATO DA UN SISTEMA DI PUNTEGGI CHE TIENE CONTO DELLA GRAVITÀ DEGLI INCIDENTI. DI SEGUITO SONO ELENCATE LE TRE SOTTOCATEGORIE DI INCIDENTI E I RELATIVI PUNTEGGI
                                    &nbsp; a) Incidente lieve: Un incidente senza conseguenze gravi o danni significativi. Punteggio: 1 punto.
                                    &nbsp; b) Incidente moderato: Un incidente che causa danni materiali leggeri o lesioni minori. Punteggio: 3 punti.
                                    &nbsp; c) Incidente grave: Un incidente che provoca danni materiali relevati o lesioni più serie. Punteggio: 5 punti.
                                    &nbsp; -Si fa eccezione nel caso in cui il veicolo o i veicoli coinvolti non abbiano riportato danni significativi, ad esempio quando si verifica un solo tocco che sposta la carrozzeria ma non provoca danni visibili. In questo caso, l'incidente non viene considerato valido e non viene assegnato alcun punteggio.
                                    &nbsp; -Nel caso in cui la gravità di un incidnete sia incerta, cioè sia difficile stabilire se rientri nelle categorie valide, si può effettuare una votazione per determinare la gravità e assegnare i punti corrispondenti.
                                    &nbsp; -Inoltre, nel caso in cui un partecipante, chiamato 'Baro', sia in testa alla classifica, subirà una penalità di 40 punti. Se il 'Baro' non è in testa alla classifica, la penalità sarà di 25 punti. Questa penalità potrebbe anche comportare il pagamento da parte del 'Baro' (Consultare l'Art.3 Par.2 per ulteriori informazioni)." data-bs-placement="left">CRITERI DI VALUTAZIONE E PUNTEGGI</p>
                                </li>
                                <li class="mt-5">
                                    <h3 class="text-uppercase mt-4">Regola N^6</h3>
                                </li>
                                <li>
                                    <p class="fs-4 fw-light" data-bs-toggle="tooltip" data-bs-title="-OGNI PARTECIPANTE È RESPONSABILE DELLE PROPRIE AZIONI E DEVE RISPETTARE LE LEGGI E LE NORME DI SICUREZZA IN VIGORE
                                    &nbsp; -È strettamente vietato sabotare i mezzi altrui con l'intento di causare incidenti o danni. Il sabotaggio include qualsiasi azione deliberata voolta a danneggiare o mettere in pericolo i veicoli o gli oggetti di altri partecipanti.
                                    &nbsp; a) Manomissione dei freni: Alterare intenzionalemente il sistema dei freni di un veicolo per renderlo meno efficace o inutilizzabile
                                    &nbsp; b) Sabotaggio del motore: Danneggiare volontariamente il motore di un veicolo per impedire il suo corretto funzionamento.
                                    &nbsp; c) Tagliare i cavi dell'impianto elettrico: Interferire con il sistema elettrico di un veicolo, danneggiando o disabilitando i cavi elettrici
                                    &nbsp; d) Sgonfiaggio pneumatici: Risurre deliberatamente la pressione degli pneumatici o forare i pneumatici altrui per compromettere la sicurezza e la manovrabilita.
                                    &nbsp; e) Manipolazione dei sistemi di sicurezza: Disattivare o compromettere intenzionalemente i sistemi di sicurezza di un veicolo, come gli airbag o i sistemi di controllo della stabilità." data-bs-placement="left">RESPONSABILITÀ PERSONALE E DIVIETO DI SABOTAGGIO</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container my-5 pt-5">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-1">
                            <button onclick="window.location.href='http://gdp.kozow.com/FantaCrash/'" class="btn btn-danger btn-lg m-0 p-1" style="--bs-btn-border-width: 10px"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/> <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/> </svg> </button>
                        </div>
                        <div class="col-1">
                            <button onclick="window.location.href='../PagRank'" class="btn btn-danger btn-lg m-0 p-0" style="--bs-btn-border-width: 10px"> <img src="img/Loghi/Rank.png" style="height: 35px; width: 35px;" class="m-1 p-0"> </button>
                        </div>
                        <div class="col-1">
                            <button onclick="window.location.href='https://drive.google.com/drive/folders/1PR0toumr1sZqlcHb5U67hDbi7NEa8y_-?usp=sharing'" class="btn btn-danger btn-lg m-0 p-1" style="--bs-btn-border-width: 10px"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-arrow-down" viewBox="0 0 16 16"> <path d="M8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z"/> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> </svg> </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-4 vh-100 d-flex justify-content-center align-items-center flex-column" style="z-index: 999;">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-8" >
                        <div class="container border border-white rounded text-white d-flex justify-content-center align-items-center bg-danger">
                            <img src="<?php echo $Profile_IMG; ?>" alt="user" style="height: 75px; width: 75px; border-radius: 50%;">
                            <h3 class="text-truncate me-auto ms-3"><?php echo $Profile?></h3>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-start align-items-center">
                        <div class="border border-white rounded text-white bg-danger" >
                        <img src="<?php echo $Profile_LG; ?>" alt="Logo_F" style="height: 75px; width: 75px; border-radius: 50%;">
                        </div>
                    </div>
                </div>
                <embed type="text/html" src="Card.php" width="100%" height="700px" class="border border-white text-dark rounded m-0 p-0 align-self-end bg-danger">
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>