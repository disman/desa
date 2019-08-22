<div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Data menu</h2>
        <a href="" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#tambahMenu"><b>Tambah menu</b></a>
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
                    <th>Title</th>
                    <th>URL</th>
                    <th>Icon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($menu as $row) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><?= $row['url']; ?></td>
                        <td><?= $row['icon']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/menu/edit/' . $row['id']); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"> </span></a> |
                            <a onclick="return confirm('Anda yakin mau menghapus menu ini?')" href="<?= base_url('admin/menu/hapus/' . $row['id']); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"> </span></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<!-- Modal tambah-->
<div class="modal fade" id="tambahMenu" tabindex="-1" role="dialog" aria-labelledby=menuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="menuModalLabel">Tambah menu</h4>
            </div>
            <form action="<?= base_url('admin/menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title..." autofocus>
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" name="url" class="form-control" id="url" placeholder="URL...">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" name="icon" class="form-control" id="icon" placeholder="Icon...">
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