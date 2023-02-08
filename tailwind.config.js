const colors = require('tailwindcss/colors')

module.exports = {
    content: ['./resources/**/*.blade.php', './vendor/filament/**/*.blade.php'],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
                'red': "#C0352D",
                'tint-red': "#F4E7E6",
                'dark-red': "#63100C",
                'grayish': "#f0f0f0",
                'blue': "#1A506B",
                'tint-blue': "#D4DEE3",
                'dark-blue': "#062839",
                'green': "#72B590",
                'tint-green': "#C8E1D3",
            },
            fontSize: {
                's': '17px',
                '4.5xl': '2.5rem',
            },
            margin: {
                '5.5': '5.5rem',
                '12.5%': '12.5%',
            }, 
            maxWidth: {
                '300px': '300px',
                '1800px': '1800px',
            },          
            minWidth: {
                '3.5': '3.5rem',
            },
            height: {
              '0.75': '0.2rem',
            },  
            maxHeight: {
                '65vh': '65vh',
            },
            translate: {
                '41%': '41%',
            },
            inset: {
                '4.5': '4.5rem',
            },
            screens: {
                '2md': '960px',
                '3xl': '1800px',
                '4xl': '2300px',
                'xs': '481px',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
