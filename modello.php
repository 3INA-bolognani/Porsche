<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <?php require_once "components/navbar.php" ?>
<main>
    <div class="left-homePage">
        <h6 class="porsche-configurator">P O R S C H E | C O N F I G U R A T O R</h6>
        <h1 class="progetta">Progetta la tua</h1>
        <h1 class="porsche">Porsche.</h1>
        <h5 class="scritte-index">Scegli il modello, personalizza ogni dettaglio —
            dalla carrozzeria agli interni — e visualizza la
            tua creazione in tempo reale.
        </h5>
        <button class="btn-homepage" onclick="window.location.href='modello.php';">SCEGLI IL MODELLO</button>
        <button class="btn-homepage" onclick="window.location.href='storia.php';">STORIA PORSCHE</button>
    </div>
    <div class="pop-up hidden">
    </div>
</main>
  <div class="catalogo-modelli">
    <h6 class="gamma-completa">G A M M A C O M P L E T A</h6>
    <h1 class="catalogo-scritte">Catalogo Modelli</h1>
  </div>
  <div class="bottoni-modelli">
    <hr>
    <button class="bottoni">TUTTI</button>
    <button class="bottoni">BERLINA</button>
    <button class="bottoni">SUV</button>
    <button class="bottoni">SPORT</button>
    <button class="bottoni">ELETTRICA</button>
    <hr>
  </div>
  <div class="grid-macchine">
    <div class="div-macchine">
      <div class="div-macchine-img">
        <div class="div-macchine-scritta">Taycan</div>
        <div class="tipo-macchina">ELETTRICA</div>
      </div>
      <div class="info-macchine">
        <div class="modello-macchina">Taycan</div>
        <div class="nome-macchina">Taycan Turbo</div>
        <div class="specifiche">
          <div class="specifiche">
            <div class="valori-macchina">761</div>
            <div class="spec-macchina">CV</div>
          </div>
          <div class="specifiche">
            <div class="valori-macchina">0-100 km/h</div>
            <div class="spec-macchina">0-100 km/h</div>
          </div>
          <div class="specifiche">
            <div class="valori-macchina">560</div>
            <div class="spec-macchina">kW</div>
          </div>
          <div class="specifiche">
            <div class="valori-macchina">260</div>
            <div class="spec-macchina">km/h Max</div>
          </div>
          <div class="specifiche">
            <div class="valori-macchina">Elettrica</div>
            <div class="spec-macchina">Alimentaz.</div>
          </div>
          <div class="specifiche">
            <div class="valori-macchina">2024</div>
            <div class="spec-macchina">Anno</div>
          </div>
          <div class="footer-carta">
            <div>
              <div class="prezzo-macchina">€189.800</div>
              <div class="iva">IVA inclusa</div>
            </div>
            <button class="btn-macchina">Configura →</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>