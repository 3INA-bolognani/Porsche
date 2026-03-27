
const login = document.querySelector(".btn-nav");
const popUp = document.querySelector(".pop-up");

login.addEventListener("click", () => {
    popUp.classList.toggle("hidden");
});