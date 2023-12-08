<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MahasiswaMasukKeluarChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Program Studi')
            ->setSubtitle('Popularitas')
            ->addData([20, 40, 30, 10])
            // ->setWidth(300)
            ->setHeight(400)
            ->setLabels(['Kedokteran', 'Ilmu Kesehatan', 'Teknik', 'Ekonomi dan Bisnis']);
    }
}
