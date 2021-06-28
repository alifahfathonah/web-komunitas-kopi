<script>
function submit(x) {
    $('#verifyModal').modal('show');
    $('#verifyModal .modal-title').html('Verifikasi Data');

    $.ajax({
        type: "POST",
        data: {
            id: x
        },
        url: '<?=base_url();?>welcome/view',
        dataType: 'json',
        success: function(data) {
            $('[name="idmengikuti"]').val(data.idmengikuti);
        }
    });
}
</script>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Verifikasi</h1>
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
                        <th width="200">BUKTI PEMBYARAN</th>
                        <th>NAMA KELAS</th>
                        <th>NAMA MEMBER</th>
                        <th>STATUS BAYAR</th>
                        <th>STATUS</th>
                        <th width="100">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1; foreach($verify as $row): ?>
                    <tr>
                        <td><?= $n++; ?></td>
                        <td align="center">
                            <a href="<?=base_url('uploads/bukti_bayar/').$row['bukti_bayar']; ?>" target="_blank"><img
                                    src="<?=base_url('uploads/bukti_bayar/').$row['bukti_bayar']; ?>" alt="Bukti Bayar"
                                    width="100" height="100"></a>
                        </td>
                        <td><?= ucwords($row['nama']); ?></td>
                        <td><?= ucwords($row['nama_lengkap']); ?></td>
                        <td><?= $row['status_bayar']=='Belum Bayar'?'<span class="badge badge-danger">'.$row['status_bayar'].'</span>':'<span class="badge badge-success">'.$row['status_bayar'].'</span>'; ?>
                        </td>
                        <td><?= $row['status']=='Pending'?'<span class="badge badge-danger">'.$row['status'].'</span>':'<span class="badge badge-success">'.$row['status'].'</span>'; ?>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Verifikasi Data" onclick="submit(<?=$row['idmengikuti'];?>)"><i
                                    class="fas fa-check"></i> Verify</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="verifyModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="verifyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="<?=base_url('welcome/verifikasi');?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="verifyModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-danger text-white">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="hidden" name="idmengikuti">
                            <input type="hidden" name="status" value="Verified">
                            <p>Anda yakin akan memverifikasi Pembayaran dan Pendaftaran Kelas ini ?</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer float-left">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                </div>
                <div class="modal-footer float-right">
                    <button type="submit" class="btn btn-primary float-right"><i class="fas fa-chechk"></i>
                        Iya, Verifikasi</button>
                </div>
            </form>
        </div>
    </div>
</div>