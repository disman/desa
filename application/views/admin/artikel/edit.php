<div id="content">
    <header>
        <h2 class="page_title">Update artikel</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <?php echo form_open_multipart('admin/artikel/edit', array('method' => 'POST')); ?>
            <input type="hidden" name="id" value="<?= $artikel['id']; ?>">
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" id="title" value="<?= $artikel['title']; ?>">
                <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <div class="col-sm-2">
                    <img src="<?= base_url('upload_file/images/' . $artikel['image']); ?>" class="img-thumbnail" style="width:100px; height:80px;">
                </div>
                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" />
                <input type="hidden" name="old_image" value="<?php echo $artikel['image']; ?>" />
                <div class="invalid-feedback">
                    <?= form_error('image', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <br><br>

            <div class="form-group">
                <label for="content">Artikel</label>
                <textarea class="form-control summernote" placeholder="Artikel" name="content"><?= $artikel['content']; ?></textarea>
                <?= form_error('content', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="clearfix">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>