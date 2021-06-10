<script>
function emailSend(x) {
    document.getElementById("formmember").reset();
    CKEDITOR.instances['editor'].setData('');
    $('#memberModal').modal('show');

    $.ajax({
        type: "POST",
        data: {
            id: x
        },
        url: '<?=base_url();?>member/view',
        dataType: 'json',
        success: function(data) {
            $('[name="email"]').val(data.email);
            $('[name="judul"]').val(data.judul);
            CKEDITOR.instances['editor'].setData(data.isi);
        }
    });
}
</script>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Member</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="25">NO</th>
                        <th>NAMA MEMBER</th>
                        <th>NO HP</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th width="200">KELAS DIIKUTI</th>
                        <th width="100">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1; foreach($member as $row): ?>
                    <tr>
                        <td><?= $n++; ?></td>
                        <td><?= ucwords($row['nama_lengkap']); ?></td>
                        <td><?= $row['no_hp']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td>
                            <?php foreach(listKelasByMember($row['idmember']) as $row2): ?>
                            <span class="badge badge-info"><?= $row2['nama']; ?></span>
                            <?php endforeach; ?>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Kirim Email" onclick="emailSend(<?=$row['idmember'];?>)"><i
                                    class="fas fa-envelope"></i> Email</a>
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
            <form action="<?=base_url('member/kirim_email');?>" method="post" id="formmember">
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
                                <input type="hidden" name="email">
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