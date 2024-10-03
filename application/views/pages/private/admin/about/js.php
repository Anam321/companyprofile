<script>
    var table; // for table

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax
    }

    function showAlert(type, msg) {

        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        toastr.options.extendedTimeOut = 1000; //1000

        toastr.options.timeOut = 3000;
        toastr.options.fadeOut = 250;
        toastr.options.fadeIn = 250;

        toastr.options.positionClass = 'toast-top-center';
        toastr[type](msg);
    }


    $(document).ready(function() {
        $('#summernote').summernote({
            height: 770,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                ['font', ['fontname', 'fontsize', 'fontsizeunit', 'color',
                    'strikethrough', 'superscript', 'subscript'
                ]],

                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],

                ['insert', ['table', 'hr', 'link', 'picture', 'video']],
                ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']],
            ]
        });

    });


    $('#form').submit(function(e) {
        e.preventDefault();
        var form = $('#form')[0];
        var data = new FormData(form);

        $('#btnSave').attr('disabled', true); //set button disable

        $('#btnSave').html(
            "<div class='text-center'><div class='spinner-border' role='status' ><span class='visually-hidden'>Loading...</span></div></div>"
        );

        $.ajax({
            url: "<?php echo site_url('about/update_data') ?>",
            type: "POST",
            //contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            data: data,
            dataType: "JSON",

            success: function(data) {
                if (data.status == '00') {
                    setTimeout(function() {
                        $('#btnSave').text('Save'); //change button text
                        $('#btnSave').attr('disabled', false); //set button enable
                        Swal.fire({
                            position: "top-midle",
                            icon: "success",
                            title: data.mess,
                            showConfirmButton: false,
                            timer: 1500,

                        }).then((result) => {
                            window.location.reload();
                        })

                    }, 2000);
                } else {
                    Swal.fire({
                        position: "top-midle",
                        icon: "error",
                        title: data.mess,
                        showConfirmButton: false,
                        timer: 2000,

                    })
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                type = 'error';
                msg = 'Error adding / update data';
                setTimeout(function() {
                    showAlert(type, msg); //utk show alert
                    $('#btnSave').text('Save'); //change button text
                    $('#btnSave').attr('disabled', false); //set button enable
                }, 2000);

            }
        });

    });
</script>