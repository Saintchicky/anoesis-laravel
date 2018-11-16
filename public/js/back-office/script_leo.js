

$(document).ready(function () {

    // -----------Delete pop up------------
    $('[data-toggle=confirmation]').confirmation({
        rootSelector: '[data-toggle=confirmation]',
        // other options
    });
    $(".alert").fadeOut(3000);
        // -------------DropZone-----------
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function (file) {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url("/admin/image/delete") }}',
                    data: { filename: name },
                    success: function (data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                return false;
            }
        };


    // --------menu----------  
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
           isClosed = false;
      
          trigger.click(function () {
            hamburger_cross();      
          });
      
          function hamburger_cross() {
      
            if (isClosed == true) {          
              overlay.hide();
              trigger.removeClass('is-open');
              trigger.addClass('is-closed');
              isClosed = false;
            } else {   
              overlay.show();
              trigger.removeClass('is-closed');
              trigger.addClass('is-open');
              isClosed = true;
            }
        }
        
        $('[data-toggle="offcanvas"]').click(function () {
              $('#wrapper').toggleClass('toggled');
        });  
    
    
// ------------text editor  WYSIWYG -----------

$('.summernote').summernote('code', 'Taper votre texte');

$('.summer').summernote('code');




// ---------------Carousel et Main signal color-------------- 
 // Attention mettre double quote quand y a contains ou autre)

 $(".see_gal:contains('Oui')").addClass("green");
  $(".see_gal:contains('Non')").addClass("grey");
//-------------Hide elements if empty----------

    // ----------js table--------------

        $('#data_table_NL').DataTable( {
          
        

          keys: true,
        pageLength: 6,
          dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 7, 10, 11 ]
                    }
                }
            ],
          language: {
            processing:     "Traitement en cours...",
            search:         "Rechercher&nbsp;:",
            lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
            info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            infoPostFix:    "",
            loadingRecords: "Chargement en cours...",
            zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable:     "Aucune donnée disponible dans le tableau",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            },
            aria: {
                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
        });
    $('#data_table_m').DataTable({



        keys: true,
        pageLength: 6,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdf',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 7, 10, 11]
                }
            }
        ],
        language: {
            processing: "Traitement en cours...",
            search: "Rechercher&nbsp;:",
            lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
            info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            infoPostFix: "",
            loadingRecords: "Chargement en cours...",
            zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable: "Aucune donnée disponible dans le tableau",
            paginate: {
                first: "Premier",
                previous: "Pr&eacute;c&eacute;dent",
                next: "Suivant",
                last: "Dernier"
            },
            aria: {
                sortAscending: ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
    });

       
    // -----------------token ----------------------

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    

   


    // -------------------Ajax Profile---------------------
    $('#reload_btn').click(function() {
        location.reload();
    });


    var str = window.location.pathname;
    if (str.startsWith("/admin/profile_edit")) {

        $('#modalForm').on('click', function (event) {
            event.preventDefault();
            ajaxLoad($(this).attr('href'));
           
           
        });
        
        
    function ajaxLoad(filename, content) {
        content = typeof content !== 'undefined' ? content : 'content';
        $.ajax({
            type: "GET",
            url: filename,
            contentType: false,
            success: function (data) {
                $("#" + content).html(data);
                $("#summernote").summernote('code');
    
              
    
            $('#sendToDB').click(function(e){
                var form = $('form#frm');
                var data = {
                    description_p: $("#summernote").val(),
                    pict_profile: $("#pict_profile_up").val(),
                  
                };
       
                var url = form.attr("action");
    
                console.log(form,data, url);
        
                $.ajax({
                    type: form.attr('method'),
                    url: url,
                    data: data,
                    cache: false,
                    success: function (data) {
                        $('.is-invalid').removeClass('is-invalid');
                        
                        if (data.fail) {
                            for (control in data.errors) {
                                $('input[name=' + control + ']').addClass('is-invalid');
                                $('#error-' + control).html(data.errors[control]);
                            }
                        } else {
                            document.location.reload();

                          
                        
                       }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        console.log("Error: " + errorThrown + xhr + textStatus );
                        console.log( xhr  );
                    }
                });
                return false;
    
            });
    
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }
    
  
    
 
    }

//-----------------Ajax Services--------------------



var str = window.location.pathname;
if (str.startsWith("/admin/tour_date")) {

    $('#ajaxDatetour').on('click', function (event) {
       
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
      
           
      

    });
     
    
function ajaxLoad(filename) {

    $.ajax({
        type: "GET",
        url: filename,
        contentType: false,
        success: function (data) {
            // $("#" + content).html(data);
            $("#content").html(data);



          

            $(document).on('click',function (e) {

            let id = $(this).data('id');

            var form = $('form#frm');
            var data = {
                date: $("#date_d").val(),
                city: $("#city_d").val(),
                place: $("#place_d").val(),
                url: $("#url_d").val()       
            };
   
                var url = "/admin/tour_date/up/"+ id;

            console.log(form,data, url);
    
            $.ajax({
                type: form.attr('method'),
                url: url,
                data: data,
                cache: false,
                success: function (data) {

                    
                    if (data.fail) {
                        for (control in data.errors) {
                          
                            $('#error-' + control).html(data.errors[control]);
                        }
                    } else {
                        document.location.reload();
                   
                      
                    
                   }
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log("Error: " + errorThrown + xhr + textStatus );
                    console.log( xhr  );
                }
            });
            return false;

        });

        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}




}
//-----------------Ajax Musics--------------------



var str = window.location.pathname;
if (str.startsWith("/admin/music")) {

    $('#ajaxMusic').on('click', function (event) {
       
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
      
           
      

    });
     
    
function ajaxLoad(filename) {

    $.ajax({
        type: "GET",
        url: filename,
        contentType: false,
        success: function (data) {
            // $("#" + content).html(data);
            $("#content").html(data);



          

        $('#sendToDB').click(function(e){
            var form = $('form#frm');
            var data = {
                url_sound: $("#url_sound_a").val()       
            };
   
            var url = form.attr("action");

            console.log(form,data, url);
    
            $.ajax({
                type: form.attr('method'),
                url: url,
                data: data,
                cache: false,
                success: function (data) {

                    
                    if (data.fail) {
                        for (control in data.errors) {
                          
                            $('#error-' + control).html(data.errors[control]);
                        }
                    } else {
                        document.location.reload();

                      
                    
                   }
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.log("Error: " + errorThrown + xhr + textStatus );
                    console.log( xhr  );
                }
            });
            return false;

        });

        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}




}

 

// --------------------Move pict-------------------
    $("#sortable").sortable({
      items: "li",
      cursor: 'move',
      opacity: 0.6,
      update: function() {
          sendOrderToServer();
      }
    });

    function sendOrderToServer() {

        var order = [];
        $('li.row1').each(function (index, element) {
            order.push({
                id: $(this).attr('data-id'),
                position: index + 1
            });
        });

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "update_order",
            data: {
                order: order,
            },
            success: function (response) {
                if (response.status == "success") {
                    console.log(response);
                } else {
                    console.log(response);
                }
            }
        });

    }


    // ----------------Ajax Gallery---------------------
    var str = window.location.pathname;
    if (str.startsWith("/admin/gallery")||str.startsWith("/all_g")) {
    function ajaxLoad(filename, content) {
        content = typeof content !== 'undefined' ? content : 'content';
        $.ajax({
            type: "GET",
            url: filename,
            contentType: false,
            success: function (data) {
                $("#" + content).html(data);
                $(".summernote_galery").summernote('code');

    // --------------Charateres counting-------------------
                var maxCharactersT = 191;
                $('#characterTitle').text(maxCharactersT + ' Lettres Restantes');
                $('#title').keyup(function () {
                    var textLength = $(this).val().length;
                    if (textLength >= maxCharactersT) {
                        $('#characterTitle').text('Vous avez atteint la limite de ' + maxCharactersT + ' lettres');
                    } else {
                        var count = maxCharactersT - textLength;
                        $('#characterTitle').text(count + ' Lettres Restantes');
                    }
                });

                var maxCharacters = 255;
                $('#characterLeft').text(maxCharacters + ' Lettres Restantes');
                $('#focus').keyup(function () {
                    var textLength = $(this).val().length;
                    if (textLength >= maxCharacters) {
                        $('#characterLeft').text('Vous avez atteint la limite de ' + maxCharacters + ' lettres');
                    } else {
                        var count = maxCharacters - textLength;
                        $('#characterLeft').text(count + ' Lettres Restantes');
                    }
                });
            $('#modal_btn').click(function(e){
                var form = $('form#frm');
                var data = {
                    id_page: $('#id_page_g').val(),
                    title: $('#title').val(),
                    description: $('#focus').val(),
                    description_page: $('#focus_p').val(),
                    is_featured: $("#is_featured").is(':checked')  ? 1 : 0,
                    is_main: $("#is_main").is(':checked')  ? 1 : 0,
                   
                    
                };
       
                var url = form.attr("action");
    
                console.log(form,data, url);
    
                $.ajax({
                    type: form.attr('method'),
                    url: url,
                    data: data,
                    cache: false,
                    success: function (data) {
                        $('.is-invalid').removeClass('is-invalid');
                        if (data.fail) {
                            for (control in data.errors) {
                                $('input[name=' + control + ']').addClass('is-invalid');
                                $('#error-' + control).html(data.errors[control]);
                            }
                        } else {
                            $('#modalForm').modal('hide');
                            document.location.reload();
                       }
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        console.log("Error: " + errorThrown + xhr + textStatus );
                        console.log( xhr  );
                    }
                });
                return false;
    
            });
    
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    }
    
    $('#modalForm').on('show.bs.modal', function (event) {
        var btn = $(event.relatedTarget);
        ajaxLoad(btn.data('href'), 'modal_content');
    });
    
    $('#modalForm').on('shown.bs.modal', function () {
        $('#focus').trigger('focus')
    });

    // ------------Alert MSG DELETE---------------------


        $(".remove").click(function () {

            if (confirm('Êtes-vous sûr de vouloir supprimer ?')) {
                var url = $(this).attr('href');
                $.ajax({

                    url: url,

                    type: 'DELETE',

                    error: function () {

                        alert('Something is wrong');

                    },

                    success: function (data) {
                        $(".remove").remove();
                        alert("Record removed successfully");

                    }

                });

            }

        });


    }
    // -------------------------Edit Plan--------------
    
  
    
});
