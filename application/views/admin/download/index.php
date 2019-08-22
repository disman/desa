<div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Kumpulan berkas</h2>
        <a href="" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#tambahBerkas"><b>Tambah berkas</b></a>
    </header>

    <div class="content-inner">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama berkas</th>
                    <th>Download</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($download as $row) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><a href="<?= base_url('upload_file/document/' . $row['berkas']); ?>">Download</a></td>
                        <td>
                            <a onclick="return confirm('Anda yakin mau menghapus berkas ini?')" href="<?= base_url('admin/download/hapus/' . $row['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"> </span> Hapus</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<!-- Modal tambah-->
<div class="modal fade" id="tambahBerkas" tabindex="-1" role="dialog" aria-labelledby=berkasModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="berkasModalLabel">Tambah berkas</h4>
            </div>
            <?= form_open_multipart('admin/download/tambah', ['method' => 'post']); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Nama berkas</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Nama berkas..." autofocus>
                </div>
                <div class="form-group">
                    <label for="berkas">Pilih berkas</label>
                    <input type="file" name="berkas" class="form-control" id="berkas">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>