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
                DEFAULT: "1.5rem",
                sm: "1.5rem",
                lg: "1.5rem",
                xl: "0",
                "2x:": "0",
            },
        },
        extend: {
            fontSize: {
                "big-sm": "4rem",
                "big-md": "8rem",
                "big-lg": "10rem",
            },
            borderRadius: {
                DEFAULT: "5px",
            },
            width: {
                "80-ch": "80ch",
            },
            minHeight: {
                150: "150px",
            },
            maxWidth: {
                350: "350px",
            },
            colors: {
                foreground: {
                    DEFAULT: "#000",
                },
                background: {
                    DEFAULT: "#fff",
                },
                primary: {
                    DEFAULT: "#f81ce5",
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
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
                serif: ["Spectral", ...defaultTheme.fontFamily.serif],
            },
            backgroundImage: {
                "hero-pattern":
                    "linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url('/img/home/hero.jpg')",
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
