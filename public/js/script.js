
    // Works everywhere
    $(document).ready(function () {
    
    // Hide/show animation hamburger function
    // $('.navbar-toggler').on('click', function () {
    
    // Take this line to first hamburger animations
    // $('.animated-icon1').toggleClass('open');
    
    // });
    $('a[data-rel^=lightcase]').lightcase({
        slideshowAutoStart:false,
    });
        $('.navbar-nav>li>a').on('click', function () {
            $('.navbar-collapse').collapse('hide');
            // $('.animated-icon1').removeClass('open');
        });

    // ----------NAVBAR STICKY------------
          // Custom function which toggles between sticky class (is-sticky)
          var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
            var stickyHeight = sticky.outerHeight();
            var stickyTop = stickyWrapper.offset().top;
            if (scrollElement.scrollTop() >= stickyTop) {
                stickyWrapper.height(stickyHeight);
                sticky.addClass("is-sticky");
            }
            else {
                sticky.removeClass("is-sticky");
                stickyWrapper.height('auto');
            }
        };

        // Find all data-toggle="sticky-onscroll" elements
        $('[data-toggle="sticky-onscroll"]').each(function () {
            var sticky = $(this);
            var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
            sticky.before(stickyWrapper);
            sticky.addClass('sticky');

            // Scroll & resize events
            $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                stickyToggle(sticky, stickyWrapper, $(this));
            });

            // On page load
            stickyToggle(sticky, stickyWrapper, $(window));
        });
    
    });