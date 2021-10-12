const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "0 20px",
                sm: "0 20px",
                lg: "0",
                xl: "0",
                "2x:": "0",
            },
        },
        extend: {
            colors: {
                foreground: {
                    DEFAULT: "#000",
                },
                background: {
                    DEFAULT: "#fff",
                },
                // Default Colors
                success: {
                    lighter: "#d3e5ff",
                    light: "#3291ff",
                    DEFAULT: "#0070f3",
                    dark: "#0761d1",
                },
                error: {
                    lighter: "#f7d4d6",
                    light: "#ff1a1a",
                    DEFAULT: "#e00",
                    dark: "#c50000",
                },
                warning: {
                    lighter: "#ffefcf",
                    light: "#f7b955",
                    DEFAULT: "#f5a623",
                    dark: "#ab570a",
                },
                // Accent gradient
                accent: {
                    1: "#fafafa",
                    2: "#eaeaea",
                    3: "#999",
                    4: "#888",
                    5: "#666",
                    6: "#444",
                    7: "#333",
                    8: "#111",
                },
                violet: {
                    lighter: "#e3d7fc",
                    light: "#8a63d2",
                    DEFAULT: "#7928ca",
                    dark: "#4c2889",
                },
                cyan: {
                    lighter: "#aaffec",
                    light: "#79ffe1",
                    DEFAULT: "#50e3c2",
                    dark: "#29bc9b",
                },
                highlight: {
                    purple: "#f81ce5",
                    magenta: "#eb367f",
                    pink: "#ff0080",
                    yellow: "#fff500",
                },
            },
            width: {
                "w-350": "350px",
            },
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                "hero-pattern":
                    "linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url('/assets/img/home/hero.jpg')",
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    // plugins: [require("@tailwindcss/forms")],
};
