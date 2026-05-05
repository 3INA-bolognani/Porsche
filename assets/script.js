// Selezioniamo gli elementi
const modal = document.getElementById('login-modal');
const openBtn = document.getElementById('open-login');
const closeBtn = document.getElementById('close-btn');
const loginForm = document.getElementById('login-form');

// Funzione per mostrare il pop-up
openBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

// Funzione per nascondere il pop-up
const hideModal = () => {
    modal.classList.add('hidden');
};

window.addEventListener('click', (event) => {
    if (event.target === modal) {
        hideModal();
    }
});