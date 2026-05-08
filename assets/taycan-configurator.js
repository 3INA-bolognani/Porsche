// ================================================================
// DATA — Taycan Turbo S
// ================================================================
const CAR = {
    id: 'taycan',
    category: 'elettrica',
    series: 'Taycan',
    name: 'Taycan Turbo S',
    kw: 560, cv: 761, fuel: 'Elettrica',
    acceleration: 2.8, topSpeed: 260, year: 2024,
    priceBase: 189800,
    badge: 'Elettrica',
    img: 'https://files.porsche.com/filestore/image/multimedia/none/992-gt3-modelimage-sideshot/model/765dfc51-51bc-11ed-80f5-005056bbdc38/porsche-model.png',
    colors: ['#1A1A1A', '#D5001C', '#FFFFFF', '#2D5A9E', '#6B8C6B', '#8C6B2D'],
    colorNames: ['Jet Black', 'Guards Red', 'Carrara White', 'Gentian Blue', 'Mamba Green', 'Crayon'],
  };
  
  const WHEELS = [
    '20" Sport Classic',
    '21" Exclusive Design',
    '21" RS Spyder',
    '22" Cross Turismo'
  ];
  
  const EXTRAS = [
    { name: 'Pack Sport Chrono',  price: 1890 },
    { name: 'Bose Surround Sound', price: 2840 },
    { name: 'Tetto Panoramico',   price: 3200 },
    { name: 'Pack Light Design',  price: 1120 },
    { name: 'Pacchetto Notte',    price: 890  },
    { name: 'Head-Up Display',    price: 2100 },
    { name: 'Pack Sport Exhaust', price: 3400 },
    { name: 'Lane Keep Assist',   price: 640  },
  ];
  
  const INTERIORS = [
    { name: 'Pelle Liscia Nera',     price: 0    },
    { name: 'Pelle Liscia Cognac',   price: 1480 },
    { name: 'Pelle Traforata Grigio',price: 2100 },
    { name: 'Alcantara Carbon',      price: 4200 },
    { name: 'Pelle Bi-Color Rossa',  price: 3600 },
    { name: 'Race-Tex Full Black',   price: 2800 },
  ];
  
  // ================================================================
  // STATE
  // ================================================================
  let currentConfig = {
    color: 0,
    colorName: CAR.colorNames[0],
    wheel: 0,
    interior: 0,
    extras: [],
    view: 'laterale'
  };
  let user = null;
  let savedConfigs = JSON.parse(localStorage.getItem('taycansConfigs') || '[]');
  
  // ================================================================
  // INIT — render configuratore al caricamento
  // ================================================================
  document.addEventListener('DOMContentLoaded', () => {
    renderConfigurator();
  });
  
  // ================================================================
  // RENDER CONFIGURATORE
  // ================================================================
  function renderConfigurator() {
    // Specs grid
    document.getElementById('cfg-specs-grid').innerHTML = `
      <div class="config-spec-item">
        <div class="config-spec-val">${CAR.cv} <span class="config-spec-unit">CV</span></div>
        <div class="config-spec-name">Potenza</div>
      </div>
      <div class="config-spec-item">
        <div class="config-spec-val">${CAR.kw} <span class="config-spec-unit">kW</span></div>
        <div class="config-spec-name">kW</div>
      </div>
      <div class="config-spec-item">
        <div class="config-spec-val">${CAR.acceleration} <span class="config-spec-unit">sec</span></div>
        <div class="config-spec-name">0–100 km/h</div>
      </div>
      <div class="config-spec-item">
        <div class="config-spec-val">${CAR.topSpeed} <span class="config-spec-unit">km/h</span></div>
        <div class="config-spec-name">Velocità Max</div>
      </div>
      <div class="config-spec-item">
        <div class="config-spec-val" style="font-size:18px">${CAR.fuel}</div>
        <div class="config-spec-name">Alimentazione</div>
      </div>
      <div class="config-spec-item">
        <div class="config-spec-val">${CAR.year}</div>
        <div class="config-spec-name">Anno</div>
      </div>
    `;
  
    // Colori
    document.getElementById('color-swatches').innerHTML = CAR.colors.map((c, i) => `
      <div class="color-item">
        <div class="color-swatch ${i === 0 ? 'active' : ''}"
             style="background:${c}; ${c === '#FFFFFF' ? 'border:2px solid #555' : ''}"
             onclick="selectColor(${i})"
             title="${CAR.colorNames[i]}">
        </div>
        <div class="color-label">${CAR.colorNames[i]}</div>
      </div>
    `).join('');
  
    // Cerchi
    document.getElementById('wheels-options').innerHTML = WHEELS.map((w, i) => `
      <button class="option-chip ${i === 0 ? 'active' : ''}" onclick="selectWheel(${i}, this)">${w}</button>
    `).join('');
  
    // Interni
    document.getElementById('interior-options').innerHTML = INTERIORS.map((int, i) => `
      <div class="interior-option ${i === 0 ? 'active' : ''}" onclick="selectInterior(${i}, this)">
        <div class="interior-option-name">${int.name}</div>
        <div class="interior-option-price">${int.price === 0 ? 'Incluso' : '+€' + int.price.toLocaleString('it-IT')}</div>
      </div>
    `).join('');
  
    // Optional
    document.getElementById('extras-options').innerHTML = EXTRAS.map((e, i) => `
      <button class="option-chip" onclick="toggleExtra(${i}, this)">${e.name} +€${e.price.toLocaleString('it-IT')}</button>
    `).join('');
  
    updateCarColor();
    updateSummary();
  }
  
  // ================================================================
  // COLORE
  // ================================================================
  function selectColor(i) {
    currentConfig.color = i;
    currentConfig.colorName = CAR.colorNames[i];
    document.querySelectorAll('.color-swatch').forEach((s, idx) => {
      s.classList.toggle('active', idx === i);
    });
    updateCarColor();
    updateSummary();
  }
  
  function updateCarColor() {
    const viewport = document.getElementById('config-3d-viewport');
    const col = CAR.colors[currentConfig.color];
    viewport.style.background = `radial-gradient(ellipse at center, ${col}22 0%, #0a0a0a 70%)`;
  }
  
  // ================================================================
  // CERCHI
  // ================================================================
  function selectWheel(i, btn) {
    currentConfig.wheel = i;
    document.querySelectorAll('#wheels-options .option-chip').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    updateSummary();
  }
  
  // ================================================================
  // INTERNI
  // ================================================================
  function selectInterior(i, el) {
    currentConfig.interior = i;
    document.querySelectorAll('.interior-option').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
    updateSummary();
  }
  
  // ================================================================
  // OPTIONAL
  // ================================================================
  function toggleExtra(i, btn) {
    btn.classList.toggle('active');
    const idx = currentConfig.extras.indexOf(i);
    if (idx === -1) currentConfig.extras.push(i);
    else currentConfig.extras.splice(idx, 1);
    updateSummary();
  }
  
  // ================================================================
  // VISTA
  // ================================================================
  function setView(v, btn) {
    currentConfig.view = v;
    document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  }
  
  // ================================================================
  // PREZZO
  // ================================================================
  function calcTotal() {
    let total = CAR.priceBase;
    total += INTERIORS[currentConfig.interior].price;
    currentConfig.extras.forEach(i => total += EXTRAS[i].price);
    return total;
  }
  
  function updateSummary() {
    const total = calcTotal();
    const rows = [
      { label: 'Modello base',       val: '€' + CAR.priceBase.toLocaleString('it-IT') },
      { label: 'Colore carrozzeria', val: CAR.colorNames[currentConfig.color] },
      { label: 'Cerchi',             val: WHEELS[currentConfig.wheel] },
      { label: 'Interni',            val: INTERIORS[currentConfig.interior].name },
      ...currentConfig.extras.map(i => ({ label: EXTRAS[i].name, val: '+€' + EXTRAS[i].price.toLocaleString('it-IT') }))
    ];
    document.getElementById('cfg-summary').innerHTML = rows.map(r => `
      <div class="config-summary-row">
        <span class="config-summary-label">${r.label}</span>
        <span class="config-summary-val">${r.val}</span>
      </div>
    `).join('');
    document.getElementById('cfg-total-price').textContent = '€' + total.toLocaleString('it-IT');
  }
  
  // ================================================================
  // SALVA CONFIGURAZIONE
  // ================================================================
  function saveConfig() {
    if (!user) { openModal('login'); return; }
    const config = {
      id: Date.now(),
      date: new Date().toLocaleDateString('it-IT'),
      carName: CAR.name,
      series: CAR.series,
      color: currentConfig.colorName,
      wheel: WHEELS[currentConfig.wheel],
      interior: INTERIORS[currentConfig.interior].name,
      extras: currentConfig.extras.map(i => EXTRAS[i].name),
      total: calcTotal(),
      cv: CAR.cv,
      fuel: CAR.fuel
    };
    savedConfigs.push(config);
    localStorage.setItem('taycansConfigs', JSON.stringify(savedConfigs));
    showToast('✓ Configurazione salvata con successo');
  }
  
  // ================================================================
  // ACCOUNT / LOGIN MODAL
  // ================================================================
  function openModal(type) {
    const overlay = document.getElementById('modal-overlay');
    const box = document.getElementById('modal-box');
    overlay.classList.add('open');
  
    if (type === 'login') {
      box.innerHTML = `
        <button class="modal-close" onclick="closeModal()">✕</button>
        <div class="modal-title">Accedi</div>
        <div class="modal-sub">Accedi per salvare le tue configurazioni.</div>
        <div class="form-group">
          <label class="form-label">Email</label>
          <input class="form-input" type="email" id="login-email" placeholder="nome@email.com">
        </div>
        <div class="form-group">
          <label class="form-label">Password</label>
          <input class="form-input" type="password" id="login-pwd" placeholder="••••••••">
        </div>
        <div class="form-actions">
          <button class="btn-primary" style="width:100%" onclick="doLogin()">Accedi</button>
          <div style="text-align:center; margin-top:16px; font-size:13px; color:var(--porsche-silver)">
            Non hai un account? <span style="color:var(--porsche-red); cursor:pointer" onclick="openModal('register')">Registrati</span>
          </div>
        </div>
      `;
    } else if (type === 'register') {
      box.innerHTML = `
        <button class="modal-close" onclick="closeModal()">✕</button>
        <div class="modal-title">Registrati</div>
        <div class="modal-sub">Crea il tuo account per salvare le configurazioni.</div>
        <div class="form-group">
          <label class="form-label">Nome</label>
          <input class="form-input" type="text" id="reg-name" placeholder="Il tuo nome">
        </div>
        <div class="form-group">
          <label class="form-label">Email</label>
          <input class="form-input" type="email" id="reg-email" placeholder="nome@email.com">
        </div>
        <div class="form-group">
          <label class="form-label">Password</label>
          <input class="form-input" type="password" id="reg-pwd" placeholder="Min. 8 caratteri">
        </div>
        <div class="form-actions">
          <button class="btn-primary" style="width:100%" onclick="doRegister()">Crea Account</button>
          <div style="text-align:center; margin-top:16px; font-size:13px; color:var(--porsche-silver)">
            Hai già un account? <span style="color:var(--porsche-red); cursor:pointer" onclick="openModal('login')">Accedi</span>
          </div>
        </div>
      `;
    } else if (type === 'account') {
      box.innerHTML = `
        <button class="modal-close" onclick="closeModal()">✕</button>
        <div class="modal-title">Il Mio Account</div>
        <div style="display:flex;align-items:center;gap:16px;padding:16px 0;border-top:1px solid var(--porsche-border);margin-top:16px;">
          <div style="width:60px;height:60px;background:var(--porsche-red);border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:'Barlow Condensed',sans-serif;font-size:24px;font-weight:700">${user.initials}</div>
          <div>
            <div style="font-size:20px;font-weight:600">${user.name}</div>
            <div style="font-size:13px;color:var(--porsche-silver)">${user.email}</div>
          </div>
        </div>
        <div style="display:flex;gap:10px;margin-top:24px">
          <button class="btn-small btn-small-ghost" onclick="doLogout()">Esci</button>
        </div>
      `;
    }
  }
  
  function closeModal(e) {
    if (!e || e.target === document.getElementById('modal-overlay')) {
      document.getElementById('modal-overlay').classList.remove('open');
    }
  }
  
  function doLogin() {
    const email = document.getElementById('login-email').value;
    const pwd = document.getElementById('login-pwd').value;
    if (!email || !pwd) { showToast('Inserisci email e password'); return; }
    const name = email.split('@')[0];
    user = { name, email, initials: name.charAt(0).toUpperCase() };
    updateNavUser();
    closeModal();
    showToast('✓ Accesso effettuato — Benvenuto ' + name);
  }
  
  function doRegister() {
    const name = document.getElementById('reg-name').value;
    const email = document.getElementById('reg-email').value;
    const pwd = document.getElementById('reg-pwd').value;
    if (!name || !email || !pwd) { showToast('Compila tutti i campi'); return; }
    user = { name, email, initials: name.charAt(0).toUpperCase() };
    updateNavUser();
    closeModal();
    showToast('✓ Account creato — Benvenuto ' + name);
  }
  
  function doLogout() {
    user = null;
    document.getElementById('nav-account-btn').style.display = '';
    document.getElementById('nav-user-btn').style.display = 'none';
    closeModal();
    showToast('Disconnesso con successo');
  }
  
  function updateNavUser() {
    document.getElementById('nav-account-btn').style.display = 'none';
    document.getElementById('nav-user-btn').style.display = 'flex';
    document.getElementById('user-avatar-initials').textContent = user.initials;
  }
  
  // ================================================================
  // TOAST
  // ================================================================
  function showToast(msg) {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 2800);
  }