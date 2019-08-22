<div id="content">
    <header>
        <h2 class="page_title">Tambah opini</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <?php echo form_open_multipart('admin/opini/tambah', array('method' => 'POST')); ?>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Judul..." value="<?= set_value('title'); ?>">
                <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="form-group">
                <label for="content">Opini</label>
                <textarea class="form-control summernote" placeholder="Opini..." name="content"></textarea>
                <?= form_error('content', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="clearfix">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>