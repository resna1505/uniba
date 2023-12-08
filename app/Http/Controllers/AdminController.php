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
use DB;

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
            $mhsL = DB::table('msmhs as a')
            ->join('mahasiswa as b', 'a.NIMHSMSMHS', '=', 'b.ID')
            ->leftJoin('mahasiswa2 as c', 'b.ID', '=', 'c.ID')
            ->where('b.STATUS', '=', 'A')
            ->where('b.KELAMIN', '=', 'L') // Mengambil data laki
            ->count();

            $mhsP = DB::table('msmhs as a')
            ->join('mahasiswa as b', 'a.NIMHSMSMHS', '=', 'b.ID')
            ->leftJoin('mahasiswa2 as c', 'b.ID', '=', 'c.ID')
            ->where('b.STATUS', '=', 'A')
            ->where('b.KELAMIN', '=', 'P') // Mengambil data perempuan
            ->count();

            $mhsTotal = DB::table('msmhs as a')
            ->join('mahasiswa as b', 'a.NIMHSMSMHS', '=', 'b.ID')
            ->leftJoin('mahasiswa2 as c', 'b.ID', '=', 'c.ID')
            ->count();

            $dosenL = DB::table('dosen as a')
            ->join('msdos as b', 'a.ID', '=', 'b.NODOSMSDOS')
            ->where('a.STATUSKERJA', '=', 'A')
            ->where('b.KDJEKMSDOS', '=', 'L')
            ->count();

            $dosenP = DB::table('dosen as a')
            ->join('msdos as b', 'a.ID', '=', 'b.NODOSMSDOS')
            ->where('a.STATUSKERJA', '=', 'A')
            ->where('b.KDJEKMSDOS', '=', 'P')
            ->count();

            $dosenTotal = DB::table('dosen as a')
            ->join('msdos as b', 'a.ID', '=', 'b.NODOSMSDOS')
            ->count();
            
        return view('admin.dashboard',compact('mhsL','mhsP','mhsTotal','dosenL','dosenP','dosenTotal'), [
            // 'TopTrend' => $chart->build(),
            'Kelulusan' => $charts->build(),
            // 'DonutChart' => $donutChart->build(),
            // 'RadialChart' => $radialChart->build(),
            // 'PolarChart' => $polarChart->build(),
            // 'LineChart' => $lineChart->build(),
            'AreaChart' => $areaChart->build(),
            // 'BarChart' => $barChart->build(),
            // 'HorizontalChart' => $horizontalChart->build()
        ]);
    }
}
