<?php
// index.php
declare(strict_types = 1);

// "landingspage" met 1 taak om de gebruiker naar de private pagina te leiden
// wanneer de user niet is aangemeld zal hij/zij naar de aanmeld pagina geleid worden
header('location: privatePageController.php');
