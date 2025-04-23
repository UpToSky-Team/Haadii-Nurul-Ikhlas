// tailwind.config.js
module.exports = {
    content: [
        "./resources/view/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: [
                    "Poppins",
                    "Inter",
                    "ui-sans-serif",
                    "system-ui",
                    "sans-serif",
                ],
                display: ["Inter"], // Jika ingin font untuk font-display
            },
        },
    },
    plugins: [],
};
