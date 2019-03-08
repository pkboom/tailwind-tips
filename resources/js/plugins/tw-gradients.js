module.exports = function({ colors }) {
    return function ({ addUtilities, addComponents, e, prefix, config }) {
        const positions = ['top', 'left', 'right', 'bottom'];

        const newUtilities = colors.reduce((utilities, color) => {
            positions.forEach(position => {
                utilities[`.bg-grad-${color}-${position}`] = {
                    background : `linear-gradient(to ${position}, ${config('colors.' + color + '-light')}, ${config('colors.' + color + '-dark')})`
                }
            });

            return utilities;
        }, {});

        addUtilities(newUtilities, { variant: ["hover"] });
    };
};