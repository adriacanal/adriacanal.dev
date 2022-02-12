module.exports = {
    content: ["./resources/**/*.{html,js,vue}"],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
