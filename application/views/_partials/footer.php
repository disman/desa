<div class="row">
    <footer class="clearfix" id="admin-footer">
        <div class="pull-left"><b>Copyright </b>&copy; <?= date('Y'); ?></div>
        <div class="pull-right">Desa Bahari</div>
    </footer>
</div>
</div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!-- Bootstrap js -->
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- My Style js -->
<script src="<?php echo base_url('assets/'); ?>js/style.js' ?>"></script>

<!-- Chosen js -->
<script src="<?php echo base_url('assets/'); ?>vendor/chosen/chosen.jquery.min.js"></script>
<script type="text/javascript">
    var config = {
        '.chosen-select': {},
        '.chosen-select-deselect': {
            allow_single_deselect: true
        },
        '.chosen-select-no-single': {
            disable_search_threshold: 10
        },
        '.chosen-select-no-result': {
            no_result_text: 'Oops, nothing found!'
        },
        '.chosen-select-width': {
            width: "95%"
        }
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
</script>

<!-- Summernote js -->
<script src="<?php echo base_url('assets/'); ?>vendor/summernote/summernote.min.js"></script>
<script type="text/javascript">
    $('.summernote').summernote({
        height: 200
    });
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

<!-- DataTable js -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<!-- Chart js -->
<script src="<?php echo base_url() . 'assets/vendor/chartjs/Chart.min.js' ?>"></script>
<script type="text/javascript">
    var ctx = document.getElementById('chartPenduduk').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'pie',

        data: {
            labels: ['Laki-Laki', 'Perempuan', 'Balita', 'Anak-Anak', 'Remaja', 'Dewasa'],
            datasets: [{
                label: 'Grafik Penduduk',
                data: ['10', '20', '15', '20', '70', '50'],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script type="text/javascript">
    var ctx = document.getElementById('chartKriminal').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',

        data: {
            labels: ['KDRT', 'Pencurian', 'Perkelahian', 'Pembunuhan', 'Pemerkosaan'],
            datasets: [{
                label: 'Grafik Kriminal',
                data: ['50', '20', '70', '10', '3'],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script type="text/javascript">
    var ctx = document.getElementById('chartPenghasilan').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',

        data: {
            labels: ['2015', '2016', '2017', '2018', '2019'],
            datasets: [{
                label: 'Grafik Penghasilan',
                data: ['50', '60', '70', '75', '80'],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<!-- Alert js -->
<script type="text/javascript">
    $('.alert').fadeIn().delay(3000).fadeOut('slow');
</script>

</body>

</html>