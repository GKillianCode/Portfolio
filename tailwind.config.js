module.exports = {
    content: ["./assets/**/*.js", "./templates/**/*.html.twig"],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: [
            {
                light: {
                    primary: "oklch(70.5% 0.213 47.604)",
                    "primary-content": "oklch(98% 0 0)",
                    secondary: "oklch(37.3% 0.034 259.733)",
                    "secondary-content": "oklch(98% 0.019 200.873)",
                    accent: "oklch(70.5% 0.213 47.604)",
                    "accent-content": "oklch(96% 0.018 272.314)",
                    neutral: "oklch(20% 0.01 67.558)",
                    "neutral-content": "oklch(98% 0.001 106.423)",
                    "base-100": "oklch(98% 0.001 106.423)",
                    "base-200": "oklch(97% 0.001 106.424)",
                    "base-300": "oklch(92% 0.003 48.717)",
                    "base-content": "oklch(21% 0.006 56.043)",
                },
                dark: {
                    primary: "oklch(70.5% 0.213 47.604)",
                    "primary-content": "oklch(98% 0 0)",
                    secondary: "oklch(37.3% 0.034 259.733)",
                    "secondary-content": "oklch(98% 0.019 200.873)",
                    accent: "oklch(70.5% 0.213 47.604)",
                    "accent-content": "oklch(96% 0.018 272.314)",
                    neutral: "oklch(20% 0.01 67.558)",
                    "neutral-content": "oklch(98% 0.001 106.423)",
                    "base-100": "oklch(30% 0.001 106.423)",
                    "base-200": "oklch(27% 0.001 106.424)",
                    "base-300": "oklch(24% 0.003 48.717)",
                    "base-content": "oklch(95% 0.006 56.043)",
                },
            },
        ],
    },
};
