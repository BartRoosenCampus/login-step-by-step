<h1 id="step-04"><a href="step-04/">Stap 4: Logout</a></h1>
<hr/>
<div class="section">
    <p>
        We kunnen ons aanmelden en de private pagina bekijken. Nu moeten we de optie inbouwen om ons te kunnen
        afmelden (logout). Op zich is dit geen hele grote aanpassing. We gaan het volgende gaan doen:
    </p>
    <ul>
        <li>
            <em>Presentation/privatePage.php</em> Hier voegen we een link toe naar logoutController.php
        </li>
        <li>
            <em>logoutController.php</em> Dit is een nieuw bestand dat we toevoegen. Dit bestand gaat het afmeldproces
            in goeie banen leiden.
        </li>
        <li>
            <em>Business/LoginService.php</em> Hier voegen we een functie toe aan de klasse die ervoor gaat zorgen dat
            de gebruiker zich kan afmelden. De login service zal hier voor de session service moeten aanspreken.
        </li>
        <li>
            <em>Business/SessionService.php</em> Vermits een User Object bewaard wordt in de session en bepaald of een
            gebruiker aangemeld is zullen we dit User Object moeten verwijderen uit de session. Hiervoor voegen we een
            functie toe die dit doet.
        </li>
    </ul>
    <p>
        De flow van dit process ziet er zo uit:
    </p>
    <div class="picture-container">
        <img src="img/step-04-flow.png"/>
    </div>
    <div>
        <a href="sourceController.php?step=4" target="_blank" class="btn btn-warning">code</a>
        <a href="step-04/" class="btn btn-warning">project</a>
    </div>
</div>