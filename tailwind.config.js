const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                dark: "#333",
                accent: "#823eb7",
                dim: "#F7F7F7",
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
