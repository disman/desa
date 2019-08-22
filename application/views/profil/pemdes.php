<section id="content">
    <div class="container">
        <div class="row">

            <div class="span8">
                <?php foreach ($profilPemdes as $row) : ?>
                    <article>
                        <div class="row">
                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><a href="#"><?= $row['judul']; ?></a></h3>
                                    </div>
                                </div>
                                <div class="meta-post">
                                    <ul>
                                        <li><i class="icon-file"></i></li>
                                        <li>By <a href="#" class="author">Admin</a></li>
                                        <li>On <a href="#" class="date"><?= date('d F Y', $row['date_created']); ?></a></li>
                                    </ul>
                                </div>
                                <div class="post-entry">
                                    <p><?= $row['profil']; ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>