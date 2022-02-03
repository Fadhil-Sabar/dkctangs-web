<div class="content-wrapper">
    <div class="content">
        <div class="container">
            <div class="container-fluid">
                <!-- DONUT CHART -->
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Perbandingan Kecamatan</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="chartJk" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>

                    <!-- /.card-body -->
                </div>


            </div>
        </div>
    </div>
</div>

<!-- ChartJS -->
<script src="<?= base_url() ?>dashboard/plugins/chart.js/Chart.min.js"></script>
<!-- jQuery -->
<script src="<?= base_url() ?>dashboard/plugins/jquery/jquery.min.js"></script>
<script>
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#chartJk').get(0).getContext('2d')
    var donutData = {
        labels: [
            'Laki-laki',
            'Perempuan'
        ],
        datasets: [{
            data: [<?= $pria ?>, <?= $wanita ?>],
            backgroundColor: ['#f56954', '#3c8dbc'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'pie',
        data: donutData,
        options: donutOptions
    })
</script>