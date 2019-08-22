<div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Data penduduk</h2>
        <a href="<?= base_url('admin/penduduk/tambah'); ?>" class="btn btn-primary btn-xs pull-right"><b>Tambah penduduk</b></a>
    </header>

    <div class="content-inner">
        <?= $this->session->flashdata('message'); ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Usia</th>
                    <th>Dusun</th>
                    <th>RT</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($penduduk as $row) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['nik'] ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['gender']; ?></td>
                        <td><?= $row['usia']; ?></td>
                        <td><?= $row['dusun']; ?></td>
                        <td><?= $row['rt']; ?></td>
                        <td><?= $row['pendidikan']; ?></td>
                        <td><?= $row['pekerjaan']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/penduduk/edit/' . $row['nik']); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"> </span></a> |
                            <a onclick="return confirm('Anda yakin mau menghapus data penduduk ini?')" href="<?= base_url('admin/penduduk/hapus/' . $row['nik']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"> </span></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>