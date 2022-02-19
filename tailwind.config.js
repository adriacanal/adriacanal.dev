module.exports = {
    content: ["./resources/**/*.{blade.php,js,vue}"],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
