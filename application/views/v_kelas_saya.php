<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kelas Saya</h1>
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