
    // Works everywhere
    $(document).ready(function () {
    // remove with fade alert

    $(".alert").fadeOut(10000);

    // -------  Lightbox -------
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

   // ---------------Ajax NL-----------

$('#newl').submit(function(e){
   var form_nl = $('form#newl');
   var formData =  $(this).serialize();
   var formnls = $('#form-news');
   var url = form_nl.attr("action");


   // console.log(form,formData, url);

   $.ajax({
       type: form_nl.attr('method'),
       url: url,
       data: formData,
       cache: false,
       dataType: 'json',
       success: function (response) {
           

           formnls.removeClass('alert-danger');
           formnls.addClass('alert-success');
   
           // Set the message text.
           $(formnls).text(response.success_nl);
   
           // Clear the form.
           $(form_nl)[0].reset();
           formnls.show();
           $(".alert").fadeOut(8000);
           
       
       },
       error: function (xhr) {
           $.each(xhr.responseJSON.errors, function(key,value) {
           //   $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
           console.log(key + " => " + value);
           var msg = '<div class="error newl" for="'+key+'">'+value+'</div>';
           $('input[name="' + key + '"], select[name="' + value + '"]').addClass('is-invalid').after(msg);
         }); 
        }
   });
   return false;

});




    // ---------------Ajax form-----------
   
    var maxCharacters = 300;
    $('#characterLeft').text(maxCharacters + ' Lettres Restantes');
    $('#message').keyup(function () {
        var textLength = $(this).val().length;
        if (textLength >= maxCharacters) {
            $('#characterLeft').text('Vous avez atteint la limite de ' + maxCharacters + ' lettres');
        } else {
            var count = maxCharacters - textLength;
            $('#characterLeft').text(count + ' Lettres Restantes');
        }
    });

$('#report').submit(function(e){
    var form = $('form#report');
    var formData =  $(this).serialize();
    var formMessages = $('#form-messages');
    var url = form.attr("action");
    // var nameInput = "#report input[name='name']";
    // var emailInput = "#report input[name='email']";
    // var messageInput = "#report input[name='message']";

    // console.log(form,formData, url);

    $.ajax({
        type: form.attr('method'),
        url: url,
        data: formData,
        cache: false,
        dataType: 'json',
        success: function (response) {
            

            formMessages.removeClass('alert-danger');
            formMessages.addClass('alert-success');
    
            // Set the message text.
            $(formMessages).text(response.success);
    
            // Clear the form.
            $(form)[0].reset();
            formMessages.show();
            $(".alert").fadeOut(8000);
            
        
        },
        error: function (xhr) {
            $.each(xhr.responseJSON.errors, function(key,value) {
            //   $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
            console.log(key + " => " + value);
            var msg = '<div class="error" for="'+key+'">'+value+'</div>';
            $('input[name="' + key + '"], select[name="' + value + '"]').addClass('is-invalid').after(msg);
            $('textarea[name="' + key + '"], select[name="' + value + '"]').addClass('is-invalid').after(msg);
          }); 
         }
    });
    return false;

});


        // -------------Footer-------------

        $( "#linklm" ).mouseenter(
            function() {
              $( "#social-linkedin" ).show();
              $( ".name_l").hide();
            });
          $( "#linklm" ).mouseleave(
            function() {
              $( "#social-linkedin" ).hide();
              $( ".name_l").show();
            }
          );

});
