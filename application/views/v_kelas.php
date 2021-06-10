<script>
function submit(x) {
    if (x == 'add') {
        $('#kelasModal .modal-title').html('Tambah Kelas');
        $('[name="idkelas"]').val("");
        document.getElementById("formKelas").reset();
        CKEDITOR.instances['editor'].setData("")
        $('#viewfoto').attr('src', '<?=base_url();?>uploads/image/noimage.jpeg');
        $('[name="cover"]').prop('required', true);
    } else {
        $('#kelasModal').modal('show');
        $('#kelasModal .modal-title').html('Edit Kelas');
        $('[name="cover"]').prop('required', false);

        $.ajax({
            type: "POST",
            data: {
                id: x
            },
            url: '<?=base_url();?>kelas/view',
            dataType: 'json',
            success: function(data) {
                $('[name="idkelas"]').val(data.idkelas);
                $('[name="nama"]').val(data.nama);
                $('[name="tgl_awal"]').val(data.tgl_awal);
                $('[name="tgl_akhir"]').val(data.tgl_akhir);
                $('[name="jam_awal"]').val(data.jam_awal);
                $('[name="jam_akhir"]').val(data.jam_akhir);
                $('[name="tempat"]').val(data.tempat);
                $('[name="jumlah"]').val(data.jumlah);
                $('[name="harga"]').val(data.harga);
                $('[name="instruktur"]').val(data.instruktur);
                CKEDITOR.instances['editor'].setData(data.deskripsi)
                $('[name="cover_lama"]').val(data.file);
                $('#viewfoto').attr('src', '<?=base_url();?>uploads/image/' + data.file);
            }
        });
    }
}

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
<h1 class="h3 mb-2 text-gray-800">Data Kelas</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="#" class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#kelasModal"
            onclick="submit('add');">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="25">NO</th>
                        <th>COVER</th>
                        <th>NAMA KELAS</th>
                        <th>TGL & JAM MULAI</th>
                        <th>TGL & JAM SELESAI</th>
                        <th>TEMPAT</th>
                        <th>JUMLAH</th>
                        <th width="100">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1; foreach($kelas as $row): ?>
                    <tr>
                        <td><?= $n++; ?></td>
                        <td>
                            <img src="<?=base_url('uploads/image/').$row['file']; ?>" alt="Cover" width="100"
                                height="100">
                        </td>
                        <td><?= ucwords($row['nama']); ?></td>
                        <td><?= date('d/m/Y',strtotime($row['tgl_awal'])).' - '.date('d/m/Y',strtotime($row['tgl_akhir'])); ?>
                        </td>
                        <td><?= $row['jam_awal'].' - '.$row['jam_akhir'].' WIT'; ?></td>
                        <td><?= $row['tempat']; ?></td>
                        <td><?= $row['jumlah'].' Orang'; ?></td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Ubah Data" onclick="submit(<?=$row['idkelas'];?>)"><i
                                    class="fas fa-edit"></i></a>
                            <a href="<?=base_url('kelas/hapus/');?><?=$row['idkelas'];?>"
                                class="btn btn-danger btn-sm btn-hapus" data-toggle="tooltip" data-placement="top"
                                title="Hapus Data"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="kelasModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="kelasModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('kelas/save');?>" method="post" enctype="multipart/form-data" id="formKelas">
                <div class="modal-header">
                    <h5 class="modal-title" id="kelasModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama">Nama Kelas</label>
                                <input type="hidden" name="idkelas">
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tgl_awal">Tanggal Mulai</label>
                                <input class="form-control" type="date" name="tgl_awal" value="<?=date('Y-m-d');?>"
                                    id="tgl_awal">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tgl_akhir">Tanggal Selesai</label>
                                <input class="form-control" type="date" name="tgl_akhir" value="<?=date('Y-m-d');?>"
                                    id="tgl_akhir">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="jam_awal">Jam Mulai</label>
                                <input class="form-control" type="time" name="jam_awal" value="<?=date('H:i');?>"
                                    id="jam_awal">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="jam_akhir">Jam Selesai</label>
                                <input class="form-control" type="time" name="jam_akhir" value="<?=date('H:i');?>"
                                    id="jam_akhir">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control uang" id="harga" name="harga" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jumlah">Kapasitas</label>
                                <input type="text" class="form-control uang" id="jumlah" name="jumlah" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="instruktur">Nama Instruktur</label>
                                <input type="text" class="form-control" id="instruktur" name="instruktur" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="tempat">Alamat Tempat Kelas</label>
                                <textarea name="tempat" id="tempat" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="editor" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="cover">Cover Kelas</label>
                                <div style="border:1px solid;height:120px;margin-bottom:25px;width:120px;padding:10px;">
                                    <img src="" alt="Cover" width="100" height="100" id="viewfoto">
                                </div>
                                <input type="hidden" name="cover_lama">
                                <input type="file" class="form-control-file" id="cover" name="cover"
                                    onchange="preview_foto(event)" aria-describedby="file_help">
                                <small id="file_help" class="form-text text-muted">Tipe foto yang di izinkan <b>.jpg
                                        .jpeg .png</b>, Ukuran maksimum foto <b>2 MB</b>.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer float-left">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                </div>
                <div class="modal-footer float-right">
                    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>