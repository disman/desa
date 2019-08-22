<div id="content">
    <header>
        <h2 class="page_title">Update menu</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <form action="<?= base_url('admin/menu/edit'); ?>" method="post">
                <input type="hidden" name="id" value="<?= $editMenu['id']; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= $editMenu['title']; ?>">
                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" name="url" class="form-control" value="<?= $editMenu['url']; ?>">
                    <?= form_error('url', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" name="icon" class="form-control" value="<?= $editMenu['icon']; ?>">
                    <?= form_error('icon', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="clearfix">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>