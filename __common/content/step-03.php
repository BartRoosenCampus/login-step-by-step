<h1 id="step-03"><a href="step-03/">Stap 3: Private pagina('s) maken</a></h1>
<hr/>
<div class="section">
    <p>
        Nu gaan we private pagina('s) maken waarbij we ervoor moeten zorgen dat enkel aangemelde personen deze
        kunnen bekijken. De controle hiervoor gebeurt in de controller van de pagina.
    </p>
    <p>
        De flow voor dit gedeelte is eenvoudig. De controller kijkt of een user aangemeld is. Is dat zo dan wordt de
        private pagina getoond. In het andere geval zal de gebruiker naar het aanmeld form geleid worden. In een schema
        ziet het er zo uit:
    </p>
    <div class="picture-container">
        <img src="img/step-03-flow.png"/>
    </div>
    <p>
        Om te starten maken we deze files aan:
    </p>
    <ul>
        <li>
            <em>Presentation/privatePage.php</em> Dit wordt de pagina die een aangemelde gebruiker te zien gaat krijgen.
        </li>
        <li>
            <em>Business/SecurityService.php</em> Deze service moet ervoor zorgen dat de controle op het al dan niet
            aangemeld zijn van een gebruiker vlot en vooral correct verloopt.
        </li>
        <li>
            <em>privatePageController.php</em> Deze hadden we al bij stap 2 gemaakt, nu gaan we er ook code in voorzien
        </li>
    </ul>
    <p>
        Ondertussen ziet de structuur van ons project er als volgt uit:
    </p>
    <div class="picture-container">
        <img src="img/Stap-03-structuur.png"/>
    </div>
    <div>
        <a href="sourceController.php?step=3" target="_blank" class="btn btn-warning">code</a>
        <a href="step-03/" class="btn btn-warning">project</a>
    </div>
</div>