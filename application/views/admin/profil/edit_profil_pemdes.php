<div id="content">
    <header>
        <h2 class="page_title">Update profil pemerintah desa</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <?php echo form_open('admin/profil/updateProfilPemdes', array('method' => 'POST')); ?>
            <input type="hidden" name="id" value="<?= $profilPemdes['id']; ?>">

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" value="<?= $profilPemdes['judul']; ?>">
                <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="title">Profil pemdes</label>
                <textarea class="form-control summernote" placeholder="Profil pemerintah desa" name="profil"><?= $profilPemdes['profil']; ?></textarea>
                <?= form_error('profil', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="clearfix">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>