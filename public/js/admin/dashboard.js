dateTime = function(){
    const now = new Date();
    const hours = now.getHours();
    let greet;

    if (hours < 12) {
        greet = "Good Morning,";
    } else if (hours < 16) {
        greet = "Good Afternoon,";
    } else {
        greet = "Good Evening,";
    }

    document.querySelector('#time').innerHTML = greet;
};

menuDropdowns = function() {
    $('.dropdown').each(function() {
        const links = $(this).find('.links');
        const h = links.height();

        links.css('height', '0');

        $(this).click(function(){
            if ($(this).toggleClass('js-opened').hasClass('js-opened')) {
                links.css('height', h);
            } else {
                links.css('height', 0);
            };

        });
    });
};

$( document ).ready(function() {
    menuDropdowns();
    dateTime();

    $('.js-toggle-menu').click(function(){
        $('.menu').toggleClass('active');
    });

});
