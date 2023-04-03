<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HighChart</title>
</head>
<body> 
    <div id="chart-container"></div>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script>
    Highcharts.chart('chart-container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Daftar Wisata'
    },
    xAxis: {
        categories: ['jan','Feb','March','Apr','Mei','Jun','July'],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} tempat</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [ {
        name: 'wisata',
        data: [83, 78, 98, 93, 106, 84, 105,]

    }]
});

</script>            
</body>
</html>