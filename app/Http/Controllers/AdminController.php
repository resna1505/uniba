<?php

namespace App\Http\Controllers;

use App\Charts\AreaChart;
use App\Charts\BarChart;
use App\Charts\DonutChart;
use App\Charts\HorizontalChart;
use App\Charts\KelulusanMahasiswaChart;
use App\Charts\LineChart;
use Illuminate\Http\Request;
use App\Charts\MahasiswaMasukKeluarChart;
use App\Charts\PolarChart;
use App\Charts\RadialChart;

class AdminController extends Controller
{
    public function dashboard(
        MahasiswaMasukKeluarChart $chart,
        KelulusanMahasiswaChart $charts,
        DonutChart $donutChart,
        RadialChart $radialChart,
        PolarChart $polarChart,
        LineChart $lineChart,
        AreaChart $areaChart,
        BarChart $barChart,
        HorizontalChart $horizontalChart
        ) {
        return view('admin.dashboard', [
            'TopTrend' => $chart->build(),
            'Kelulusan' => $charts->build(),
            'DonutChart' => $donutChart->build(),
            'RadialChart' => $radialChart->build(),
            'PolarChart' => $polarChart->build(),
            'LineChart' => $lineChart->build(),
            'AreaChart' => $areaChart->build(),
            'BarChart' => $barChart->build(),
            'HorizontalChart' => $horizontalChart->build()
        ]);
    }
}
