<div id="content">
    <header class="clearfix">
        <h2 class="page_title pull-left">Kumpulan galery</h2>
    </header>

    <div class="content-inner">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>
        <?= $this->session->flashdata('message'); ?>
        <button type="submit" class="btn btn-info btn-large" data-toggle="modal" data-target="#tambahFoto">Tambah Foto</button>
        <button type="submit" class="btn btn-success btn-large">Tambah Video</button>


    </div>
</div>

<!-- Modal tambah-->
<div class="modal fade" id="tambahFoto" tabindex="-1" role="dialog" aria-labelledby=fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="fotoModalLabel">Tambah foto</h4>
            </div>
            <?= form_open_multipart('admin/galery/tambahFoto', ['method' => 'post']); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title">Nama foto</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Nama foto..." autofocus>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan...">
                </div>
                <div class="form-group">
                    <label for="foto">Pilih berkas</label>
                    <input type="file" name="foto" class="form-control" id="foto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>