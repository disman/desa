<section id="content">
    <div class="container">

        <div class="row">
            <div class="span12">
                <div class="row">
                    <?php foreach ($news as $row) : ?>
                        <div class="span4">
                            <div class="box flyIn">
                                <div class="icon">
                                    <i class="ico icon-circled icon-bgdark icon-dropbox active icon-3x"></i>
                                </div>
                                <div class="text">
                                    <h4>Kabar <strong>Terkini</strong></h4>
                                    <h6><?= $row['title']; ?></h6>
                                    <a href="<?php echo base_url(); ?>artikel/readmore/<?php echo $row['id']; ?>" class="readmore">Selengkapnya <i class="icon-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="solidline"></div>
            </div>
        </div>