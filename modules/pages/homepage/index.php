<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
   <?php require 'modules/components/nav.php'; ?>

<!-- MAIN CONTENT -->
<section class="main">
   <div class="container">
       <div class="row">

       		<div class="col-md-12">
 	  			<!-- HEADER PAGE -->
                <header class="header-page">
                    <h1 class="title">Ringkasan Akun</h1>
                </header>
                <!-- END HEADER PAGE -->
       		</div>

       		<div class="clearfix"></div>
       		
       		<!-- Filter revenue -->
			<?php require 'modules/pages/homepage/revenue.php'; ?>
       		<!-- end Filter revenue -->

       		<!-- properties -->
			<?php require 'modules/pages/homepage/properties.php'; ?>
       		<!-- end  properties -->

       		<div class="clearfix"></div>

       		<!-- Graph revenue -->
			<?php require 'modules/pages/homepage/graph-revenue.php'; ?>
       		<!-- end Graph revenue -->

       		<!-- latest transaction -->
			<?php require 'modules/pages/homepage/latest-transaction.php'; ?>
       		<!-- end latest transaction -->

			<div class="clearfix"></div>

       </div>
   </div>

</section>
<!--  END MAIN CONTENT -->

   <?php require 'modules/components/footer.php'; ?>
   
   <?php require 'all-javascript.php'; ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript">
        Highcharts.chart('monthly-revenue', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Pendapatan Bulan April'
            },
            xAxis: {
                categories: [
                                '1/04',
                                '2/04',
                                '3/04',
                                '4/04',
                                '5/04',
                                '6/04',
                                '7/04',
                                '8/04',
                                '9/04',
                                '10/04',
                                '11/04',
                                '12/04',
                                '13/04',
                                '14/04',
                                '15/04',
                                '16/04',
                                '17/04',
                                '18/04',
                                '19/04',
                                '20/04',
                                '21/04',
                                '22/04',
                                '23/04',
                                '24/04',
                                '25/04',
                                '26/04',
                                '27/04',
                                '28/04',
                                '29/04',
                                '30/04'
                            ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total pendapatan dalam K'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
                }
            },
            legend: {
                align: 'center',
                x: 0,
                verticalAlign: 'bottom',
                y: 0,
                floating: false,
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                headerFormat: '<b>{point.x}</b><br/>',
                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: false,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }
            },
            series: [{
                name: 'Akomodasi',
                data: [ 500, 300, 400, 700, 200, 100, 180, 400, 450, 180,
                        350, 250, 200, 300, 320, 120, 400, 500, 200, 500,
                        250, 150, 210, 330, 100, 140, 500, 200, 300, 400,
                        ]
            }, {
                name: 'Perlengkapan',
                data: [ 350, 250, 200, 300, 320, 120, 400, 500, 200, 500,
                        350, 250, 200, 300, 320, 120, 400, 500, 200, 500,
                        350, 250, 200, 300, 320, 120, 400, 500, 200, 500,
                        ]
            }, {
                name: 'Transportasi',
                 data: [ 350, 250, 200, 300, 320, 120, 400, 500, 200, 500,
                        350, 250, 200, 300, 320, 120, 400, 500, 200, 500,
                        350, 250, 200, 300, 320, 120, 400, 500, 200, 500,
                        ]
            }]
        });

        Highcharts.chart('yearly-revenue', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Pendapatan Tahun 2017'
            },
            xAxis: {
                categories: [
                                'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                            ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total pendapatan dalam K'
                },
                stackLabels: {
                    enabled: true,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
                }
            },
            legend: {
                align: 'center',
                x: 0,
                verticalAlign: 'bottom',
                y: 0,
                floating: false,
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false
            },
            tooltip: {
                headerFormat: '<b>{point.x}</b><br/>',
                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
            },
            plotOptions: {
                column: {
                    stacking: 'normal',
                    dataLabels: {
                        enabled: false,
                        color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                    }
                }
            },
            series: [{
                name: 'Akomodasi',
                data: [ 5500, 3500, 4600, 7600, 2600, 1600, 1380, 4400, 2450, 4180,
                        3504, 2550
                        ]
            }, {
                name: 'Perlengkapan',
                data: [ 3520, 2540, 2100, 3020, 3230, 1230, 4050, 5050, 2500, 5200,
                        3520, 2530
                        ]
            }, {
                name: 'Transportasi',
                 data: [ 3500, 2500, 2000, 3000, 3200, 1250, 4400, 1500, 2200, 5100,
                        3500, 2500
                        ]
            }]
        });


    </script>
</body>
</html>