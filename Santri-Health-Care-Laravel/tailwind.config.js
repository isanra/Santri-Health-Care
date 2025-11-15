/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './resources/views/components/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: "#395886",
                    50: "#f0f3fa",
                    100: "#b1c9ef",
                    500: "#395886",
                },
            },
            borderRadius: {
                "3xl": "1.5rem",
                "4xl": "2rem",
            },
            spacing: {
                15: "3.75rem", // untuk px-15
            },
        },
    },
    plugins: [],
};
