<div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Data kategori</h2>
        <a href="" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#tambahKategori"><b>Tambah kategori</b></a>
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
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($kategori as $row) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['category']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/kategori/edit/' . $row['id']); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"> </span></a> |
                            <a onclick="return confirm('Anda yakin mau menghapus kategori ini?')" href="<?= base_url('admin/kategori/hapus/' . $row['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"> </span></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<!-- Modal tambah-->
<div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby=kategoriModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="kategoriModalLabel">Tambah kategori</h4>
            </div>
            <form action="<?= base_url('admin/kategori'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="category" class="form-control" id="category" placeholder="Kategori" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>