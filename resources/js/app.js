import './bootstrap';

import 'jquery';
import 'summernote/dist/summernote-bs4.min.js';

import Chart from 'chart.js/auto';
import 'chartjs-adapter-moment';

$('body').on('click', '#update-chart', function () {
    $.ajax({
        url: '/chart/data',
        type: 'get',
        success: function (response) {
            var ctx = document.getElementById('chart').getContext('2d');
            new Chart(ctx, response.chart);
        }
    });
});
