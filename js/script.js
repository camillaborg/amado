jQuery(function($) { // DOM is now read and ready to be manipulated

    $(document).ready(function () {
        console.log("ready!");
    });
    $("#show-menu").click(function () {
        $("#menu ul").toggle(500);
    });

    $('p:empty').remove();
    $('h4:empty').remove();

    // Smooth scroll funktion
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    $(document).ready(function() {
        var stickyNavTop = $('.navul').offset().top;

        var stickyNav = function(){
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
                $('.navul').addClass('sticky');
                $('#mini-logo').addClass('show');
            } else {
                $('.navul').removeClass('sticky');
                $('#mini-logo').removeClass('show');
            }
        };

        stickyNav();

        $(window).scroll(function() {
            stickyNav();
        });
    });


});