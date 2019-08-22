<div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
    <h1 class="hidden-sm hidden-xs">Navigation</h1>
    <ul>
        <?php foreach ($menu as $row) : ?>
            <?php if ($title == $row['title']) : ?>
                <li class="link active">
                <?php else : ?>
                <li class="link">
                <?php endif; ?>
                <a href="<?= base_url($row['url']); ?>">
                    <span class="<?= $row['icon']; ?>" aria-hidden="true"></span>
                    <span class="hidden-sm hidden-xs"><?= $row['title']; ?></span>
                </a>
            </li>
        <?php endforeach; ?>

        <li class="link">
            <a href="#collapse-profil" data-toggle="collapse" aria-controls="collapse-profil">
                <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Profil</span>
            </a>
            <ul class="collapse collapseable" id="collapse-profil">
                <li><a href="<?= base_url('admin/profil/desa'); ?>">Profil desa</a></li>
                <li><a href="<?= base_url('admin/profil/pemdes'); ?>">Profil pemdes</a></li>
                <li><a href="<?= base_url('admin/profil/bpd'); ?>">Profil BPD</a></li>
            </ul>
        </li>

        <li class="link settings-btn">
            <a href="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Settings</span>
            </a>
        </li>
    </ul>
</div>