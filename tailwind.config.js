module.exports = {
    content: ["./assets/**/*.js", "./templates/**/*.html.twig"],
    theme: {
        extend: {
            // ici tu peux mettre tes couleurs perso si tu veux
            colors: {
                "bg-custom": "#7ba3ff", // oklch(70.7% 0.165 254.624)
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                light: {
                    primary: "#ff9500", // oklch(70.5% 0.213 47.604)
                    "primary-content": "#fefefe", // oklch(98% 0 0)
                    secondary: "#4a4a5e", // oklch(37.3% 0.034 259.733)
                    "secondary-content": "#f0f4fa", // oklch(98% 0.019 200.873)
                    accent: "#ff9500", // oklch(70.5% 0.213 47.604)
                    "accent-content": "#f2f2f5", // oklch(96% 0.018 272.314)
                    neutral: "#2b2b2e", // oklch(20% 0.01 67.558)
                    "neutral-content": "#fafafa", // oklch(98% 0.001 106.423)
                    "base-100": "#fafafa", // oklch(98% 0.001 106.423)
                    "base-200": "#f7f7f7", // oklch(97% 0.001 106.424)
                    "base-300": "#e8e8e9", // oklch(92% 0.003 48.717)
                    "base-content": "#2e2e30", // oklch(21% 0.006 56.043)
                },
                dark: {
                    primary: "#ff9500", // oklch(70.5% 0.213 47.604)
                    "primary-content": "#fefefe", // oklch(98% 0 0)
                    secondary: "#4a4a5e", // oklch(37.3% 0.034 259.733)
                    "secondary-content": "#f0f4fa", // oklch(98% 0.019 200.873)
                    accent: "#ff9500", // oklch(70.5% 0.213 47.604)
                    "accent-content": "#f2f2f5", // oklch(96% 0.018 272.314)
                    neutral: "#2b2b2e", // oklch(20% 0.01 67.558)
                    "neutral-content": "#fafafa", // oklch(98% 0.001 106.423)
                    "base-100": "#424244", // oklch(30% 0.001 106.423)
                    "base-200": "#3a3a3c", // oklch(27% 0.001 106.424)
                    "base-300": "#333335", // oklch(24% 0.003 48.717)
                    "base-content": "#f0f0f1", // oklch(95% 0.006 56.043)
                },
            },
        ],
    },
};
