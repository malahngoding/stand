const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        colors: {
            gray: {
                DEFAULT: "#C0C0C0",
            },
            purple: {
                DEFAULT: "#A890F1",
                100:"F0EBFD",
            },
            orange: {
                DEFAULT: "FADFB5",
                100:"E79A69",
            },
            white: {
                DEFAULT: "#ffffff",
            },
            black: {
                DEFAULT: "#18191F",
                800: "#474A57",
                700: "#969BAB",
                500: "#9FA4B4",
                300: "#EEEFF4",
                100: "#F4F5F7",
            },
            blue: {
                DEFAULT: "#1947E6",
                800: "#8094FF",
                100: "#E9E7FC",

                dark: '#009eeb',
                masive: '#5775f7',
                b1: '#5775f7',
                b2: '#f2f2f2',
                b3: '#3c5eef',
                b4: '#b3e0f7',
                b5: '#ef2f29',
                b6: '#375be8',
            },
            pink: {
                DEFAULT: "#FF89BB",
                800: "#FFC7DE",
                100: "#FFF3F8",
            },
            yellow: {
                DEFAULT: "#FFBD12",
                800: "#FFD465",
                100: "#FFF4CC",
            },
            green: {
                DEFAULT: "#00C6AE",
                800: "#61E4C5",
                100: "#D6FCF7",
            },
            red: {
                DEFAULT: "#F95A2C",
                800: "#FF9692",
                100: "#FFE8E8",
            },
        },
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: (theme) => ({
                "footer-texture": "url('/assets/svg/activation.svg')",
            }),
        },
    },
    variants: {
        extend: {
            backgroundColor: ["active"],
        },
    },
    purge: {
        content: [
            "./app/**/*.php",
            "./resources/**/*.html",
            "./resources/**/*.js",
            "./resources/**/*.jsx",
            "./resources/**/*.ts",
            "./resources/**/*.tsx",
            "./resources/**/*.php",
            "./resources/**/*.vue",
            "./resources/**/*.twig",
        ],
        options: {
            defaultExtractor: (content) =>
                content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
