<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class KelulusanMahasiswaChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Tingkat Kelulusan Mahasiswa')
            ->setSubtitle('Rata-rata')
            ->addData('Data 1', [6, 9, 3, 4, 10, 8])
            ->addData('Data 2', [7, 3, 8, 2, 6, 4])
            ->setHeight(385)
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
