document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    if (!form) return;

    form.addEventListener("submit", async function (e) {
        e.preventDefault();

        // Reset des erreurs
        clearErrors();
        hideAlert();

        // Affichage du loader
        setLoading(true);

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: "POST",
                body: formData,
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                },
            });

            const data = await response.json();

            if (data.success) {
                showAlert("success", data.message);
                form.reset();

                // Scroll vers le message de succès
                document.getElementById("contactAlert").scrollIntoView({
                    behavior: "smooth",
                    block: "center",
                });
            } else {
                if (data.errors) {
                    displayErrors(data.errors);
                    showAlert(
                        "error",
                        "Veuillez corriger les erreurs du formulaire"
                    );
                } else {
                    showAlert(
                        "error",
                        data.message || "Une erreur est survenue"
                    );
                }
            }
        } catch (error) {
            console.error("Erreur:", error);
            showAlert("error", "Erreur de connexion. Veuillez réessayer.");
        } finally {
            setLoading(false);
        }
    });
});

function clearErrors() {
    // Nettoyer tous les messages d'erreur
    document.querySelectorAll('[id^="error-"]').forEach((el) => {
        el.textContent = "";
    });
    // Retirer les bordures rouges
    document.querySelectorAll(".border-red-500").forEach((el) => {
        el.classList.remove("border-red-500");
    });
}

function displayErrors(errors) {
    for (const [field, message] of Object.entries(errors)) {
        // Afficher le message d'erreur
        const errorEl = document.getElementById(`error-${field}`);
        if (errorEl) {
            errorEl.textContent = message;
        }
        // Ajouter une bordure rouge au champ
        const input = document.querySelector(`[name="contact[${field}]"]`);
        if (input) {
            input.classList.add("border-red-500");
            // Focus sur le premier champ en erreur
            if (Object.keys(errors)[0] === field) {
                input.focus();
            }
        }
    }
}

function showAlert(type, message) {
    const alert = document.getElementById("contactAlert");
    if (!alert) return;

    // Reset des classes
    alert.className = "mb-6 p-4 rounded-lg";

    if (type === "success") {
        alert.classList.add(
            "bg-green-50",
            "text-green-800",
            "border",
            "border-green-200"
        );
    } else {
        alert.classList.add(
            "bg-red-50",
            "text-red-800",
            "border",
            "border-red-200"
        );
    }

    alert.textContent = message;
    alert.classList.remove("hidden");
}

function hideAlert() {
    const alert = document.getElementById("contactAlert");
    if (alert) {
        alert.classList.add("hidden");
    }
}

function setLoading(loading) {
    const btn = document.getElementById("submitBtn");
    const btnText = document.getElementById("btnText");
    const btnLoader = document.getElementById("btnLoader");

    if (loading) {
        btn.disabled = true;
        btn.classList.add("opacity-75", "cursor-not-allowed");
        btnText.textContent = "Envoi en cours...";
        btnLoader.classList.remove("hidden");
    } else {
        btn.disabled = false;
        btn.classList.remove("opacity-75", "cursor-not-allowed");
        btnText.textContent = "Envoyer le message";
        btnLoader.classList.add("hidden");
    }
}
