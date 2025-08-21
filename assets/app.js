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

window.addEventListener("load", (event) => {
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
