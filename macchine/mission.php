<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche - Taycan</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php require_once "../components/navbar.php"; ?>

<!-- TOAST -->
<div class="toast" id="toast"></div>

<!-- ACCOUNT MODAL -->
<div class="modal-overlay" id="modal-overlay" onclick="closeModal(event)">
  <div class="modal" id="modal-box"></div>
</div>

<!-- CONFIGURATOR -->
<div id="configurator">
  <div class="config-layout">

    <!-- LEFT: Viewport + Opzioni -->
    <div class="config-left">

      <!-- Viewport 3D -->
      <div class="config-3d-viewport" id="config-3d-viewport">
        <div class="car-3d-display" id="car-3d-display">
          <img id="car-main-img" src="" alt="Porsche Taycan" onerror="this.style.display='none'" />
          <div class="car-3d-placeholder" id="car-3d-placeholder">Taycan</div>
        </div>
        <div class="rotate-hint">↔ trascina per ruotare la vista</div>
      </div>

      <!-- Controlli vista -->
      <div class="view-controls">
        <button class="view-btn active" onclick="setView('laterale', this)">Laterale</button>
        <button class="view-btn" onclick="setView('frontale', this)">Frontale</button>
        <button class="view-btn" onclick="setView('posteriore', this)">Posteriore</button>
        <button class="view-btn" onclick="setView('interno', this)">Interno</button>
      </div>

      <!-- Sezioni opzioni -->
      <div class="config-sections">

        <div class="config-section-title">Colore Carrozzeria</div>
        <div class="color-swatches" id="color-swatches"></div>

        <div class="config-section-title">Cerchi</div>
        <div class="option-chips" id="wheels-options"></div>

        <div class="config-section-title">Rivestimento Interni</div>
        <div class="interior-options" id="interior-options"></div>

        <div class="config-section-title">Optional &amp; Pacchetti</div>
        <div class="option-chips" id="extras-options"></div>

        <div style="height: 40px;"></div>
      </div>
    </div>

    <!-- RIGHT: Riepilogo -->
    <div class="config-right">
      <div class="config-car-header">
        <div class="config-car-model" id="cfg-car-model">Taycan</div>
        <div class="config-car-name" id="cfg-car-name">Taycan Turbo S</div>
      </div>
      <div class="config-specs-grid" id="cfg-specs-grid"></div>
      <div class="config-summary" id="cfg-summary"></div>
      <div class="config-total">
        <div>
          <div class="config-total-label">Prezzo totale IVA incl.</div>
        </div>
        <div class="config-total-price" id="cfg-total-price">—</div>
      </div>
      <div class="config-actions">
        <button class="btn-save" onclick="saveConfig()">💾 Salva Configurazione</button>
      </div>
    </div>

  </div>
</div>

<script src="../assets/taycan-configurator.js"></script>
</body>
</html>