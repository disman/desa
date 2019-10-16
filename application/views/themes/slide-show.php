<!-- section featured -->
<section id="featured">

    <!-- slideshow start here -->

    <div class="camera_wrap" id="camera-slide">

        <?php foreach ($news as $row) : ?>
            <div data-src="<?php echo base_url('public/'); ?>img/slides/camera/slide1/img1.jpg">
                <div class="camera_caption fadeFromLeft">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <h2 class="animated fadeInDown"><strong>News Update <span class="colored">Kabar Desa</span></strong></h2>
                                <h5 class="animated fadeInUp"> <?= $row['title']; ?></h5>
                                <a href="<?php echo base_url(); ?>artikel/readmore/<?php echo $row['id']; ?>" class="btn btn-success btn-large animated fadeInUp">
                                    <i class="icon-link"></i> Selengkapnya
                                </a>
                                <a href="#" class="btn btn-theme btn-large animated fadeInUp">
                                    <i class="icon-download"></i> Download
                                </a>
                            </div>
                            <div class="span6">
                                <img src="<?= base_url('upload_file/images/' . $row['image']); ?>" alt="" class="animated bounceInDown delay1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- slide 1 here -->
        <!-- <div data-src="<?php //echo base_url('public/'); 
                            ?>img/slides/camera/slide1/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <h2 class="animated fadeInDown"><strong>Great template for <span class="colored">multi
                                        usage</span></strong></h2>
                            <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi
                                dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne,
                                dolores appetere vim ut. Sea no tamquam reprimique.</p>
                            <a href="#" class="btn btn-success btn-large animated fadeInUp">
                                <i class="icon-link"></i> Read more
                            </a>
                            <a href="#" class="btn btn-theme btn-large animated fadeInUp">
                                <i class="icon-download"></i> Download
                            </a>
                        </div>
                        <div class="span6">
                            <img src="<?php //echo base_url('public/'); 
                                        ?>img/slides/camera/slide1/screen.png" alt="" class="animated bounceInDown delay1" />
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>

    <!-- slideshow end here -->

</section>
<!-- /section featured -->