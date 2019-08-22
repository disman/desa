<div id="content">
    <header>
        <h2 class="page_title">Update kategori</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <form action="<?= base_url('admin/kategori/update'); ?>" method="post">
                <input type="hidden" name="id" value="<?= $kategori['id']; ?>">
                <div class="form-group">
                    <label for="title">Kategori</label>
                    <input type="text" name="category" class="form-control" value="<?= $kategori['category']; ?>">
                </div>
                <div class="clearfix">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>