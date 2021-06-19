<script>
function submit(x) {
    if (x == 'add') {
        $('#memberModal .modal-title').html('Tambah member');
        document.getElementById("formmember").reset();
        CKEDITOR.instances['editor'].setData('');
    } else {
        $('#memberModal').modal('show');
        $('#memberModal .modal-title').html('Kirim Email');

        $.ajax({
            type: "POST",
            data: {
                id: x
            },
            url: '<?=base_url();?>member/view',
            dataType: 'json',
            success: function(data) {
                $('[name="idmember"]').val(data.idmember);
                $('[name="judul"]').val(data.judul);
                CKEDITOR.instances['editor'].setData(data.isi);
            }
        });
    }
}
</script>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kelas Saya</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <a href="#" class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#memberModal"
            onclick="submit('add');">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah</span>
        </a> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="25">NO</th>
                        <th>GAMBAR</th>
                        <th>NAMA KELAS</th>
                        <th>STATUS BAYAR</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1; foreach($list_kelas as $row): ?>
                    <tr>
                        <td><?= $n++; ?></td>
                        <td>
                            <img src="<?=base_url('uploads/image/').$row['file']; ?>" alt="Cover" width="100"
                                height="100">
                        </td>
                        <td><?= ucwords($row['nama']); ?></td>
                        <td><span
                                class="badge <?=$row['status_bayar']=='Belum Bayar'?'badge-danger':'badge-success';?>"><?= $row['status_bayar']; ?></span>
                        </td>
                        <td><span
                                class="badge <?=$row['status']=='Pending'?'badge-danger':'badge-success';?>"><?= $row['status']; ?></span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="memberModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="memberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('member/save');?>" method="post" id="formmember">
                <div class="modal-header">
                    <h5 class="modal-title" id="memberModalLabel">Kirim Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" name="idmember">
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea name="pesan" id="editor" cols="30" rows="15" class="form-control"></textarea>
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