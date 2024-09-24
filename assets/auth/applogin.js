  $('#form').submit(function(e) {
            e.preventDefault();
            var form = $('#form')[0];
            var data = new FormData(form);
            //  $('#login').html("<i class='fa fa-refresh fa-spin'></i>Loading").attr('disabled', true);
            $('#spin').html("<div class='loader'><div class ='loader__spinner'></div></div>").attr('disabled', true);
            $.ajax({
                url: '<?php echo site_url('login_admin/login') ?>',
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
                            $('#login').text('Login'); //change button text
                            $('#login').attr('disabled', false); //set button enable
                            $('#spin').hide();
                            Swal.fire({
                                position: "top-midle",
                                icon: "success",
                                title: "Anda Berhasil Login",
                                showConfirmButton: false,
                                timer: 2500,

                            }).then((result) => {
                                window.location = '<?php echo base_url('dis/dashboard') ?>';
                            })

                        }, 1500);


                    } else {
                        setTimeout(function() {
                            $('#login').text('Login'); //change button text
                            $('#login').attr('disabled', false); //set button enable
                            Swal.fire({
                                title: data.mess,
                                text: "Cek kembali informasi login anda.",
                                icon: data.type,
                            }).then((result) => {
                                window.location.reload();
                            })
                        }, 1500);

                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    setTimeout(function() {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",

                        });
                        $('#login').text('Login'); //change button text
                        $('#login').attr('disabled', false); //set button enable
                    }, 2000);

                }
            });

        });