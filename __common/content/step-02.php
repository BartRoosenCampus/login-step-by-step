<h1 id="step-02"><a href="step-02/">Stap 2: Aanmelden</a></h1>
<hr/>
<div class="section">
    <p>
        Dit is de grootste stap die we gaan zetten want er moet heel wat gebeuren. Dit is de flow die we gaan maken:
    </p>
    <div class="picture-container">
        <img src="img/step-2-flow.png"/>
    </div>
    <p>
        Zoals je kan zien houden we het simpel, we gaan (nog) geen notificaties tonen wanneer het aanmelden niet zou
        lukken.
    </p>
    <p>
        Ons project gaat groeien, we gaan heel wat bestanden bijmaken. Een overzicht per laag:
    </p>
    <ul>
        <li>Business</li>
        <ul>
            <li><em>LoginService.php</em>: deze zal ervoor zorgen dat de gebruiker aangemeld wordt</li>
            <ul>
                <li>De datalaag aanspreken om de gebruiker op te zoeken in de database</li>
                <li>Indien nodig de SessionService aanspreken om het User Object in de session op te slaan</li>
            </ul>
            <li>
                <em>SessionService.php</em>: Deze service houdt zich enkel bezig met de session en zal indien nodig een User
                Object opslaan in de session
            </li>
        </ul>
        <li>Data</li>
        <ul>
            <li><em>AbstractDataHandler.php</em>: deze klasse zorgt voor de connectie met de database</li>
            <li>
                <em>UserDAO.php</em>: deze klasse zal de tabel gebruikers aanspreken (SQL) om de gevraagde gebruiker op
                te zoeken
            </li>
        </ul>
        <li>Entities</li>
        <ul>
            <li><em>User.php</em>: om User Objecten te kunnen maken</li>
        </ul>
        <li>Root</li>
        <ul>
            <li>
                <em>loginProcess.php</em>: deze hadden we al gemaakt, nu voorzien we dit bestand van code die de hele
                flow zal sturen
            </li>
            <li>
                <em>privatePageController.php</em>: voorlopig nog leeg, maar deze controller zal later de private pagina
                ophalen en tonen
            </li>
        </ul>
    </ul>
    <p>
        De folderstructuur van ons project ziet er nu zo uit:
    </p>
    <div class="picture-container">
        <img src="img/Stap-02-structuur.png"/>
    </div>
    <div>
        <a href="sourceController.php?step=2" target="_blank" class="btn btn-warning">code</a>
        <a href="step-02/" class="btn btn-warning">project</a>
    </div>
</div>