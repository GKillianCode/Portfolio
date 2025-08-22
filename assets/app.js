import "./styles/app.css";

const body = document.querySelector("body");
const darkModeButton = document.querySelector(".theme-controller");

console.log("LOAD !!");

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

window.addEventListener("load", (event) => {
    console.log("LOAD !! 222");
    const savedTheme = localStorage.getItem("theme");

    if (savedTheme) {
        body.dataset.theme = savedTheme;

        if (savedTheme === "dark") {
            darkModeButton.checked = true;
        } else {
            darkModeButton.checked = false;
        }
    } else {
        body.dataset.theme = "light";
        darkModeButton.checked = false;
    }
});
