<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class SampleChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
{
    $this->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July'])
         ->dataset('Sample Chart', 'line', [100, 200, 150, 300, 250, 400, 350]);
}

    }
}
