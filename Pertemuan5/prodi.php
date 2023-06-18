<h2>Selamat Datang di Halaman Program Studi Universitas Muhammadiyah Sumatera Utara</h2>
<div class="row">
    <div class="col-sm-10">
        <label>Nama Prodi</label>
        <input type="text" class="form-control" placeholder="Input Nama Prodi" id="nama_prodi">
        <p id = "lihat_nama_prodi" class = "peringatan"></p>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-info mt-4" id="simpan_prodi">Simpan</button>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Progran Studi</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

<script>
    $("#simpan_prodi").click(function(){
        var nama_prodi = $("#nama_prodi").val()
        if (nama_prodi == "") {
        $("#lihat_nama_prodi").text("Nama Prodi Masih Kosong!")
    }else{
        $("lihat_nama_prodi").text("")
        $.ajax({
            type: "POST",
            url: "controller/simpan_prodi.php",
            data: "nama_prodi=" + nama_prodi,
            success: function(data){
                console.log(data)
            }
        })
    }
    })
</script>