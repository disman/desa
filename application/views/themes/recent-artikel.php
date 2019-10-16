<section id="works">
    <div class="container animated-slow flyIn">
        <div class="row">
            <div class="span12">
                <h4 class="title">Recent <strong>Artikel</strong></h4>
                <div class="row">

                    <div class="grid cs-style-4">
                        <?php foreach ($recent as $row) : ?>
                            <div class="span3">
                                <div class="item">
                                    <figure>
                                        <div>
                                            <img src="<?= base_url('upload_file/images/' . $row['image']); ?>" alt="" />
                                        </div>
                                        <figcaption>
                                            <div>
                                                <span>
                                                    <a href=" #"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                                                </span>
                                                <span>
                                                    <a href="<?php echo base_url(); ?>artikel/readmore/<?php echo $row['id']; ?>" class="btn btn-medium btn-theme">Lihat Artikel</a>
                                                </span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>