import "./styles/app.css";

const body = document.querySelector("body");
const darkModeButton = document.querySelector(".theme-controller");

darkModeButton.addEventListener("click", () => {
    const isButtonCheck = darkModeButton.checked;

    if (isButtonCheck) {
        body.dataset.theme = "dark";
        localStorage.setItem("theme", "dark");
    } else {
        body.dataset.theme = "light";
        localStorage.setItem("theme", "light");
    }
});
