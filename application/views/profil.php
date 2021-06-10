<script>
function preview_foto(event) {

    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('viewfoto');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Profil Komunitas</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?=base_url('profil/update');?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Komunitas</label>
                        <input type="hidden" name="idprofil" value="<?=$profil->idprofil;?>">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?=$profil->nama;?>"
                            autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="slogan">Slogan</label>
                        <input type="text" class="form-control" id="slogan" name="slogan" value="<?=$profil->slogan;?>"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="nama_ketua">Nama Ketua</label>
                        <input type="text" class="form-control" id="nama_ketua" name="nama_ketua"
                            value="<?=$profil->nama_ketua;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="6"
                            required><?=$profil->alamat;?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?=$profil->email;?>"
                            placeholder="ex: admin@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telp</label>
                        <input type="text" class="form-control" id="no_telp" name="no_telp"
                            value="<?=$profil->no_telp;?>" placeholder="ex: 0897654123">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="logo">Logo</label>
                    <div style="border:1px solid;height:250px;margin-bottom:25px;">
                        <img src="<?=base_url('uploads/image/');?><?=$profil->logo==''?'noimage.jpeg':$profil->logo;?>"
                            alt="Logo" width="100%" height="247" id="viewfoto">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="logo_lama" value="<?=$profil->logo;?>">
                        <input type="file" class="form-control-file" id="logo" name="logo" aria-describedby="file_help"
                            onchange="preview_foto(event)">
                        <small id="file_help" class="form-text text-muted">Tipe foto yang di izinkan <b>.jpg .jpeg
                                .png</b>, Ukuran maksimum foto <b>2 MB</b>.</small>
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook"
                            value="<?=$profil->facebook;?>" placeholder="ex: www.facebook.com/nama_komunitas">
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram"
                            value="<?=$profil->instagram;?>" placeholder="ex: www.instagram.com/nama_komunitas">
                    </div>
                    <div class="form-group">
                        <label for="youtube">Youtube</label>
                        <input type="text" class="form-control" id="youtube" name="youtube"
                            value="<?=$profil->youtube;?>" placeholder="ex: www.youtube.com/nama_komunitas">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="editor" cols="30" rows="10"><?=$profil->deskripsi;?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="float-left">
                        <a href="<?=base_url('menu');?>" class="btn btn-secondary"><i class="fas fa-times"></i>
                            Dashboard</a>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>
                            Simpan</button>
                    </div>
                </div>
        </form>
    </div>
</div>