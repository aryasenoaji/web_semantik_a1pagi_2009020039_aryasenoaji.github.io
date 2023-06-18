<div class="row">
        <div class="col-sm-8">
            <p id="alert_berhasil"></p>
            <h4>Data Mahasiswa : </h4>
                <table id="tabel_mahasiswa" class="table table-dark table-striped">
                    <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tanggal Lahir</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        </tr>
                    <tr>
                        <td>200906</td>
                        <td>Bang Messi</td>
                        <td>15/05/2003</td>
                        <td>Teknologi Informasi</td>
                        <td>Tuasa</td>
                    </tr>
                    <tr>
                        <td>200901</td>
                        <td>Bang Ronaldo</td>
                        <td>15/05/2002</td>
                        <td>Teknologi Informasi</td>
                        <td>Portugal</td>
                    </tr>
                    <tr>
                        <td>200902</td>
                        <td>Bang Mbappe</td>
                        <td>15/05/2006</td>
                        <td>Teknologi Informasi</td>
                        <td>Dolok Sanggul</td>
                    </tr> 
                </table>
        </div>
        <div class="col-sm-4">
            <h4>Form Input Mahasiswa : </h4>
            
            <div class="form-group">
                <label for="">NPM : </label>
                <input type="number" id="npm" class="form-control" placeholder="Masukan NPM">
                <p id="lihat_npm" class="peringatan"></p>
            </div>
            <div class="form-group">
                <label for="">Nama Mahasiswa : </label>
                <input type="text"  id="nama_mahasiswa" class="form-control" placeholder="Masukan Nama Mahasiswa">
                <p id="lihat_nama_mahasiswa"
                class="peringatan"></p>
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir : </label>
                <input type="date"  id="tgl_lahir" class="form-control">
                <p id="lihat_tgl_lahir"
                class="peringatan"></p>
            </div>
            <div class="form-group">
                <label for="">Jurusan : </label>
                <select  id="jurusan" class="form-control">
                    <option value="" selected>Pilih Jurusan</option>
                    <option>Sistem Informasi</option>
                    <option>Teknik Informasi</option>
                    <option>Sains Data</option>
                </select>
                <p id="lihat_jurusan"
                class="peringatan"></p>   
            </div>
            <div class="form-group">
                <label for="">Alamat : </label>
                <textarea  id="alamat" class="form-control" placeholder="Isi Alamat Anda Di Sini"></textarea>
                <p id="lihat_alamat"
                class="peringatan"></p>
            </div>
            <div class="form-group mt-2" style="text-align: right;">
                <button class="btn btn-danger">Batal</button>
                <button class="btn btn-success" 
                id="simpan">Simpan</button>
            </div>
        </div>
    </div>

    <script>
        $("#simpan").click(function(){
    var NPM = $("#npm").val()
    if (NPM == "") {
        $("#lihat_npm").text("NPM Masih Kosong!")
    }else{
        $("#lihat_npm").text("")
    }

    var nama_mahasiswa = $("#nama_mahasiswa").val()
    if (nama_mahasiswa == "") {
        $("#lihat_nama_mahasiswa").text("Nama Mahasiswa Masih Kosong!")
    }else{
        $("#lihat_nama_mahasiswa").text("")
    }

    var tgl_lahir = $("#tgl_lahir").val()
    if (tgl_lahir == "") {
        $("#lihat_tgl_lahir").text("Tanggal Lahir Belum di Tentukan!")
    }else{
        $("#lihat_tgl_lahir").text("")
    }

    var jurusan = $("#jurusan").val()
    if (jurusan == "") {
        $("#lihat_jurusan").text("Jurusan Belum di Pilih!")
    }else{
        $("#lihat_jurusan").text("")
    }

    var alamat = $("#alamat").val()
    if (alamat == "") {
        $("#lihat_alamat").text("alamat Masih Kosong!")
    }else{
        $("#lihat_alamat").text("")
    }

    if (NPM != "" && nama_mahasiswa != "" && tgl_lahir != "" && 
    jurusan != "" && alamat != "") {
        $("#alert_berhasil").html(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SusccesFully</strong> Data Berhasil di Tambahkan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `)
        var tabel= document.getElementById("tabel_mahasiswa")
        var baris = tabel.insertRow(1)
        var kolom_npm = baris.insertCell(0)
        var kolom_mahasiswa = baris.insertCell(1)
        var kolom_tgl_lahir = baris.insertCell(2)
        var kolom_jurusan = baris.insertCell(3)
        var kolom_alamat= baris.insertCell(4)

        kolom_npm.innerHTML = NPM
        kolom_mahasiswa.innerHTML = nama_mahasiswa
        kolom_tgl_lahir.innerHTML = tgl_lahir
        kolom_jurusan.innerHTML = jurusan
        kolom_alamat.innerHTML = alamat

        $("#npm").val("")
        $("#nama_mahasiswa").val("")
        $("#alamat").val("")
    }
})
    </script>