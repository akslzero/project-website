
/* Ini script untuk progress bar hijau */
$(document).ready(function () {
    let currentStep = 0;
    const steps = $(".form-step");
    const progress = $("#progress");
    
    function updateStep() {
        steps.removeClass("active");
        $(steps[currentStep]).addClass("active");
        progress.css("width", ((currentStep + 1) / steps.length) * 100 + "%");
    }
    
    $(".next").click(function () {
        if (currentStep < steps.length - 1) {
            currentStep++;
            updateStep();
        }
    });
    
    $(".prev").click(function () {
        if (currentStep > 0) {
            currentStep--;
            updateStep();
        }
    });
});



/* Ini script untuk form, filter, tabel, dengan ajax method post dan get */
        $(document).ready(function () {
            $("#search578").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#dataTable578 tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });

            function warnaRandom() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }

            $("#kirim_578").click(function (event) {
                event.preventDefault();
                var nama = $("#nama_578").val().trim();
                var jk = $("#jk_578").val().trim();
                var notlp = $("#notlp_578").val().trim();
                var email = $("#email_578").val().trim();
                var ttl = $("#ttl_578").val().trim();
                var alamat = $("#alamat_578").val().trim();
                
                $(".reset").click(function(){
                    $("#dataTable578").empty()
                    
            });

                var randomColor = warnaRandom();
                $("#dataTable578").attr({
                    "style" : "background-color: " + randomColor + " ;padding: 10px;color: white;",
                    "title" : "Tabel578"
                });

                if (nama !== "") {
                    $.post("server_post578.php", {
                        nama: nama,
                        jk: jk,
                        notlp: notlp,
                        email: email,
                        ttl: ttl,
                        alamat: alamat,
                    }, function (response) {
                        console.log("Server response:", response);
                        var newRow = "<tr><td>" + nama + "</td><td>" + jk + "</td><td>" + notlp + "</td><td>" + email + "</td><td>" + ttl + "</td><td>" + alamat + "</td><tr>";
                        $("#dataTable578").append(newRow);
                        $("#nama_578, #jk_578, #notlp_578, #email_578, #ttl_578, #alamat_578").val("");
                    }).fail(function () {
                        alert("Terjadi kesalahan saat mengirim data.");
                    });
                } else {
                    alert("Harap isi semua field!");
                }
            });
        });

        $(document).ready(function () {
            $("#search576").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#dataTable576 tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        
            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
            $("#kirim_576").click(function (event) {
                event.preventDefault(); 
                var pekerjaan = $("#pekerjaan_576").val().trim();
                var penghasilan = $("#penghasilan_576").val().trim();
                var jumlah = $("input[name='jml_576']:checked").val();
                var alamat = $("#alamat_576").val().trim();
                var nomor = $("#nomor_576").val().trim();
        
                var randomColor = getRandomColor();
                $("#dataTable576").attr({
                    "style" : "background-color: " + randomColor + " ;padding: 10px;color: white;",
                    "title" : "Tabel576"
                });
        
                $(".reset").click(function(){
                    $("#dataTable576").empty()
                    
            });
                if (pekerjaan !== "") {
                    $.post("server_post576.php", {
                        pekerjaan: pekerjaan,
                        penghasilan: penghasilan,
                        jumlah: jumlah,
                        alamat: alamat,
                        nomor: nomor
                    }, function (response) {
                        console.log("Server response:", response);
                        var newRow = "<tr><td>" + pekerjaan + "</td><td>" + penghasilan + "</td><td>" + jumlah + "</td><td>" + alamat + "</td><td>" + nomor + "</td></tr>";
                        $("#dataTable576").append(newRow);
                        $("#pekerjaan_576, #penghasilan_576, #alamat_576, #nomor_576").val("");
                        // Menambahkan atribut CSS dan menampilkan popup
                    })
                } else {
                    alert("Harap isi semua field!");
                }
            });
        });
            



    $(document).ready(function () {
        $("#search579").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#dataTable579 tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });

        function warnaRandom() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        $("#kirim_579").click(function (event) {
            event.preventDefault();
    
            var sekolah = $("#sekolah_579").val().trim();
            var jurusan = $("#jr_579").val().trim();
            var alamat = $("#al_579").val().trim();
            var masuk = $("#th_579").val().trim();
            var ipk = $("#ipk_579").val().trim();
            var nomor = $("#nim_579").val().trim();
            var file = $("#file_579")[0].files.length > 0 ? $("#file_579")[0].files[0].name : "";
            
            $(".reset").click(function(){
                $("#dataTable579").empty()
            
        });

            var randomColor = warnaRandom();
            $("#dataTable579").attr({
                "style" : "background-color: " + randomColor + " ;padding: 10px;color: white;",
                "title" : "Tabel579"
            });

            if (sekolah !== "" ) {
                $.get("server_get579.php", {
                    sekolah: sekolah,
                    alamat: alamat,
                    masuk: masuk,
                    jurusan: jurusan,
                    ipk: ipk,
                    nomor: nomor,
                    file: file
                }, function (response) {
                    console.log("Server response:", response);
                    var newRow = "<tr><td>" + sekolah + "</td><td>" + alamat + "</td><td>" + masuk + "</td><td>" + jurusan + "</td><td>" + ipk + "</td><td>"+ nomor + "</td><td>"+ file + "</td></tr>";
                    $("#dataTable579").append(newRow);
                    $("#sekolah_579, #jr_579, #al_579, #th_579, #ipk_579, #nim_579").val('');
                    $("#file_579").val('');
                }).fail(function () {
                    alert("Terjadi kesalahan saat mengirim data.");
                });
            } else {
                alert("Harap isi semua field!");
            }
        });

        });
   