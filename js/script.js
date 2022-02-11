document.addEventListener("DOMContentLoaded", function () {


    $('.works__list .works__item').hoverdir(
        { speed: 500, }
    );
    //Animate On Scrol
    AOS.init({
        easing: 'ease',
        delay: 300,
        once: true,
        duration: 1000,
        disable: 'mobile'
    });

    // скролл к секции при клике кнопку в хедере
    $(".offer__btn").click(function (e) {
        e.preventDefault();
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({
            scrollTop: destination
        }, 2000);
    });

    // scroll up
    $(window).scroll(function (e) {
        e.preventDefault();
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 2000);
        return false;
    });
});
