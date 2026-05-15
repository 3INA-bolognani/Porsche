<?php
require_once "components/session.php";
require_once "db/functions.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Porsche - Modelli</title>
  <link rel="stylesheet" href="assets/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
  <?php require_once "index.php" ?>


  <div class="catalogo-modelli">
    <h6 class="gamma-completa">G A M M A C O M P L E T A</h6>
    <h1 class="catalogo-scritte">Catalogo Modelli</h1>
  </div>
  <div class="bottoni-modelli">
    <hr>
    <button class="bottoni" filtri="tutti">TUTTI</button>
    <button class="bottoni" filtri="berlina">BERLINA</button>
    <button class="bottoni" filtri="suv">SUV</button>
    <button class="bottoni" filtri="sport">SPORT</button>
    <button class="bottoni" filtri="elettrica">ELETTRICA</button>
    <hr>
  </div>
  <div class="grid-macchine">

  <div class="grid-macchine">

<!--1-->
<div class="div-macchine" categoria="elettrica">
    <div class="div-macchine-img">
        <div class="tipo-macchina">ELETTRICA</div>
    </div>

    <div class="info-macchine">
        <div class="modello-macchina">TAYCAN</div>
        <div class="nome-macchina">Taycan Turbo</div>

        <div class="specifiche">
            <div class="specifica">
                <div class="valori-macchina">761</div>
                <div class="spec-macchina">CV</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">2.8s</div>
                <div class="spec-macchina">0-100 km/h</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">560</div>
                <div class="spec-macchina">kW</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">260</div>
                <div class="spec-macchina">km/h Max</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">Elettrica</div>
                <div class="spec-macchina">Alimentaz.</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">2024</div>
                <div class="spec-macchina">Anno</div>
            </div>
        </div>
    </div>

    <div class="footer-carta">
        <div>
            <div class="prezzo-macchina">€189.800</div>
            <div class="iva">IVA inclusa</div>
        </div>
        <a href="macchine/taycan.php" class="btn-macchina">Configura →</a>
    </div>
</div>

<!--2-->
<div class="div-macchine" categoria="sport">
    <div class="div-macchine-img2">
        <div class="tipo-macchina">SPORT</div>
    </div>

    <div class="info-macchine">
        <div class="modello-macchina">911</div>
        <div class="nome-macchina">911 Carrera GTS</div>

        <div class="specifiche">
            <div class="specifica">
                <div class="valori-macchina">541</div>
                <div class="spec-macchina">CV</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">3.0s</div>
                <div class="spec-macchina">0-100 km/h</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">398</div>
                <div class="spec-macchina">kW</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">312</div>
                <div class="spec-macchina">km/h Max</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">Benzina</div>
                <div class="spec-macchina">Alimentaz.</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">2024</div>
                <div class="spec-macchina">Anno</div>
            </div>
        </div>
    </div>

    <div class="footer-carta">
        <div>
            <div class="prezzo-macchina">€174.500</div>
            <div class="iva">IVA inclusa</div>
        </div>

        <a href="macchine/carrera.php" class="btn-macchina">Configura →</a>
    </div>
</div>

<!--3-->
<div class="div-macchine" categoria="suv">
    <div class="div-macchine-img3">
        <div class="tipo-macchina">SUV</div>
    </div>

    <div class="info-macchine">
        <div class="modello-macchina">CAYENNE</div>
        <div class="nome-macchina">Cayenne Turbo GT</div>

        <div class="specifiche">
            <div class="specifica">
                <div class="valori-macchina">659</div>
                <div class="spec-macchina">CV</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">3.3s</div>
                <div class="spec-macchina">0-100 km/h</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">485</div>
                <div class="spec-macchina">kW</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">305</div>
                <div class="spec-macchina">km/h Max</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">Benzina</div>
                <div class="spec-macchina">Alimentaz.</div>
            </div>

            <div class="specifica">
                <div class="valori-macchina">2024</div>
                <div class="spec-macchina">Anno</div>
            </div>
        </div>
    </div>

    <div class="footer-carta">
        <div>
            <div class="prezzo-macchina">€221.000</div>
            <div class="iva">IVA inclusa</div>
        </div>

        <a href="macchine/cayenne.php" class="btn-macchina">Configura →</a>
    </div>
</div>

<!--4-->
<div class="div-macchine" categoria="suv">
    <div class="div-macchine-img4">
        <div class="tipo-macchina">SUV</div>
    </div>

    <div class="info-macchine">
        <div class="modello-macchina">MACAN</div>
        <div class="nome-macchina">Macan GTS</div>

        <div class="specifiche">
            <div class="specifica"><div class="valori-macchina">440</div><div class="spec-macchina">CV</div></div>
            <div class="specifica"><div class="valori-macchina">4.3s</div><div class="spec-macchina">0-100 km/h</div></div>
            <div class="specifica"><div class="valori-macchina">324</div><div class="spec-macchina">kW</div></div>
            <div class="specifica"><div class="valori-macchina">272</div><div class="spec-macchina">km/h Max</div></div>
            <div class="specifica"><div class="valori-macchina">Benzina</div><div class="spec-macchina">Alimentaz.</div></div>
            <div class="specifica"><div class="valori-macchina">2024</div><div class="spec-macchina">Anno</div></div>
        </div>
    </div>

    <div class="footer-carta">
        <div>
            <div class="prezzo-macchina">€102.000</div>
            <div class="iva">IVA inclusa</div>
        </div>

        <a href="macchine/macan.php" class="btn-macchina">Configura →</a>
    </div>
</div>

<!--5-->
<div class="div-macchine" categoria="berlina">
    <div class="div-macchine-img5">
        <div class="tipo-macchina">BERLINA</div>
    </div>

    <div class="info-macchine">
        <div class="modello-macchina">PANAMERA</div>
        <div class="nome-macchina">Panamera Turbo S</div>

        <div class="specifiche">
            <div class="specifica"><div class="valori-macchina">700</div><div class="spec-macchina">CV</div></div>
            <div class="specifica"><div class="valori-macchina">3.2s</div><div class="spec-macchina">0-100 km/h</div></div>
            <div class="specifica"><div class="valori-macchina">515</div><div class="spec-macchina">kW</div></div>
            <div class="specifica"><div class="valori-macchina">315</div><div class="spec-macchina">km/h Max</div></div>
            <div class="specifica"><div class="valori-macchina">Hybrid</div><div class="spec-macchina">Alimentaz.</div></div>
            <div class="specifica"><div class="valori-macchina">2024</div><div class="spec-macchina">Anno</div></div>
        </div>
    </div>

    <div class="footer-carta">
        <div>
            <div class="prezzo-macchina">€205.900</div>
            <div class="iva">IVA inclusa</div>
        </div>

        <a href="macchine/panamera.php" class="btn-macchina">Configura →</a>
    </div>
</div>

<!--6-->
<div class="div-macchine" categoria="sport">
    <div class="div-macchine-img6">
        <div class="tipo-macchina">SPORT</div>
    </div>

    <div class="info-macchine">
        <div class="modello-macchina">718</div>
        <div class="nome-macchina">718 Cayman GT4</div>

        <div class="specifiche">
            <div class="specifica"><div class="valori-macchina">500</div><div class="spec-macchina">CV</div></div>
            <div class="specifica"><div class="valori-macchina">3.4s</div><div class="spec-macchina">0-100 km/h</div></div>
            <div class="specifica"><div class="valori-macchina">368</div><div class="spec-macchina">kW</div></div>
            <div class="specifica"><div class="valori-macchina">315</div><div class="spec-macchina">km/h Max</div></div>
            <div class="specifica"><div class="valori-macchina">Benzina</div><div class="spec-macchina">Alimentaz.</div></div>
            <div class="specifica"><div class="valori-macchina">2024</div><div class="spec-macchina">Anno</div></div>
        </div>
    </div>

    <div class="footer-carta">
        <div>
            <div class="prezzo-macchina">€145.000</div>
            <div class="iva">IVA inclusa</div>
        </div>

        <a href="macchine/cayman.php" class="btn-macchina">Configura →</a>
    </div>
</div>

<!--7-->
<div class="div-macchine" categoria="hybrid">
    <div class="div-macchine-img7">
        <div class="tipo-macchina">HYBRID</div>
    </div>

    <div class="info-macchine">
        <div class="modello-macchina">918</div>
        <div class="nome-macchina">918 Spyder</div>

        <div class="specifiche">
            <div class="specifica"><div class="valori-macchina">887</div><div class="spec-macchina">CV</div></div>
            <div class="specifica"><div class="valori-macchina">2.6s</div><div class="spec-macchina">0-100 km/h</div></div>
            <div class="specifica"><div class="valori-macchina">652</div><div class="spec-macchina">kW</div></div>
            <div class="specifica"><div class="valori-macchina">345</div><div class="spec-macchina">km/h Max</div></div>
            <div class="specifica"><div class="valori-macchina">Hybrid</div><div class="spec-macchina">Alimentaz.</div></div>
            <div class="specifica"><div class="valori-macchina">2024</div><div class="spec-macchina">Anno</div></div>
        </div>
    </div>

    <div class="footer-carta">
        <div>
            <div class="prezzo-macchina">€950.000</div>
            <div class="iva">IVA inclusa</div>
        </div>

        <a href="macchine/spyder.php" class="btn-macchina">Configura →</a>
    </div>
</div>

<!--8-->
<div class="div-macchine" categoria="elettrica">
    <div class="div-macchine-img8">
        <div class="tipo-macchina">CONCEPT</div>
    </div>

    <div class="info-macchine">
        <div class="modello-macchina">MISSION X</div>
        <div class="nome-macchina">Mission X Hypercar</div>

        <div class="specifiche">
            <div class="specifica"><div class="valori-macchina">1000+</div><div class="spec-macchina">CV</div></div>
            <div class="specifica"><div class="valori-macchina">2.0s</div><div class="spec-macchina">0-100 km/h</div></div>
            <div class="specifica"><div class="valori-macchina">735</div><div class="spec-macchina">kW</div></div>
            <div class="specifica"><div class="valori-macchina">350</div><div class="spec-macchina">km/h Max</div></div>
            <div class="specifica"><div class="valori-macchina">Elettrica</div><div class="spec-macchina">Alimentaz.</div></div>
            <div class="specifica"><div class="valori-macchina">2025</div><div class="spec-macchina">Anno</div></div>
        </div>
    </div>

    <div class="footer-carta">
        <div>
            <div class="prezzo-macchina">€2.000.000</div>
            <div class="iva">IVA inclusa</div>
        </div>

        <a href="macchine/mission.php" class="btn-macchina">Configura →</a>
    </div>
</div>

</div>

</div>

<script>
const buttons = document.querySelectorAll(".bottoni");
const cards = document.querySelectorAll(".div-macchine");

buttons.forEach(button => {

    button.addEventListener("click", () => {

        const filter = button.getAttribute("filtri");

        cards.forEach(card => {

            const category = card.getAttribute("categoria");

            if (filter === "tutti") {
                card.style.display = "flex";
            } 
            else if (category === filter) {
                card.style.display = "flex";
            } 
            else {
                card.style.display = "none";
            }

        });

    });

});
</script>
  
</body>

</html>