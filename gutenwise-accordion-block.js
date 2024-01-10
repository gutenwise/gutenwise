// wise-accordion-block.js
(function () {
    var el = wp.element.createElement;
    var registerBlockType = wp.blocks.registerBlockType;

    registerBlockType('gutenwise/wise-accordion', {
        title: 'Wise Accordion',
        icon: 'shield',
        category: 'common',
        edit: function () {
            // Add your block edit UI components here
            return el('div', { className: 'wise-accordion-block' }, 'Wise Accordion Block');
        },
        save: function () {
            // Add your block save logic here
            return el('div', { className: 'wise-accordion-block' }, 'Wise Accordion Block');
        },
    });
})();
