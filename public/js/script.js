
    // Works everywhere
    $(document).ready(function () {
    
    // Hide/show animation hamburger function
    $('.navbar-toggler').on('click', function () {
    
    // Take this line to first hamburger animations
    $('.animated-icon1').toggleClass('open');
    
    });
$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});
    
    });
