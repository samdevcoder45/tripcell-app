/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                grotesk: ["Founders Grotesk", "sans-serif"],
            },
            color: {
                gray: "#475467",
                "gray-md": "#344054",
            },
            textColor: {
                gray: "#475467",
                dark: "#030508",
            },
            borderColor: {
                primary: "#42506C",
                "gray-md": "#344054",
            },
        },
    },
    plugins: [],
};
