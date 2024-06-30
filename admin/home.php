<?php
$sql = "SELECT COUNT(*) FROM `categories`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$cat = $row[0];
?>
<?php
$sql = "SELECT COUNT(*) FROM `pizza`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$pizza = $row[0];
?>
<?php
$sql = "SELECT COUNT(*) FROM `users`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$users = $row[0];
?>
<?php
$sql = "SELECT COUNT(*) FROM `orders`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$orders = $row[0];
?>


<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>
<h1 style="margin-top:80px">Welcome back <b><?php echo $_SESSION['adminusername']; ?></b></h1>
<div class="container" id="dashboard_content">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?php echo $users ?></h3>

                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="http://localhost/OnlinePizzaDelivery/admin/index.php?page=userManage" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?php echo $orders ?></h3>

                    <p>Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="http://localhost/OnlinePizzaDelivery/admin/index.php?page=orderManage" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?php echo $cat ?></h3>

                    <p>categories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tag"></i>
                </div>
                <a href="http://localhost/OnlinePizzaDelivery/admin/index.php?page=categoryManage" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?php echo $pizza ?></h3>

                    <p>Items</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="http://localhost/OnlinePizzaDelivery/admin/index.php?page=menuManage" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row1">
        <!-- DONUT CHART -->
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Top 5 Items</h3>

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
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </div>
    <div class="row">
        <div class="col">
            <!-- LINE CHART -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">User Register Data</h3>

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
                    <div class="chart">
                        <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col">
            <!-- AREA CHART -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Order Data</h3>
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
                    <div class="chart">
                        <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
    <div class="row">
        <div class="col">
            <!-- PIE CHART -->
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Top 5 Address</h3>

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
                    <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <div class="col">
            <!-- STACKED BAR CHART -->
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Payment Mode</h3>

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
                    <div class="chart">
                        <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row1">
        <!-- BAR CHART -->
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Order Status</h3>

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
                <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- jQuery -->
<script src="./assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./assets/dist/js/adminlte.min.js"></script>
<!-- ChartJS -->
<script src="./assets/plugins/chart.js/Chart.min.js"></script>
<script>
    $(function() {

        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        var areaChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{
                    label: '2023',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php
                            $sql = "SELECT orderId, COUNT(*) as orders FROM `orders` WHERE year(orderDate)=YEAR(CURDATE()) GROUP BY month(orderDate);";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                                while ($row = mysqli_fetch_assoc($result))
                                    echo "'" . $row["orders"] . "'" . ","
                            ?>]
                },
                {
                    label: '2023',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [<?php
                            $sql = "SELECT orderId, COUNT(*) as orders FROM `orders` WHERE year(orderDate)=YEAR(CURDATE())-1 GROUP BY month(orderDate);";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                                while ($row = mysqli_fetch_assoc($result))
                                    echo "'" . $row["orders"] . "'" . ","
                            ?>]
                }
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: true,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: true,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: true,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })




        //-------------
        //- LINE CHART -
        //--------------
        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{
                    label: '2023',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php
                            $sql = "SELECT month(joinDate) as month, COUNT(*) as num FROM `users` WHERE year(joinDate)=YEAR(CURDATE()) GROUP BY month(joinDate);";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                                while ($row = mysqli_fetch_assoc($result))
                                    echo "'" . $row["num"] . "'" . ","
                            ?>]
                },
                {
                    label: '2022',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [<?php
                            $sql = "SELECT month(joinDate) as month, COUNT(*) as num FROM `users` WHERE year(joinDate)=YEAR(CURDATE())-1 GROUP BY month(joinDate);";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                                while ($row = mysqli_fetch_assoc($result))
                                    echo "'" . $row["num"] . "'" . ","
                            ?>]
                }
            ]
        }

        var lineChartOptions = {
            maintainAspectRatio: true,
            responsive: true,
            legend: {
                display: true
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: true,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: true,
                    }
                }]
            }
        }
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, lineChartOptions)
        var lineChartData = $.extend(true, {}, lineChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = true

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })




        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [<?php
                        $sql = "SELECT pizza.pizzaId, pizza.pizzaName, COUNT(*) as count FROM orderitems INNER JOIN pizza ON orderitems.pizzaId=pizza.pizzaId GROUP BY pizza.pizzaId ORDER by count DESC LIMIT 5;";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0)
                            while ($row = mysqli_fetch_assoc($result))
                                echo "'" . $row["pizzaName"] . "'" . ","
                        ?>],
            datasets: [{
                data: [<?php
                        $sql = "SELECT pizza.pizzaId, pizza.pizzaName, COUNT(*) as count FROM orderitems INNER JOIN pizza ON orderitems.pizzaId=pizza.pizzaId GROUP BY pizza.pizzaId ORDER by count DESC LIMIT 5;";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0)
                            while ($row = mysqli_fetch_assoc($result))
                                echo "'" . $row["count"] . "'" . ","
                        ?>],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#89m0ef', '#91c0ef'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieData = {
            labels: [<?php
                        $sql = "SELECT address,COUNT(*) as count FROM `orders` GROUP BY address ORDER BY count DESC LIMIT 5;";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0)
                            while ($row = mysqli_fetch_assoc($result))
                                echo "'" . $row["address"] . "'" . ","
                        ?>],
            datasets: [{
                data: [<?php
                        $sql = "SELECT address,COUNT(*) as count FROM `orders` GROUP BY address ORDER BY count DESC LIMIT 5;";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0)
                            while ($row = mysqli_fetch_assoc($result))
                                echo "'" . $row["count"] . "'" . ","
                        ?>],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#89m0ef', '#91c0ef'],
            }]
        }
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = pieData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartData = {
            labels: [
                "Order Placed",
                "Order Confirmed",
                "Preparing your Order",
                "Your order is on the way",
                "Order Delivered",
                "Order Denied",
                "Order Cancelled"
            ],
            datasets: [{
                    label: '2023',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php
                            $sql = "SELECT orderStatus, COUNT(*) as orders FROM `orders`WHERE year(orderDate)=YEAR(CURDATE()) GROUP BY orderStatus;";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                                while ($row = mysqli_fetch_assoc($result))
                                    echo "'" . $row["orders"] . "'" . ","
                            ?>]
                },
                {
                    label: '2022',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [<?php
                            $sql = "SELECT orderStatus, COUNT(*) as orders FROM `orders` WHERE year(orderDate)=YEAR(CURDATE())-1 GROUP BY orderStatus;";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                                while ($row = mysqli_fetch_assoc($result))
                                    echo "'" . $row["orders"] . "'" . ","
                            ?>]
                },
            ]
        }


        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, barChartData)
        var temp0 = barChartData.datasets[0]
        var temp1 = barChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackChartData = {
            labels: ["COD", "Online Payment"],
            datasets: [{
                    label: '2023',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [<?php
                            $sql = "SELECT paymentMode,COUNT(*) as orders FROM `orders`WHERE year(orderDate)=YEAR(CURDATE()) GROUP BY paymentMode;";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                                while ($row = mysqli_fetch_assoc($result))
                                    echo "'" . $row["orders"] . "'" . ","
                            ?>]
                },
                {
                    label: '2022',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [<?php
                            $sql = "SELECT paymentMode,COUNT(*) as orders FROM `orders`WHERE year(orderDate)=YEAR(CURDATE())-1 GROUP BY paymentMode;";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0)
                                while ($row = mysqli_fetch_assoc($result))
                                    echo "'" . $row["orders"] . "'" . ","
                            ?>]
                },
            ]
        }
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = $.extend(true, {}, stackChartData)

        var stackedBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>